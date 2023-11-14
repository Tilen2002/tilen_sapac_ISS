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
                @foreach ($data as $item)
                    <p class="text-gray-700 font-medium">Želite urediti novico, ki ima slug: {{ $item->slug }}.</p>
                @endforeach
            </div>
    </div>
@endsection