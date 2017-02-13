<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@lang('messages.title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {!! Html::style(mix('css/app.css')) !!}

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ action('Web\HomeController@index') }}">
                            @lang('messages.home')
                        </a>
                    @else
                        <a href="{{ action('Auth\LoginController@showLoginForm') }}">
                            @lang('messages.login')
                        </a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    {{ config('app.name', 'FRMS') }}
                </div>
            </div>
        </div>
    </body>
</html>
