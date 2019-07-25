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
                        @include ('form', [
                            'priceAddons' => [
                                'prepend' => '<select class="block appearance-none border border-gray-200 text-gray-700 py-3 px-4 mb-2 rounded border-r-0 rounded-r-none leading-tight"><option>$</option><option>£</option><option>€</option></select>',
                                'append' => '<span class="block border border-gray-200 text-gray-700 py-3 px-4 mb-2 rounded border-l-0 rounded-l-none leading-tight">.00</span>'
                            ]
                        ])
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>