<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>jQuery</title>

    @vite('resources/css/naloga5/slog.css')
    @vite('resources/js/naloga5/naloga02/funkcije.js')

    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js">
    </script>
  </head>
<body class="p-5">  
    @include('includes.naloga5-meni')
    <div class="w-full flex items-center pb-1 text-sky-900 font-bold text-lg">Treuntna naloga:
        <h1 class="px-2 flex font-bold text-sky-500 text-lg">Naloga02</h1>
    </div>
    <ol class="novice">
        <li>
            <p class="glava">HTML</p>
            <div class="vsebina">
                <p>Hyper Text Markup Language (slovensko jezik za označevanje nadbesedila, kratica HTML) je označevalni jezik za izdelavo spletnih strani. Predstavlja osnovo spletnega dokumenta. S pomočjo HTML-ja ustvarimo strukturo in semantično ureditev dokumenta.</p>
            </div>

        </li>
        <li>
            <p class="glava">CSS</p>
            <div class="vsebina">
                <p>Cascading Style Sheets (kratica CSS) so predloge, ki določajo izgled spletnih strani. Z njimi določamo pisavo, velikosti črk ter vizualno predstavitev spletne strani. HTML naj bi predstavljal semantično strukturo in smiselno hierarhijo dokumenta, CSS pa predstavitveno vlogo.</p>
            </div>
        </li>

        <li>
            <p class="glava">JavaScript</p>
            <div class="vsebina">
                <p>JavaScript je objektni skriptni programski jezik, ki ga je razvil Netscape z namenom, da pomaga spletnim programerjem pri ustvarjanju interaktivnih spletnih strani.</p>
            </div>
        </li>
        <li>

            <p class="glava">jQuery</p>
            <div class="vsebina">
                <p>jQuery is a cross-browser JavaScript library designed to simplify the client-side scripting of HTML.</p>
            </div>
        </li>
        <li>
            <p class="glava">PHP</p>
            <div class="vsebina">
                <p>PHP (trenutno tričrkovni rekurzivni akronim za PHP Hypertext Preprocessor, izvirno pa Personal Home Page Tools, slovensko orodja za osebno spletno stran) je razširjen odprtokodni programski jezik, ki se uporablja za strežniške uporabe oziroma za razvoj dinamičnih spletnih vsebin. Lahko ga primerjamo z Microsoftovim sistemom ASP, VBScript in JScript, Sun Microsystemovim sistemom JSP in Java ter sistemom CGI in Perl.</p>
            </div>
        </li>
        <li>
            <p class="glava">MySQL</p>
            <div class="vsebina">
                <p>MySQL je sistem za upravljanje s podatkovnimi bazami. MySQL je odprtokodna implementacija relacijske podatkovne baze, ki za delo s podatki uporablja jezik SQL.</p>
            </div>
        </li>
        <li>
            <p class="glava">SQL</p>
            <div class="vsebina">
                <p>SQL ali strukturirani povpraševalni jezik za delo s podatkovnimi bazami (angl. Structured Query Language) je najbolj razširjen in standardiziran povpraševalni jezik za delo s podatkovnimi zbirkami, s programskimi stavki, ki posnemajo ukaze v naravnem jeziku. </p>
            </div>
        </li>
    </ol>
    <p class="povezave"><a href="#" class="pokazi_vse">Razširi vse</a> | <a href="#" class="skrij_vse">Skrij vse</a> | <a href="#" class="trenutne_novice">Trenutne novice (prvih 5)</a> <a href="#" class="vse_novice">Vse novice (7)</a></p>
</body>
</html>
