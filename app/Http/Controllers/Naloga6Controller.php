<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class Naloga6Controller extends Controller
{
    public function postName(Request $request)
    {
        $username = strip_tags(trim($request->input('username')));
        $password = strip_tags(trim($request->input('password')));
        $re_password = strip_tags(trim($request->input('re_password')));
        $gender = $request->input('gender');
        $status = $request->input('status');
        $controller_response = "";
        $username_error = false;
        $password_error = false;
        $re_password_error = false;

        if( empty($username) || empty($password) || empty($re_password) )
        {
            $controller_response = "Niste izpolnili vsa polja";
            if( empty($username) )
            {
                $username_error = true;
            }
            if( empty($password) )
            {
                $password_error = true;
            }
            if( empty($re_password) )
            {
                $re_password_error = true;
            }
        }
        else
        {
            if($password != $re_password)
            {
                $controller_response = "Gesli se ne ujemata";
            } 
            else
            {
                $controller_response = "
                    <p>Registracija je uspela. Vpisali ste<p>
                    <p>Ime: ".$username."</p>
                    <p>Geslo: ".$password."</p>
                    <p>Spol: ".$gender."</p>
                    <p>Status: ".$status."</p>
                ";
            }
        }
        return view("pages.naloga6.index", [
            'controller_response' => $controller_response,
            'username' => $username,
            'password' => $password,
            're_password' => $re_password,
            'gender' => $gender,
            'status' => $status,
            'username_error' => $username_error,
            'password_error' => $password_error,
            're_password_error' => $re_password_error
        ]);
    }
}
