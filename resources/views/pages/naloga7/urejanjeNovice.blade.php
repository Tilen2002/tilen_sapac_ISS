@extends('layouts.naloga7')

@section('title')
    Naloga 7 - Tilen Sapač
@endsection
@section('content')
<form action="/naloga-7/update-news" method="post" id="editNews">
    @csrf
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
            <div class="hidden" id="response_container">
                <p class="hidden" id="response_message">
                </p>
            </div>
            <div class="flex w-full flex-col pt-5">
                @foreach ($data as $item)
                    <label class="text-gray-700 font-medium" for="naslov">Naslov novice:</label>
                    <input class="border-2 w-full rounded px-1" type="text" spellcheck="false" name="naslov" id="naslov" value="{{ $item->naslov }}" required>

                    <label class="text-gray-700 font-medium pt-4" for="podnaslov">Podnaslov:</label>
                    <input class="border-2 w-full rounded px-1" type="text" spellcheck="false" name="podnaslov" id="podnaslov" value="{{ $item->podnaslov }}" required>

                    <label class="text-gray-700 font-medium pt-4" for="vsebina">Vsebina:</label>
                    <textarea  class="border-2 w-full rounded px-1" spellcheck="false" name="vsebina" id="vsebina" rows="4" cols="50" required>{{ $item->vsebina }}</textarea>

                    <input class="hidden" type="text" name="slug" id="slug" value="{{ $item->slug }}">
                @endforeach
            </div>
        </div>
        <div class="w-full max-w-screen-2xl px-10">
            <button type="submit" class="mt-4 px-2 text-gray-700 font-medium py-1 rounded hover:bg-gray-100 transition-all duration-200 border-2">Uredi</button>
        </div>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#editNews').submit(function (event) {
                event.preventDefault();
                var formData = $('#editNews').serialize();
                var response_container = document.getElementById('response_container');
                var response_message = document.getElementById('response_message');
                $.ajax({
                    type: 'POST',
                    url: $('#editNews').attr('action'),
                    data: formData,
                    success: function (response) {
                        response_container.className = '';
                        response_message.className = '';
                        response_container.className = 'flex w-full mt-4 text text-4xl rounded bg-[#DFF0D8] border-[2px] border-[#DBEDD0]';
                        response_message.className = 'px-3 py-3 text-base text-[#548A5C]';
                        response_message.innerText = response.message;
                    },
                    error: function (xhr) {
                        response_container.className = '';
                        response_message.className = '';
                        response_container.className = 'flex w-full mt-4 text text-4xl rounded bg-[#F2DEDE] border-[2px] border-[#EDD1D4]';
                        response_message.className = 'px-3 py-3 text-base text-[#BF5959]';

                        // Check if xhr.responseJSON is defined and has the error property
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            response_message.innerText = xhr.responseJSON.error;
                        } else {
                            // If xhr.responseJSON or xhr.responseJSON.error is not defined, use a default error message
                            response_message.innerText = 'An unexpected error occurred.';
                        }
                    },
                });
            });
        });
    </script>
@endsection