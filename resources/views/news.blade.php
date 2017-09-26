@extends('layouts.layout')
@section('style')

    <style>

        .newscolor {
            background-color: rgb(49, 49, 49);
            margin: 20px;
            padding: 10px;
            color: rgb(22, 121, 51);
        }

        /*.listy{*/
        /*color:rgb(22,121,51);*/
        /*font-size: 10px;*/
        /*font-weight: bold;*/
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
                <div class="small-12 columns show-for-large ">
                    <ul class="tabs gblack " data-tabs id="example-tabs"
                        style="border: none; color:rgb(22,121,51); margin:0 auto; text-align: center">
                        <li class="tabs-title is-active" style="color:rgb(22,121,51);"><a href="#panel1" class="listy"
                                                                                          aria-selected="true">News</a>
                        </li>
                        <li class="tabs-title"><a href="#panel2" style=";color:rgb(22,121,51);">Exhibition</a></li>
                        <li class="tabs-title"><a href="#panel3" style=";color:rgb(22,121,51);">Upcoming Events</a></li>
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
                                        <div class="small-12 large-3 columns newscolor roundedge"
                                             style="position:relative;">
                                            <a data-open="model{{$new->id}}" style="color:rgb(22,121,51)">
                                                <h4>{{$new->title}}</h4></a>
                                            {{$new->excerpt}}
                                            </br>


                                            <div class="reveal roundedge newscolor" id="model{{$new->id}}" data-reveal>
                                                <h3>{{$new->title}}.</h3>

                                                <a style="color:rgb(22,121,51)"> {!!html_entity_decode($new->body)!!} </a>
                                                <button class="close-button" data-close aria-label="Close reveal"
                                                        type="button">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            </br>
                                            <span style="position: absolute; right: 0; bottom: 0;">
                                            <a class="fb-xfbml-parse-ignore" target="_blank"
                                               href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.glls.global%2Fnews&amp;src=sdkpreparse"><img
                                                        src="{{asset('facebook-3-xxl.png')}}" height="30" width="30"/> </a>
                                            <a target="_blank"
                                               href=https://www.linkedin.com/cws/share?url=https%3A%2F%2Fwww.glls.global%2Fnews"><img
                                                        src="{{asset('linkedin-3-xxl.png')}}" height="30" width="30"/> </a>

                                            </span>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <div class="tabs-panel" id="panel2">
                            <div class="row expanded collapse">
                                @foreach($news as $new)
                                    {{--{{$new}}--}}
                                    @if($new->identitiy == 'Past')

                                        <br/>
                                        <div class="small-12 large-3 columns newscolor roundedge"
                                             style="position:relative;">
                                            <a data-open="model{{$new->id}}" style="color:rgb(22,121,51)">
                                                <h4>{{$new->title}}</h4></a>
                                            {{$new->excerpt}}
                                            </br>


                                            <div class="reveal roundedge newscolor" id="model{{$new->id}}" data-reveal>
                                                <h3>{{$new->title}}.</h3>

                                                <a style="color:rgb(22,121,51)"> {!!html_entity_decode($new->body)!!} </a>
                                                <button class="close-button" data-close aria-label="Close reveal"
                                                        type="button">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            </br>
                                            <span style="position: absolute; right: 0; bottom: 0;">
                                            <a class="fb-xfbml-parse-ignore" target="_blank"
                                               href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.glls.global%2Fnews&amp;src=sdkpreparse"><img
                                                        src="{{asset('facebook-3-xxl.png')}}" height="30" width="30"/> </a>
                                            <a target="_blank"
                                               href=https://www.linkedin.com/cws/share?url=https%3A%2F%2Fwww.glls.global%2Fnews"><img
                                                        src="{{asset('linkedin-3-xxl.png')}}" height="30" width="30"/> </a>

                                            </span>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="tabs-panel" id="panel3">
                            <div class="row expanded collapse">
                                @foreach($news as $new)
                                    @if($new->identitiy == 'Upcoming')
                                        {{--                            {{$new}}--}}
                                        <br/>
                                        <div class="small-12 large-3 columns newscolor roundedge"
                                             style="position:relative;">
                                            <a data-open="model{{$new->id}}" style="color:rgb(22,121,51)">
                                                <h4>{{$new->title}}</h4></a>
                                            {{$new->excerpt}}
                                            </br>


                                            <div class="reveal roundedge newscolor" id="model{{$new->id}}" data-reveal>
                                                <h3>{{$new->title}}.</h3>

                                                <a style="color:rgb(22,121,51)"> {!!html_entity_decode($new->body)!!} </a>
                                                <button class="close-button" data-close aria-label="Close reveal"
                                                        type="button">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            </br>
                                            <span style="position: absolute; right: 0; bottom: 0;">
                                            <a class="fb-xfbml-parse-ignore" target="_blank"
                                               href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.glls.global%2Fnews&amp;src=sdkpreparse"><img
                                                        src="{{asset('facebook-3-xxl.png')}}" height="30" width="30"/> </a>
                                            <a target="_blank"
                                               href=https://www.linkedin.com/cws/share?url=https%3A%2F%2Fwww.glls.global%2Fnews"><img
                                                        src="{{asset('linkedin-3-xxl.png')}}" height="30" width="30"/> </a>

                                            </span>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@endsection