@extends('layouts.default')

@section('title')
    SSI - Tilen Sapač
@endsection
@section('content')
    <div class="w-full min-h-screen flex flex-row justify-center" id="home_bg">   
        <div class="flex flex-col justify-center items-center max-w-screen-xl min-w-[25rem]">
            <div class="flex flex-col translate-y-[-2rem] justify-center items-center bg-black px-12 py-4 bg-opacity-70 rounded-md text-gray-200 w-full">
                <div class="font-bold text-[2rem] text-[#ffaf46]">
                    SSI
                </div>
                <p class="font-semibold pb-2">Pregled nalog pri predmetu SSI</p>
                <div class="w-full grid grid-cols-1 gap-y-[0.4rem] pt-2">
                        <div class="w-full py-[0.2rem] rounded-sm flex items-center justify-center font-semibold text-[#000000] bg-[#8a8d90] hover:bg-[#c5cacd] transition-all duration-100"><a class="w-full flex justify-center" href="/naloga-1">Naloga 1</a></div>
                        <div class="w-full py-[0.2rem] rounded-sm flex items-center justify-center font-semibold text-[#000000] bg-[#8a8d90] hover:bg-[#c5cacd] transition-all duration-100"><a class="w-full flex justify-center" href="/naloga-2">Naloga 2</a></div>
                        <div class="w-full py-[0.2rem] rounded-sm flex items-center justify-center font-semibold text-[#000000] bg-[#8a8d90] hover:bg-[#c5cacd] transition-all duration-100"><a class="w-full flex justify-center" href="/naloga-3">Naloga 3</a></div>
                        <div class="w-full py-[0.2rem] rounded-sm flex items-center justify-center font-semibold text-[#000000] bg-[#8a8d90] hover:bg-[#c5cacd] transition-all duration-100"><a class="w-full flex justify-center" href="/naloga-4">Naloga 4</a></div>
                        <div class="w-full py-[0.2rem] rounded-sm flex items-center justify-center font-semibold text-[#000000] bg-[#8a8d90] hover:bg-[#c5cacd] transition-all duration-100"><a class="w-full flex justify-center" href="/naloga-5">Naloga 5</a></div>
                        <div class="w-full py-[0.2rem] rounded-sm flex items-center justify-center font-semibold text-[#000000] bg-[#8a8d90] hover:bg-[#c5cacd] transition-all duration-100"><a class="w-full flex justify-center" href="/naloga-6">Naloga 6</a></div>
                        <div class="w-full py-[0.2rem] rounded-sm flex items-center justify-center font-semibold text-[#000000] bg-[#8a8d90] hover:bg-[#c5cacd] transition-all duration-100"><a class="w-full flex justify-center" href="/naloga-7">Naloga 7</a></div>
                        <div class="w-full py-[0.2rem] rounded-sm flex items-center justify-center font-semibold text-[#000000] bg-[#8a8d90] hover:bg-[#c5cacd] transition-all duration-100"><a class="w-full flex justify-center" href="/naloga-8">Naloga 8</a></div>
                        <div class="w-full py-[0.2rem] rounded-sm flex items-center justify-center font-semibold text-[#000000] bg-[#8a8d90] hover:bg-[#c5cacd] transition-all duration-100"><a class="w-full flex justify-center" href="/naloga-9">Naloga 9</a></div>
                        <div class="w-full py-[0.2rem] rounded-sm flex items-center justify-center font-semibold text-[#000000] bg-[#8a8d90] hover:bg-[#c5cacd] transition-all duration-100"><a class="w-full flex justify-center" href="/naloga-10">Naloga 10</a></div>
                </div>
                <div class="flex w-full justify-start items-start">
                    <p class="text-sm pt-3 font-semibold text-[#ffaf46]">Študent: Tilen Sapač</p>
                </div>
            </div>
        </div>
    </div>
@endsection