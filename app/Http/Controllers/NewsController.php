<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function showNews()
    {
        $data = DB::table('novica_8')
            ->select('naslov', 'podnaslov', 'vsebina', 'ustvarjeno', 'posodobljeno', 'slug')
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();

        $data_last3 = DB::table('novica_8')
        ->select('naslov', 'podnaslov', 'vsebina', 'ustvarjeno', 'posodobljeno', 'slug')
        ->orderBy('id', 'desc')
        ->offset(1)
        ->limit(3)
        ->get();

        return view('pages.naloga7.index', ['data' => $data, 'last3' => $data_last3]);
    }

    public function showSingleNews($slug)
    {
        $data = DB::table('novica_8')
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
            'posodobljeno' => $cas->format('Y-m-d H:i:s'),
            'slug' => $slug,
        ])) {
            return response()->json(['message' => 'Novica je bila uspešno dodana']);
        } else {
            return response()->json(['message' => 'Prišlo je do napake. Novica ni bila dodana']);
        }
    }
}
