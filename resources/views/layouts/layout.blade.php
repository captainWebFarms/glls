<?php use TCG\Voyager\Models\Menu;

?>

<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/foundation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/foundationOverride.css') }}">
    <link rel="stylesheet" href="{{ asset('fontAwesome/css/font-awesome.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('fontAwesome/css/font-awesome.css') }}">--}}
    <script src="{{ asset('js/vendor/jquery.js') }}"></script>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/jquery.qtip.min.css') }}">
    @yield('styles')
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    {{--<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>--}}
    <script
            src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.js"></script>

    {{--<link href="/css/app.css" rel="stylesheet">--}}


    <meta name="csrf-token" content="{{ csrf_token() }}"/>


</head>
<body>
<div id="vueapp">
    <div class="row expanded small-collapse container">
        <div class="small-12 columns size" id="column-content">
            {{--        @include('partials.nav')--}}
            <?= Menu::display('main_menu','partials.nav'); ?>
            {{--        {{ asset($page->imageMedium->url) }}--}}
            <img src="{{ asset('storage/'.$page->imageSmall->url) }} " alt="" class="hero_image show-for-small-only" >
            <img src="{{ asset('storage/'.$page->imageMedium->url) }} " alt="" class="show-for-large size" >
            <img src="{{ asset('storage/'.$page->imageMedium->url) }} " alt="" class="hero_image show-for-medium-only" >
            <h2 class="hero_text header_main" >@yield('hero_text')</h2>
            {{--@yield('contact')--}}
        </div>
    </div>

    @yield('content')
    <div class="expanded row ggreen footerBlack">
        <div class="small-6 columns ">
            <div class="float-left ">
                <h1>Contact</h1>
                <p>11th floor, Tower 1, Nexteracom Building <br/>
                    Ebane Cybercity, Mauritius<br/>
                    Tel: +27647526258<br/>
                    Email sales@glls.global</p>
            </div>
        </div>
        <div class="small-6 columns ">
            <div class="float-right">
                <br/>
                <img src="{{ asset('logo.png') }}">
                <h1>50,000m sold</h1>
            </div>
        </div>
    </div>

</div>


<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/vendor/what-input.js') }}"></script>
<script src="{{ asset('js/vendor/foundation.js') }}"></script>
<script src="{{ asset('js/vendor/foundation.interchange.js') }}"></script>
<script src="{{ asset('js/vendor/foundation.tabs.js') }}"></script>
<script src="{{ asset('js/vendor/foundation.core.js') }}"></script>
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
@yield('scripts')
<script> $(document).foundation();</script>
<script src="{{ asset('js/vueapp.js') }}"></script>


</body>
</html>