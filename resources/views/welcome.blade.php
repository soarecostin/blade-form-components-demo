<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app-bootstrap.css') }}" rel="stylesheet">

        <style type="text/css">
            .masthead {
                height: 100vh;
                min-height: 500px;
                background-image: url('https://source.unsplash.com/PxrRwO4CwAI/1920x1080');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <h1 class="font-weight-light">Blade Form Components Demo</h1>
                        <p class="lead">
                            <a class="btn btn-outline-dark" href="{{ route('demo-bootstrap') }}">Bootstrap</a>&nbsp;
                            <a class="btn btn-outline-dark" href="{{ route('demo-bulma') }}">Bulma</a>&nbsp;
                            <a class="btn btn-outline-dark" href="{{ route('demo-tailwind') }}">Tailwind</a>
                        </p>
                        <p class="mt-5">
                            <a class="btn btn-dark" href="https://github.com/soarecostin/blade-form-components" target="_blank">View on Github</a>
                        </p>
                        <p class="">
                            by <a class="link-unstyled" href="https://costin.soa.re" target="_blank">Costin Soare</a>
                        </p>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>
