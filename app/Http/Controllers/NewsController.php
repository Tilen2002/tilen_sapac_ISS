<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    public function showNews(Request $request)
    {
        if ($request->hasCookie('uporabnik')) {
            Session::put('username', $request->cookie('uporabnik'));
        }

        $data = DB::table('novica')
            ->select('naslov', 'podnaslov', 'vsebina', 'ustvarjeno', 'posodobljeno', 'slug')
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();

        $data_last3 = DB::table('novica')
        ->select('naslov', 'podnaslov', 'vsebina', 'ustvarjeno', 'posodobljeno', 'slug')
        ->orderBy('id', 'desc')
        ->offset(1)
        ->limit(3)
        ->get();

        return view('pages.naloga7.index', ['data' => $data, 'last3' => $data_last3]);
    }

    public function showSingleNews($slug)
    {
        $data = DB::table('novica')
            ->select('naslov', 'podnaslov', 'vsebina', 'ustvarjeno', 'posodobljeno', 'slug')
            ->where('slug', $slug)
            ->get();

        return view('pages.naloga7.novica', ['data' => $data]);
    }

    public function generateSlug($naslov)
    {
        $text = str_replace(' ', '-', $naslov);
        $text = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '', $text));
        $slug = $text;
        $counter = 0;
        do {
            $stevilo = DB::table('novica')->where('slug', $slug)->count();
            if ($stevilo != 0) {
                $counter++;
                $slug = $text . '-' . $counter;
            }
        } while ($stevilo != 0);

        return $slug;
    }

    public function saveNews(Request $request)
    {

        $naslov = $request->input('naslov');
        $podnaslov = $request->input('podnaslov');
        $vsebina = $request->input('vsebina');
        $cas = new DateTime();
        
        $slug = $this->generateSlug($naslov);

        if (DB::table('novica')->insert([
            'naslov' => $naslov,
            'podnaslov' => $podnaslov,
            'vsebina' => $vsebina,
            'ustvarjeno' => $cas->format('Y-m-d H:i:s'),
            'slug' => $slug,
        ])) {
            return response()->json(['message' => 'Novica je bila uspešno dodana']);
        } else {
            return response()->json(['message' => 'Prišlo je do napake. Novica ni bila dodana']);
        }
    }

    public function newsForEdit()
    {
        $data = DB::table('novica')
        ->select('naslov','slug', 'id')
        ->orderBy('id', 'desc')
        ->get();

        return view('pages.naloga7.urediNovica', ['data' => $data]);
    }

    public function editNews($slug)
    {
        $data = DB::table('novica')
            ->select('naslov', 'podnaslov', 'vsebina', 'ustvarjeno', 'posodobljeno', 'slug')
            ->where('slug', $slug)
            ->get();

        return view('pages.naloga7.urejanjeNovice', ['data' => $data]);
    }

    public function updateNews(Request $request)
    {
        $naslov = trim($request->input('naslov'));
        $podnaslov = trim($request->input('podnaslov'));
        $vsebina = $request->input('vsebina');
        $slug = $request->input('slug');
        $cas = new DateTime();

        if(strlen($naslov)==0)
        {
            return response()->json(['error' => 'Neustrezni vnosni podatki za naslov novice'], 400);
        }
        if(strlen($podnaslov)==0)
        {
            return response()->json(['error' => 'Neustrezni vnosni podatki za podnaslov novice'], 400);
        }
        if($naslov != strip_tags($naslov)) 
        {
            return response()->json(['error' => 'Vnosni podatki za naslov ne smejo vsebovati HTML značk'], 400);
        }
        if($podnaslov != strip_tags($podnaslov)) 
        {
            return response()->json(['error' => 'Vnosni podatki za podnaslov ne smejo vsebovati HTML značk'], 400);
        }

        if (DB::table('novica')
            ->where('slug', $slug)
            ->update([
                'naslov' => $naslov,
                'podnaslov' => $podnaslov,
                'vsebina' => $vsebina,
                'posodobljeno' => $cas->format('Y-m-d H:i:s')
        ])) {
            return response()->json(['message' => 'Novica je bila uspešno urejena']);
        } else {
            return response()->json(['error' => 'Prišlo je do napake. Spremembe niso bile shranjene'], 400);
        }
    }

    public function deleteNews($slug)
    {
        DB::table('novica')->where('slug', $slug)->delete();
        return redirect()->route('UrejanjeNovice');
    }

}
