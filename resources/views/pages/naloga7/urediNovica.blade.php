@extends('layouts.naloga7')

@section('title')
    Naloga 7 - Tilen Sapač
@endsection
@section('content')
    <div class="w-full flex flex-col justify-center items-center">
        <div class="w-full flex-col flex max-w-screen-2xl px-10 justify-center items-center">
            <div class="flex w-full pt-10 text text-4xl font-semibold text-gray-700 pb-5 border-b-2 items-end">
                Administrator
                <p class="pl-2 text-2xl text-gray-400">
                    Urejanje novic
                </p>
            </div>
            <div class="flex w-full pt-5">
                <ul class="flex flex-col w-1/2 rounded border-x-2 border-t-2">
                    @foreach ( $data as $item )
                        <li>
                            <a href="uredi/{{ $item->slug }}" class="w-full items-center flex border-b-2 px-5 py-2 rounded text-gray-700 stroke-[#3D4751] hover:stroke-[#ffffff] font-medium hover:bg-sky-600 hover:text-white transition-all duration-200">
                                <svg class="w-6 h-6 mr-2" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14 6L8 12V16H12L18 10M14 6L17 3L21 7L18 10M14 6L18 10M10 4L4 4L4 20L20 20V14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                {{ $item->naslov }}</a></li>
                    @endforeach
                <ul>
            </div>
    </div>
@endsection