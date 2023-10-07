@extends('layouts.naloga4')

@section('title')
    SSI - Tilen Sapač 
@endsection

@section('content')

    <div>don't worry</div>
    <div>be happy</div>
    
    <table style="text-align: left; width: 500px;" border="1" cellpadding="2" cellspacing="0">
        <tbody>
            <tr>
                <td>
                    ime in priimek<br>
                </td>
                <td>
                    spol<br>
                </td>
                <td>
                    kontakt<br>
                </td>
                <td>
                    opis<br>
                </td>
            </tr>
            <tr>
                <td>
                    Janez Novak<br>
                </td>
                <td>
                    m<br>
                </td>
                <td>
                    <a href="mailto:janez.novak@mail.com">e-mail</a><br>
                </td>
                <td>
                    <a href="file://JanezNovak.doc">zivljenjepis</a><br>
                </td>
            </tr>
            <tr>
                <td>
                    Metka Horvat<br>
                </td>
                <td>
                    z<br>
                </td>
                <td>
                    <a href="mailto:janez.novak@mail.com">e-mail</a> </td>
                <td></td>
            </tr>
            <tr>
                <td>
                    Bostjan Pintaric<br>
                </td>
                <td>
                    m<br>
                </td>
                <td>
                    gsm:040-222-333<br>
                </td>
                <td>
                    <a href="file://zivljenjepisBostjanPintaric.pdf">zivljenjepis</a>
                </td>
            </tr>
            <tr>
                <td>
                    Janez Pintaric<br>
                </td>
                <td>
                    m<br>
                </td>
                <td>
                    web: <a href="http://www.janez.si">www.janez.si</a><br>
                </td>
                <td>
                    <a href="file://zivljenjepisJanezPintaric.doc">zivljenjepis</a>
                </td>
            </tr>
            <tr>
                <td>
                    Mojca Horvat<br>
                </td>
                <td>
                    z<br>
                </td>
                <td>
                    <a href="mailto:mojca.horvat@mail.com">e-mail</a><br>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <form name="obrazec" action="" method="post">
        <input type="text" name="name" id="polje"/>
    </form>
    <div class="vpisani"></div>
    <div class="ostalo"></div>
    
    <script>
        var pdf_icon_url = "{{ asset('ikone/pdf_icon.gif') }}";
        var doc_icon_url = "{{ asset('ikone/doc_icon_16.gif') }}";
        var mail_icon_url = "{{ asset('ikone/mail_icon_16x16.png') }}";
        var phone_icon_url = "{{ asset('ikone/phone_icon.gif') }}";
        var www_icon_url = "{{ asset('ikone/world-wide-web.png') }}";
        var man_icon_url = "{{ asset('ikone/man-icon.png') }}";
        var woman_icon_url = "{{ asset('ikone/woman-icon.png') }}";
      </script>
@endsection