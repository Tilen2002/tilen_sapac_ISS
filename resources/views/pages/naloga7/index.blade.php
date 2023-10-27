@extends('layouts.naloga7')

@section('title')
    Naloga 7 - Tilen Sapač
@endsection
@section('content')
    <div class="w-full flex flex-col h-[45em] items-center" id="naloga7_bg">
        <div class="w-full flex flex-col max-w-screen-2xl px-10 justify-start">
            <div class="w-full flex px-8 py-10 mt-32 rounded bg-black bg-opacity-50">
                <p class="text-5xl text-white font-semibold">Car meet Slovenija<p>
            </div>
            <div class="w-full flex justify-start bg-[#f9bc41]">
                <p class="text-xl px-8 py-1 text-gray-900 font-semibold text-outline">Zaključek sezone 2023<p>
            </div>
            <div class="w-full flex justify-start pt-3">
                <p class="text-xl rounded px-3 py-1 bg-[#BABABA] text-gray-900 font-semibold text-outline hover:cursor-pointer hover:bg-[#f9bc41] transition-all duration-200">Več<p>
            </div>
        </div>
    </div>
@endsection