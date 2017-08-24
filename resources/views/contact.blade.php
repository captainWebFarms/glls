@extends('layouts.layout')
@section('title')
    Contact us
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
                <form data-abide novalidate>
                    <div data-abide-error class="alert callout" style="display: none;">
                        <p><i class="fi-alert"></i> Please revise your selection.</p>
                    </div>
                    <div class="row">

                        <div class="small-12 medium-6 columns">
                            <label>Name:
                                <input class="roundedge" type="text" placeholder="Enter your name..."
                                       aria-describedby="exampleHelpText"
                                       required pattern="text">
                                <span class="form-error">
                                   Please enter your name, it is required.
                                </span>
                            </label>
                        </div>
                        <div class="small-12 medium-6 columns">
                            <label>Phone Number:
                                <input class="roundedge" type="text" placeholder="Enter phone number"
                                       aria-describedby="exampleHelpText"
                                       required
                                       pattern="number">
                                <span class="form-error">
                                  Please enter your correct phone number, it is required.
                                </span>
                            </label>

                        </div>
                        <div class="small-12 columns">
                            <label>Email address:
                                <input class="roundedge" type="email" id="email" placeholder="email@email.com"
                                       aria-describedby="exampleHelpText" required pattern="email">
                                    <span class="form-error">
                                      Please enter your correct email address, it is required.
                                    </span>
                            </label>
                            <label class="message ">Message: </label>
                            <textarea class="roundedge" name="comments" id="comments" type="text"
                                      placeholder="Your message..."></textarea>
                        </div>
                        <div class="small-12 columns">


                            <button class="button" type="submit" value="Submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection