@extends('layouts.default')

@section('title')
    SSI - Tilen Sapač {{-- Ne moremo usporabiti ostalih znač oz se ne izvedejo/upoštevajo  --}}
@endsection
@section('content')
    <div class="flex w-full justify-start items-center">
        <div class="max-w-full p-5 text-md">
            <h1 class="font-bold text-3xl pb-4">
                Uvod v splet
            </h1>
            <div class="w-full flex flex-row items-baseline">
                <h2 class="font-bold text-2xl pb-4">
                    HTML
                </h2>
                <a href="#tabela" class="mx-4 font-bold text-md text-white bg-sky-500 px-2 py-1 rounded">
                    Na začetek tabele
                </a>
            </div>
            <p class="pb-4">
                <em>
                    Hyper Text Markup Language
                </em>
                (slovensko jezik za označevanje nadbesedila, kratica 
                <abbr class="no-underline" title="Hyper Text Markup Language">
                    HTML
                </abbr>
                ) je označevalni jezik za izdelavo spletnih strani. Predstavlja osnovo spletnega dokumenta. 
                <br> 
                S pomočjo 
                <a class="text-blue-600 font-semibold underline hover:text-blue-800 hover:cursor:pointer" href="https://www.wikipedia.org">
                    HTML
                </a>
                razen prikaza dokumenta v brskalniku hkrati določimo tudi strukturo in semantični pomen delov dokumenta. Spletna stran je običajno sestavljena iz različnih vrst elementov, kot so:
            </p>
            <ul class="list-disc pl-12 pb-4">
                <li>odstavki,</li>
                <li>slikem,</li>
                <li>tabele,</li>
                <li>seznami ali</li>
                <li>posebej oblikovano besedilo</li>
            </ul>
            <hr class="border border-gray-500 mb-4 mt-2">
            <h2 class="font-bold text-2xl pb-4">
                HTML elementi
            </h2>
            <p class="pb-4">
                Opis elementa je v splošnem sestavljen iz treh delov:
                <ul class="list-decimal pl-12 pb-4">
                    <li class="pl-1">iz 
                        <b>začetne</b> značke,
                    </li>
                    <li class="pl-1"> 
                        <b>vsebine</b> in
                    </li>
                    <li class="pl-1">
                        <b>končne</b> značke.
                    </li>
                </ul>
            </p>
            <hr class="border border-gray-500 mb-6 mt-2">
            <p class="pb-4">
                <sup>Začetna</sup> 
                in 
                <sub>končna</sub>
                značka se pričneta z znakom <, končata z znakom >, vmes pa je zapisano ime elementa. V končni znački je pred imenom vedno znak /. V začetni znački lahko za imenom določimo lastnosti elementa. Za vsako
                <span class="underline">lastnost</span> 
                napišemo presledek, njeno ime, znak = in vrednost lastnosti v dvojnih narekovajih.
            </p>
            <p>Primer strani z uporabo meta značk: <a class="underline text-blue-600 hover:text-blue-800" href="https://www.24ur.com">www.24ur.com</a></p>
        </div>
    </div>
    <div class="w-full flex px-5">
        <div class="w-full grid grid-cols-6 gap-x-1 ">
            <a class="max-w-[200px]" href="{{ asset('slike/slika1.png') }}">
                <div>
                    <img src="{{ asset('slike/slika1.png') }}" alt="slika 1">
                </div>
            </a>
            <a class="max-w-[200px]" href="{{ asset('slike/slika2.png') }}">
                <div>
                    <img src="{{ asset('slike/slika2.png') }}" alt="slika 2">
                </div>
            </a>
            <a class="max-w-[200px]" href="{{ asset('slike/slika3.png') }}">
                <div>
                    <img src="{{ asset('slike/slika3.png') }}" alt="slika 3">
                </div>
            </a>
            <a class="max-w-[200px]" href="{{ asset('slike/slika4.png') }}">
                <div>
                    <img src="{{ asset('slike/slika4.png') }}" alt="slika 4">
                </div>
            </a>
            <a class="max-w-[200px]" href="{{ asset('slike/slika5.png') }}">
                <div>
                    <img src="{{ asset('slike/slika5.png') }}" alt="slika 5">
                </div>
            </a>
            <a class="max-w-[200px]" href="{{ asset('slike/slika6.png') }}">
                <div>
                    <img src="{{ asset('slike/slika6.png') }}" alt="slika 6">
                </div>
            </a>
        </div>
    </div>
    <div class="w-full flex p-5">
        <table class="border-2 border-gray-400" id="tabela">
            <thead>
                <tr class="border-2 border-gray-400">
                    <th class="border-2 px-2 border-gray-400">A</th>
                    <th class="border-2 px-2 border-gray-400">B</th>
                    <th class="border-2 px-2 border-gray-400">C</th>
                    <th class="border-2 px-2 border-gray-400">D</th>
                </tr>
            </thead>
            <tbody class="border-2 border-gray-400">
                <tr class="border-2 border-gray-400">
                    <th class="border-2 border-gray-400">&nbsp</th>
                    <th colspan="2" class="border-2 border-gray-400 bg-red-600">&nbsp</th>
                    <th class="border-2 border-gray-400">&nbsp</th>
                    <th class="border-2 border-gray-400 px-2">1</th>
                </tr>
                <tr class="border-2 border-gray-400">
                    <th class="border-2 border-gray-400">&nbsp</th>
                    <th class="border-2 border-gray-400">&nbsp</th>
                    <th class="border-2 border-gray-400">&nbsp</th>
                    <th class="border-2 border-gray-400">&nbsp</th>
                    <th class="border-2 border-gray-400">2</th>
                </tr>
                <tr class="border-2 border-gray-400">
                    <th class="border-2 border-gray-400">&nbsp</th>
                    <th class="border-2 border-gray-400">&nbsp</th>
                    <th rowspan="2" class="border-2 border-gray-400 bg-blue-600">&nbsp</th>
                    <th class="border-2 border-gray-400">&nbsp</th>
                    <th class="border-2 border-gray-400">3</th>
                </tr>
                <tr class="border-2 border-gray-400">
                    <th class="border-2 border-gray-400 bg-[#35d52a]">&nbsp</th>
                    <th class="border-2 border-gray-400">&nbsp</th>
                    <th class="border-2 border-gray-400">&nbsp</th>
                    <th class="border-2 border-gray-400">4</th>
                </tr>
            </tbody>
        </table>
    <div>
@endsection