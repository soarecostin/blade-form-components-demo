<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Styles -->
        <link href="{{ asset('css/app-bulma.css') }}" rel="stylesheet">
    </head>
    <body>
        <section class="section">
            <div class="container">
                <div class="columns">
                    <div class="column is-three-fifths is-offset-one-fifth">
                        <div class="card">
                            <div class="card-content">        
                                <div class="content">
                                    @include ('form', [
                                        'priceAddons' => [
                                            'prepend' => '<span class="select"><select><option>$</option><option>£</option><option>€</option></select></span>',
                                            'append' => '<span class="button is-static">.00</span>'
                                        ]
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>