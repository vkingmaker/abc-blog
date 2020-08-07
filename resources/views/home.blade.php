@extends('layouts.app')

@section('content')
    <div class="pt-4">
        <div class="container d-flex align-items-center">
            <div class="col-md-6">
                <h2>Our Mission</h2>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ducimus suscipit rerum ut quos, nesciunt
                excepturi omnis voluptatum expedita accusamus dolorum dicta maiores repellendus, esse, soluta distinctio?
                Et, nam distinctio?
            </div>
            <div class="col-md-6">
                <img src="{{ asset('/images/programmer.svg') }}">
            </div>
        </div>
        <div class="container d-flex align-items-center our-vision">
            <div class="col-md-6">
                <img src="{{ asset('/images/drone_surveillance.svg') }}">
            </div>
            <div class="col-md-6">
                <h2>Our Vision</h2>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ducimus suscipit rerum ut quos, nesciunt
                excepturi omnis voluptatum expedita accusamus dolorum dicta maiores repellendus, esse, soluta distinctio?
                Et, nam distinctio?
            </div>
        </div>
    </div>
@endsection
