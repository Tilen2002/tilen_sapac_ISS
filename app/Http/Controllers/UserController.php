<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTimeZone;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function createUser(Request $request)
    {
        $username = trim($request->input('username'));
        $password = $request->input('password');
        $re_password = $request->input('re_password');
        $cas = new DateTime();
        $cas->setTimezone(new DateTimeZone('Europe/Ljubljana'));

        if(strlen($username)==0)
        {
            return response()->json(['error' => 'Neustrezno uporabniško ime'], 400);
        }
        if(strlen($password)==0 || strlen($re_password)==0)
        {
            return response()->json(['error' => 'Izpolnite vsa vnosna polja'], 400);
        }
        if(strlen($password)<8)
        {
            return response()->json(['error' => 'Geslo mora biti dolgo najmanj 8 znakov'], 400);
        }
        if(!preg_match('/\d/', $password))
        {
            return response()->json(['error' => 'Geslo mora vsebovati vsaj eno številko'], 400);
        }
        if(!preg_match('/[a-zA-Z]/', $password))
        {
            return response()->json(['error' => 'Geslo mora vsebovati vsaj eno črko'], 400);
        }
        if($password != $re_password)
        {
            return response()->json(['error' => 'Gesli se ne ujemata'], 400);
        }
        if((DB::table('uporabnik')->where('username', $username)->count())>0)
        {
            return response()->json(['error' => 'Uporabnik s tem imenom že obstaja. Vnesite drugo uporabniško ime.'], 400);
        }
        if (DB::table('uporabnik')->insert([
            'username' => $username,
            'password' => sha1($password),
            'created_at' => $cas->format('Y-m-d H:i:s')
        ])) {
            return response()->json(['message' => 'Uspešno ste se registrirali']);
        } else {
            return response()->json(['error' => 'Napaka pri registraciji uporabnika'], 400);
        }
    }

    public function userLogin(Request $request)
    {
        $username = trim($request->input('username'));
        $password = $request->input('password');
        $zapomni = $request->input('zapomni');
        
        if(strlen($username)==0)
        {
            return response()->json(['error' => 'Vnesite uporabniško ime'], 400);
        }
        if(strlen($password)==0)
        {
            return response()->json(['error' => 'Vnesite geslo uporabnika'], 400);
        }
        if((DB::table('uporabnik')->where('username', $username)->count()) == 0)
        {
            return response()->json(['error' => 'Nepravilno uporabniško ime'], 400);
        }
        else
        {
            if(DB::table('uporabnik')->where('username', $username)->where('password', sha1($password))->count() == 0)
            {
                return response()->json(['error' => 'Napačno geslo'], 400);
            }
            else 
            {
                Session::put('username', $username);
                if ($zapomni == 1)
                {
                    return response()->json(['message' => 'Podatki so pravilni'])->cookie('uporabnik', $username, 24 * 60);  
                }
                else
                {
                    return response()->json(['message' => 'Podatki so pravilni'.$zapomni]) ;
                }
            }
        }
    }

    public function userLogout()
    {
        Session::flush();
        // dd(session()->all());
        return redirect()->route('homepage')->cookie('uporabnik', null, -1);
    }
}
