@extends('layouts.layout')
@section('style')
    <style>
        .tabs-title > a:focus, .tabs-title > a[aria-selected='true'] {
            background: none;
            color: rgb(22,121,51);
        }
        /*.tabes-title > a:hover{*/
            /*background: none;*/
        /*}*/
    </style>
@endsection
@section('title')
    News and Events
@endsection
@section('hero_text')
    {{ $page->title }}
@endsection
@section('content')
    <div class="row expanded collapse">
        <div class="small-12 columns gblack ggreen">
            <!-- This demo uses flex grid but you can use float grid too -->
            <div class="row expanded collapse ">
                <div class="small-12 columns show-for-large " style="color:rgb(22,121,51); text-align: center;">
                    <ul class="tabs gblack" data-tabs id="example-tabs" style="border: none; color:rgb(22,121,51);">
                        <li class="tabs-title is-active" style="color: rgb(22,121,51);"><a href="#panel1" aria-selected="true">News</a></li>
                        <li class="tabs-title" style="color:rgb(22,121,51);"><a  href="#panel2" style=";color:rgb(22,121,51);">Exhibition</a></li>
                        <li class="tabs-title"><a href="#panel3">Upcoming Events</a></li>
                    </ul>
                </div>
                <div class="small-12 columns hide-for-large ">
                    <ul class="vertical tabs gblack" data-tabs
                        id="example-tabs" style="border: none; ">
                        <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">News</a></li>
                        <li class="tabs-title"><a href="#panel2">Exhibition</a></li>
                        <li class="tabs-title"><a href="#panel3">Upcoming Events</a></li>
                    </ul>
                </div>
                <div class="small-12 columns">
                    <div class="tabs-content gblack" data-tabs-content="example-tabs" style="border: none; ">
                        <div class="tabs-panel is-active" id="panel1">
                            <div class="row expanded collapse">
                                @foreach($news as $new)
                                    @if($new->identitiy == 'News')
                                        {{--                            {{$new}}--}}
                                        <br/>
                                        <div class="small-12 large-3 columns">
                                            <h4>{{$new->title}}</h4>
                                            {{$new->excerpt}}
                                            <p><a data-open="model{{$new->id}}">Click me for a modal</a></p>
                                        </div>
                                        <div class="reveal" id="model{{$new->id}}" data-reveal>
                                            <h1>{{$new->title}}.</h1>

                                            {!!html_entity_decode($new->body)!!}
                                            <button class="close-button" data-close aria-label="Close reveal"
                                                    type="button">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="tabs-panel" id="panel2">
                            <p>two</p>
                            <img class="thumbnail"
                                 src="//foundation.zurb.com/sites/docs/assets/img/generic/rectangle-7.jpg">
                        </div>
                        <div class="tabs-panel" id="panel3">
                            <p>three</p>
                            <p>Check me out! I'm a super cool Tab panel with text content!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection