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
    {{--<link href="/css/app.css" rel="stylesheet">--}}
    {{--<!-- Styles -->--}}
    <style>

    </style>


</head>
<body>
<div class="row expanded small-collapse">
    {{--<div class="small-12 columns" id="column-content">--}}
        {{--@include('partials.nav')--}}
        {{--<img src="{{ asset($page->imageSmall->url) }} " alt="" class="hero_image show-for-small-only" >--}}
        {{--<img src="{{ asset($page->image->url) }} " alt="" class="show-for-large" >--}}
        {{--<img src="{{ asset($page->imageMedium->url) }} " alt="" class="hero_image show-for-medium-only" >--}}
        {{--<h2 class="hero_text image_top" >@yield('hero_text')</h2>--}}
    {{--</div>--}}
</div>
@yield('content')


<div class="expanded row gblack ggreen">
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
{{--</div>--}}


<script src="{{ asset('js/vendor/jquery.js') }}"></script>
<script src="{{ asset('js/vendor/what-input.js') }}"></script>
<script src="{{ asset('js/vendor/foundation.js') }}"></script>
<script src="{{ asset('js/vendor/foundation.interchange.js') }}"></script>

{{--<script src="{{ asset('js/vendor/app.js') }}"></script>--}}

<script> $(document).foundation();</script>


</body>
</html>