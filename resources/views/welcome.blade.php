@extends('layouts.layout')
@section('title')
GLLS HOME PAGE
@endsection
@section('content')
    <div class="row expanded small-collapse">
        <div class="small-12 columns text-center " id="column-content">
            <img src="{{ asset('Overlay/Ipad/gallery-img-4-lg_2_resized.jpg') }} " alt="" style=" vertical-align: middle;" >
        </div>
        {{--<div class="small-12 columns text-center show-for-small-only" id="column-content">--}}
            {{--<img src="{{ asset('Overlay/Mobile/gallery-img-4-lg_2.jpg') }} " alt="" class="hero_image" >--}}
        {{--</div>--}}
        {{--<div class="small-12 columns text-center show-for-medium-only" id="column-content">--}}
            {{--<img src="{{ asset('Overlay/Ipad/gallery-img-4-lg_2.jpg') }} " alt="" class="hero_image" >--}}
        {{--</div>--}}
        {{--<div class="small-12 columns text-center hide-for-small-only hide-for-medium-only" id="column-content">--}}
            {{--<img src="{{ asset('Overlay/Ipad/gallery-img-4-lg_2_lg.jpg') }} " alt="" class="hero_image" >--}}
        {{--</div>--}}
        {{--<div class="small-12 columns text-center hide-for-small-only hide-for-medium-only" id="column-content" style="position:absolute;z-index:2;top:25rem">--}}
            {{--<h1 class="hero_text" >ABOUT US</h1>--}}
        {{--</div>--}}
        {{--<div class="small-12 columns text-center show-for-medium-only" id="column-content" style="position:absolute;z-index:2;top:15rem">--}}
            {{--<h1 class="hero_text-med" >ABOUT US</h1>--}}
        {{--</div>--}}
        {{--<div class="small-12 columns text-center show-for-small-only" id="column-content" style="position:absolute;z-index:2;top:4rem">--}}
            {{--<h1 class="hero_text-small" >ABOUT US</h1>--}}
        {{--</div>--}}
    </div>
@endsection


