@extends('layouts.layout')
@section('title')
    Products
@endsection
@section('hero_text')
    {{ $page->title }}
@endsection
@section('content')
    <div class="row expanded collapse gblack ggreen">
        <div class="small-12 columns">
            <!-- This demo uses flex grid but you can use float grid too -->


            <ul class="tabs" data-tabs id="example-tabs">
                <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Overview</a></li>
                <li class="tabs-title"><a href="#panel2">Products</a></li>
                <li class="tabs-title"><a href="#panel3">Product Gallery</a></li>
                <li class="tabs-title"><a href="#panel4">Product Quality</a></li>
            </ul>

            <div class="tabs-content" data-tabs-content="example-tabs">
                <div class="tabs-panel is-active" id="panel1">
                    {!!html_entity_decode($page->body)!!}
                </div>
                <div class="tabs-panel" id="panel2">
                    <div class="row expanded collapse">
                        <div class="medium-3 columns">
                            <ul class="vertical tabs" data-tabs id="example-tabs">
                                @foreach($range as $category)
                                    <li class=""><a>{{$category->name}}</a></li>
                                    @foreach($name as $productName)
                                        @if($category->id == $productName->product_range_id)
                                            <li class="tabs-title"><a
                                                        href="#{{$productName->name}}">{{$productName->name}}</a></li>
                                        @endif
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                        <div class="medium-9 columns">
                            <div class="tabs-content" data-tabs-content="example-tabs">

                                @foreach($name as $productName)
                                    <div class="tabs-panel" id="{{$productName->name}}">
                                        @foreach($product as $prod)
                                            @if($productName->id == $prod->product_name_id)
                                                @foreach($description as $des)
                                                    @if($des->id == $prod->discription_id )
                                                        {{$des->discriptionName}}
                                                        {!!html_entity_decode($prod->name)!!}
                                                        <br/>
                                                        <br/>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs-panel" id="panel3">
                    <p>Three</p>
                    <p>Check me out! I'm a super cool Tab panel with text content!</p>
                </div>
                <div class="tabs-panel" id="panel4">
                    {!!html_entity_decode($text->text)!!}
                </div>
            </div>


        </div>
    </div>
@endsection