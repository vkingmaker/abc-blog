@extends('layouts.app')
@section('content')
        <div class="container d-flex contact-us">
            <div class="col-md-6 mt-5">
                <h2>Contact Us</h2>
                <p class="small mb-4">Please enter your details and one of our agents will get back to you shortly</p>
                <form method="POST" action="/contact-us">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="LaststName" name="lastName" placeholder="Last Name"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="comment" name="comment" placeholder="Comment"
                            required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-6 mt-5">
                <img src="{{ asset('/images/contact_us.svg') }}">
            </div>
        </div>
@endsection
