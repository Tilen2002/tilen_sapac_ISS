@extends('layouts.naloga7')

@section('title')
    Naloga 7 - Tilen Sapač
@endsection
@section('content')
    <div class="w-full flex justify-center items-center">
        <div class="w-full flex-col flex max-w-screen-2xl px-10">
            <p class="flex w-full pt-10 text text-4xl font-semibold text-gray-700 pb-5 border-b-2">
                Administrator
            </p>
            <div class="flex w-full pt-5">
                <ul class="flex flex-col w-1/2 rounded border-x-2 border-t-2">
                    <li><a href="#" class="w-full flex border-b-2 px-5 py-2 rounded text-gray-700 font-medium hover:bg-sky-600 hover:text-white transition-all duration-200">Novice</a></li>
                    <li><a href="dodaj-novico" class="w-full flex border-b-2 px-5 py-2 rounded text-gray-700 font-medium hover:bg-sky-600 hover:text-white transition-all duration-200">Dodaj</a></li>
                    <li><a href="uredi-novico" class="w-full flex border-b-2 px-5 py-2 rounded text-gray-700 font-medium hover:bg-sky-600 hover:text-white transition-all duration-200">Uredi/Izbriši</a></li>
                <ul>
            </div>
        </div>
    </div>
@endsection