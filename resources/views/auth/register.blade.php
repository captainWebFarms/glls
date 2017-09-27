@extends('layouts.layout')
@section('title')
    Register
@endsection
@section('hero_text')
    {{ $page->title }}
@endsection
@section('content')
    {{--image_top--}}
    {{--contact_top--}}
    <div class="row expanded image_top small_contact">
        <div class="small-12 columns ">
            <div class="contact-border">
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                {{--<form data-abide novalidate>--}}
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i> Please revise your selection.</p>
                    </div>
                    <div class="row">
                        {{--<div class="{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                            <div class="small-12 medium-6 columns">
                                <label for="name">Name:
                                    <input class="roundedge" id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name..."
                                           aria-describedby="exampleHelpText"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="form-error">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </label>
                            </div>
                        {{--</div>--}}
                        {{--<div class="{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            <div class="small-12 medium-6 columns">
                                <label for="email">E-Mail Address:
                                    <input id="email" type="email" class="roundedge" name="email" value="{{ old('email') }}" placeholder="Enter your email..."
                                           aria-describedby="exampleHelpText"
                                           required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="form-error">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </label>
                            </div>
                        {{--</div>--}}
                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{----}}
                        <div class="small-12 medium-6 columns">
                        <label for="password" >Password:
                        <input id="password" type="password" class="roundedge" name="password"  placeholder="Enter your password..."
                               aria-describedby="exampleHelpText"
                               required autofocus>
                        </label>
                        @if ($errors->has('password'))
                            <span class="form-error">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        </div>
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                        <div class="small-12 medium-6 columns">
                            <label for="password-confirm">Confirm Password:
                                <input id="password-confirm" type="password" class="roundedge" name="password_confirmation" placeholder="Confirm your password..."
                                       aria-describedby="exampleHelpText"
                                       required autofocus>
                            </label>
                        </div>
                        {{--</div>--}}




                        {{--<div class="small-12 medium-6 columns">--}}
                            {{--<label>Phone Number:--}}
                                {{--<input class="roundedge" type="text" placeholder="Enter phone number"--}}
                                       {{--aria-describedby="exampleHelpText"--}}
                                       {{--required--}}
                                       {{--pattern="number">--}}
                                {{--<span class="form-error">--}}
                                  {{--Please enter your correct phone number, it is required.--}}
                                {{--</span>--}}
                            {{--</label>--}}

                        {{--</div>--}}
                        {{--<div class="small-12 columns">--}}
                            {{--<label>Email address:--}}
                                {{--<input class="roundedge" type="email" id="email" placeholder="email@email.com"--}}
                                       {{--aria-describedby="exampleHelpText" required pattern="email">--}}
                                    {{--<span class="form-error">--}}
                                      {{--Please enter your correct email address, it is required.--}}
                                    {{--</span>--}}
                            {{--</label>--}}
                            {{--<label class="message ">Message: </label>--}}
                            {{--<textarea class="roundedge" name="comments" id="comments" type="text"--}}
                                      {{--placeholder="Your message..."></textarea>--}}
                        {{--</div>--}}
                        <div class="small-12 columns">
                            <button class="button" type="submit" value="Submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Register</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
{{--                        {{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                            {{--<label for="name" class="col-md-4 control-label">Name</label>--}}
{{----}}
                            {{--<div class="col-md-6">--}}
                                {{--<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}
{{----}}
                                {{--@if ($errors->has('name'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Register--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
