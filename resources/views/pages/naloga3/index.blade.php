@extends('layouts.naloga3')

@section('title')
    SSI - Tilen Sapač 
@endsection

@section('content')

    <header id="meni_container">
        <div id="meni_limiter">
            <div id="logo_container">
                <img id="logo" src="{{ asset('slike/logo.png') }}" alt="logo">
            </div>
            <div id="text_container">
                <p>MENU</p>
            </div>    
        </div>   
        <div id="heading_container">
            <div id="heading_div">
                <p>Carshow: Srečanje športnih avtomobilov</p>
                <p id="sub_heading">Murska Sobota</p>
            </div>
        </div> 
    </header>

    <div id="image_container">
    </div>

    <div id="main_row_container">
        <div id="row_container">
            <div id="column">
                <div id="main_wrapper">
                    <div id="column_image">
                        <img src="{{ asset('slike/bmw.jpg') }}" alt="BMW">
                        <p id="image_text">BMW</p>
                    </div>
                    <div id="column_text">
                        <div>sobota, 7. obtober 2023</div>
                        <span>Zbor avtomobilov znamke BMW</span>
                    </div>
                </div>
            </div>
            <div id="column">
                <div id="main_wrapper">
                    <div id="column_image">
                        <img src="{{ asset('slike/audi.jpg') }}" alt="Audi">
                        <p id="image_text">AUDI</p>
                    </div>
                    <div id="column_text">
                        <div>sobota, 14. obtober 2023</div>
                        <span>Zbor avtomobilov znamke AUDI</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="main_contact">
        <div id="contact_limiter">
            <div id="contact_form">
                <p>Kontakt</p>
                <form>
                    <div id="colomn_flow">
                        <input type="email" placeholder="Elektronski naslov" required>
                        <textarea type="text" rows="4" cols="50" placeholder="Sporočilo" required></textarea>
                    </div>
                    <button id="button_submit" type="submit">Pošlji</button>
                </form>
            </div>
        </div>
    </div>

    <footer id="bottom_main_wrapper">
        <nav id="bottom_limiter">
            <ul id="bottom_meni">
                <li><a href="#">o straneh</a></li>
                <li><a href="#">kazalo</a></li>
                <li><a href="#">kontakt</a></li>
                <li><a href="#">na vrh</a></li>
            <ul>
        </nav>
    </footer>


@endsection