<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- 各ページごとにtitleタグを入れるために@yieldで空けておきます。 --}}
        <title>@yield('title')</title>

        <!-- Scripts -->
        {{-- Laravel標準で用意されているJavascriptを読み込みます --}}
        <script src="{{ asset('/js/app.js') }}" defer></script>
        <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{-- Laravel標準で用意されているCSSを読み込みます --}}
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div id =app>
            <nav class="navbar navbar-expand-md navbar-dark navbar-laravel">
                <div class="header">
                    <div class="header-left">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Marriage') }}
                        </a>
                    </div>
                    <div class="header-right">
                        <a href="****">PROFILE</a>
                        <a href="****">GEST</a>
                        <a href="****">CUISINE</a>
                        <a href="****">GIFT</a>
                        <a href="****">CONTACT</a>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>