@extends('layouts.naloga7')

@section('title')
    Naloga 7 - Tilen Sapač
@endsection
@section('content')
    <div class="w-full flex flex-col h-[35em] items-center" id="naloga7_bg">
        <div class="w-full flex flex-col max-w-screen-2xl px-10 justify-start">
            <div class="w-full flex px-8 py-10 mt-40 rounded bg-black bg-opacity-50">
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
    <div class="w-full flex flex-col items-center">
        <div class="py-10 w-full grid grid-cols-4 max-w-screen-2xl px-10">
            @foreach ( $data as $item )
                <div class="w-full flex h-full justify-start items-center pr-5">
                    <div class="rounded-full 2xl:w-[20rem] 2xl:h-[20rem] xl:w-[15rem] xl:h-[15rem] lg:w-[14rem] lg:h-[14rem] md:w-[10rem] md:h-[10rem] sm:w-[8rem] sm:h-[8rem] h-[8rem] w-[8rem] overflow-hidden">
                        <img src={{ asset('slike/audi_TT.jpg') }}  alt="Your Image" class="object-cover w-full h-full">
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="pb-3">
                    <p class="text-3xl font-semibold text-[#333333] pb-2">{{ $item->naslov }}</p>
                    <p class="font-medium text-[#333333]">
                        {{ (new DateTime($item->ustvarjeno))->format('d. ') . strtolower((new DateTime($item->ustvarjeno))->format('F Y, H:i:s')) }}
                    </p>  
                    <p>{{ $item->vsebina }}</p>
                    </div>
                    <a href="naloga-7/novica/{{ $item->slug }}" class="font-medium hover:bg-gray-200 transition-all duration-200 px-3 py-1 border-2 rounded text-[#333333]">Več</a>
                </div>
                <div class="">
                    <div class="flex w-full pl-8">
                        <ul class="flex flex-col w-full rounded border-x-2 border-t-2">
                            <li><a class="w-full flex border-b-2 px-5 py-2 rounded-sm font-medium bg-[#f9bc41]  text-[#333333]">Zadnje novice</a></li>
                            @foreach ( $last3 as $item)
                                <li><a href="naloga-7/novica/{{ $item->slug }}" class="w-full flex border-b-2 px-5 py-2 rounded-sm text-gray-700 font-medium hover:bg-[#f9bc41] hover:text-[#333333] transition-all duration-200">{{ $item->naslov }}</a></li>
                            @endforeach
                        <ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection