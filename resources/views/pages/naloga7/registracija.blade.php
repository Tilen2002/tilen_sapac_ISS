@extends('layouts.naloga7')

@section('title')
    Naloga 7 - Tilen Sapač
@endsection
@section('content')
<form action="/naloga-7/registracijaSave" method="POST" id="form_registracija">
    @csrf
    <div class="w-full flex flex-col justify-center items-center">
        <div class="w-full flex-col flex max-w-screen-2xl px-10 justify-center items-center">
            <div class="flex w-full pt-10 text text-4xl font-semibold text-gray-700 pb-5 border-b-2 items-end">
                Registracija
            </div>
            <div class="hidden" id="response_container">
                <p class="hidden" id="response_message">
                </p>
            </div>

            <div class="flex w-full flex-col pt-5">
                <div class="grid max-w-2xl grid-cols-3 items-center gap-x-7 gap-y-3">
                    <label class="text-gray-700 font-medium text-right" for="username">Uporabniško ime</label>
                    <input class="border-2 rounded px-1 col-span-2" type="text" name="username" id="username" required>
                
                    <label class="text-gray-700 font-medium text-right" for="password">Geslo</label>
                    <input class="border-2 rounded px-1 col-span-2" type="password" name="password" id="password" required>

                    <label class="text-gray-700 font-medium text-right" for="re_password">Ponovno geslo</label>
                    <input class="border-2 rounded px-1 col-span-2" type="password" name="re_password" id="re_password" required>
                    <div></div>
                    <div class="w-full">
                        <button type="submit" class="px-2 text-gray-700 font-medium py-1 rounded hover:bg-gray-100 transition-all duration-200 border-2">Registracija</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#form_registracija').submit(function (event) {
                event.preventDefault();
                var formData = $('#form_registracija').serialize();
                var response_container = document.getElementById('response_container');
                var response_message = document.getElementById('response_message');
                $.ajax({
                    type: 'POST',
                    url: $('#form_registracija').attr('action'),
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
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            response_message.innerText = xhr.responseJSON.error;
                        } else {
                            response_message.innerText = 'An unexpected error occurred.';
                        }
                    },
                });
            });
        });
    </script>
@endsection