@extends('layouts.layout')
@section('title')
    About us
@endsection
@section('hero_text')
    {{ $page->title }}
@endsection
@section('content')
    <div class="row expanded gblack ggreen">
        <div class="small-12 columns padding">
            {!!html_entity_decode($page->body)!!}
        </div>
    </div>

@endsection