<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Styles -->
        <link href="{{ asset('css/app-tailwind.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-100">
        <div id="app">
            <div class="container mx-auto py-10 flex justify-center items-center">

                <div class="w-full lg:w-3/5 rounded bg-white">
                    <div class="p-6">

                        @include ("form")

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>