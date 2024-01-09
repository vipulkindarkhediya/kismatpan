@extends('user.layouts.app')

@section('title', 'Help Customer support page')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid mb-3">
        <div class="bg-secondary rounded">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
                <h1 class="font-weight-semi-bold text-uppercase mb-3">Contact Us</h1>
                <div class="d-inline-flex">
                    <p class="m-0"><a href="{{ route('index') }}">Home</a></p>
                    <p class="m-0 px-2">-</p>
                    <p class="m-0">Contact</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid mb-3">
        <div class="white rounded pt-4">
            <div class="text-center mb-5">
                <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
            </div>
            <div class="row px-xl-5">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        <form action="{{ route('contact.send') }}" method="post">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control border border-dark rounded mb-2" id="name"
                                    name="name" value="{{ old('name') }}" placeholder="Enter your name" />
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border border-dark rounded mb-2" id="email"
                                    name="email" value="{{ old('email') }}" placeholder="Enter your email address" />

                                @if ($errors->has('email'))
                                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border border-dark rounded mb-2" id="subject"
                                    name="subject" value="{{ old('subject') }}" placeholder="Enter your subject" />
                                @if ($errors->has('subject'))
                                    <div class="alert alert-danger">{{ $errors->first('subject') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border border-dark rounded mb-2" rows="6" id="message" name="message"
                                    value="{{ old('message') }}" placeholder="Enter your message"></textarea>
                                @if ($errors->has('message'))
                                    <div class="alert alert-danger">{{ $errors->first('message') }}</div>
                                @endif
                            </div>
                            <div>
                                <button class="btn py-2 px-4 rounded" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 mb-5">
                    <h5 class="font-weight-semi-bold mb-3">Get In Touch</h5>
                    <p>Justo sed diam ut sed amet duo amet lorem amet stet sea ipsum, sed duo amet et. Est elitr dolor elitr
                        erat sit sit. Dolor diam et erat clita ipsum justo sed.</p>
                    <div class="d-flex flex-column mb-3">
                        <h5 class="font-weight-semi-bold mb-3">Store 1</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA
                        </p>
                        <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                        <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="font-weight-semi-bold mb-3">Store 2</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA
                        </p>
                        <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
