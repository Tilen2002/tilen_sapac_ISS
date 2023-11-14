@extends('layouts.naloga6')

@section('title')
    Naloga 6 - Tilen Sapač
@endsection
@section('content')

    <div id="main_container">
        <h1 id="reg_text">Registracija</h1>
        <form id="main_form" name="form" method="POST" action='/naloga-6-post'>
            @csrf
            <div id="input_wrapper">
                <label for="username">Vnesi ime</label>
                <input type="text" name="username" id="username" @if(isset($username)) value='{{ $username }}' @endif @if(isset($username_error) && $username_error==true ) style='background-color:red;' @endif>

            </div>
            <div id="input_wrapper">
                <label for="password">Vnesi geslo</label>
                <input type="password" name="password" id="password" @if(isset($password)) value='{{ $password }}' @endif @if(isset($password_error) && $password_error==true) style='background-color:red;' @endif>
            </div>
            <div id="input_wrapper">
                <label for="re_password">Vnesi geslo še enkrat</label>
                <input type="password" name="re_password" id="re_password" @if(isset($re_password)) value='{{ $re_password }}' @endif @if(isset($re_password_error) && $re_password_error==true) style='background-color:red;' @endif>
            </div>
            <div id="gender_wrapper">
                <p>Izberi spol:</p>
                @php
                    $spol = ["moški", "ženski"];
                    $izbranSpol = isset($gender) ? $gender : "moški";
                @endphp

                @foreach ($spol as $option)
                    <label>
                        <input type="radio" name="gender" value="{{ $option }}" @if ($izbranSpol == $option) checked @endif>
                        {{ $option }}
                    </label>
                @endforeach
            </div>
            <div id="status_wrapper">
                <p>Izberi status:</p>
                <select name="status">
                    @php
                    $statusi = ["Dijak", "Študent", "Zaposlen", "Brezposeln"];
                    $izbranStatus = isset($status) ? $status : "Študent";
                    @endphp
                    @foreach ($statusi as $option)
                        <option value="{{ $option }}" {{ $izbranStatus == $option ? 'selected' : '' }}>
                            {{ $option }}
                        </option>
                    @endforeach
                </select>                
            </div>

            <div name="g-recaptcha" id="g-recaptcha" class="g-recaptcha mb-3" data-sitekey="6Letow8pAAAAAPgNpYTFaeAY_bkjGSPLUefVXRnN"></div>

            <div>
                <button type="submit" id="reg_btn">Pritisni me</button>
            </div>
            <p id="output_name">
                @php
                    if(isset($controller_response))
                    {
                        echo($controller_response);
                    }
                @endphp
            </p>
        </form>
    </div>
@endsection