<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('general.app_name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center  full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">{{ __('general.home') }}</a>
                    @else
                        <a href="{{ route('login') }}">{{ __('general.login') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{ __('general.register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{__('general.app_name')}}
                </div>
"
                <p class="text-left">Conheça esse sistema criado para você armazenar informações sobre seu currículo, como:</p>
                <div class="links">
                    <a href="#">Experiência profissional</a>
                    <a href="#">Cursos, especializações, graduações...</a>
                    <a href="#">Informações pessoais e de apresentação</a>
                    <a href="#">Principais habilidades</a>
                    <a href="#">Idiomas</a>
                </div>
                <p class="text-left">Além disso, o sistema permite a geração do currículo em formato PDF em diferentes idiomas e fontes.</p>
                <p class="text-left">Chega de sistemas burocráticos para preenchimento de informações sobre você, esse sistema foi feito por pessoas que gostam de praticidade.</p>
            </div>
        </div>
    </body>
</html>
