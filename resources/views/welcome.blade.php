<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Chilewine</title>

        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('img//apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ url('img//favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ url('img//favicon-16x16.png') }}">
        <link rel="manifest" href="{{ url('img//site.webmanifest') }}">
        <link rel="mask-icon" href="{{ url('img//safari-pinned-tab.svg') }}" color="#434a54">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #434a54;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 180;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        @include('partials.analytics')
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <img src="{{ url('img/chilewine.svg') }}" alt="Chilewine" width="150">
                <div class="title m-b-md">
                    ChileWine
                </div>

                <div class="links">
                    {{ date("Y") }} © Todos los derechos reservados
                </div>
            </div>
        </div>
    </body>
</html>
