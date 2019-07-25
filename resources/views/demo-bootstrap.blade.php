<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app-bootstrap.css') }}" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12 p-5">
                    <div class="card">
                        <div class="card-body">
                            @include ('form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
