@extends('layouts.naloga7')

@section('title')
    Naloga 7 - Tilen Sapač
@endsection
@section('content')
    <div class="w-full flex justify-center items-center">
        <div class="w-full flex-col flex max-w-screen-2xl px-10">
            <p class="flex w-full pt-10 text text-4xl font-semibold text-gray-700 pb-5 border-b-2">
                Novice
            </p>
            <div class="flex w-full pt-5">
                @foreach ( $data as $item)
                <div>
                    <p class="text-4xl font-semibold text-gray-700">{{ $item->naslov }}</p>
                    <p class="py-3 text-base font-medium text-gray-700">{{ (new DateTime($item->ustvarjeno))->format('d. ') . strtolower((new DateTime($item->ustvarjeno))->format('F Y, H:i:s')) }}</p>
                    <p class="pb-3">{{ $item->podnaslov }}</p>
                    <p>{{ $item->vsebina }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection