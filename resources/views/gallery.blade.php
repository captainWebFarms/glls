@extends('layouts.layout')
@section('title')
    Gallery
@endsection
@section('styles')
    {{--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>--}}

    {{--Add the new slick-theme.css if you want the default styling--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
@endsection
@section('hero_text')
    {{ $page->title }}
@endsection
@section('content')
{{--    style="background-color: #0a0a0a; background-image: url('{{ asset('Overlay/FullScreen/Drive Head-CC-Springvale.jpg') }}'); background-size: 100% auto; background-repeat: no-repeat"--}}
    <div class="row expanded small-collapse gblack ggreen" >
        <div class="small-12 columns text-center main-heading">
            <h1>X‐GLO LED STRIP LIGHTING</h1>
            <p>All with the peace of mind of our uncondi onal 3 year warranty with an expected Life Span of up to 5 Years.</p>
        </div>
        <gallery :gallery-categories="{{ $galleryCategories }}" :gallery-images="{{ $galleryImages }}"></gallery>
    </div>
@endsection
@section('scripts')
@endsection