@extends('user.layouts.app')

@section('title', 'E shoping User registration page')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid mb-3">
        <div class="bg-secondary rounded">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
                <h1 class="font-weight-semi-bold text-uppercase mb-3">Sign Up</h1>
                <div class="d-inline-flex">
                    <p class="m-0"><a href="{{ route('index') }}">Home</a></p>
                    <p class="m-0 px-2">-</p>
                    <p class="m-0">Sign Up</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid mb-3">
        <div class="white rounded pt-4">
            <div class="text-center mb-5">
                <h2 class="section-title px-5"><span class="px-2">E Shoper User Registration Page</span></h2>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-lg-4 mb-5">
                    <div class="contact-form text-capitalize">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="control-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control border border-dark rounded mb-2" id="name"
                                    name="name" value="{{ old('name') }}" placeholder="Enter your name" />
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control border border-dark rounded mb-2" id="email"
                                    name="email" value="{{ old('email') }}" placeholder="Enter your email address" />

                                @if ($errors->has('email'))
                                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="control-group mb-2">
                                <label for="">gender</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="male" name="gender"
                                        value="{{ old('0') }}">
                                    <label class="form-check-label text-dark" for="male">male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="{{ old('1') }}">
                                    <label class="form-check-label text-dark" for="female">female</label>
                                </div>
                                @if ($errors->has('gender'))
                                    <div class="alert alert-danger">{{ $errors->first('gender') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="contact">Contact Number</label>
                                <input type="tel" class="form-control border border-dark rounded mb-2" id="contact"
                                    name="contact" value="{{ old('contact') }}" placeholder="Enter your contact number" />
                                @if ($errors->has('contact'))
                                    <div class="alert alert-danger">{{ $errors->first('contact') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="countrie">countrie</label>
                                <select class="form-control border border-dark rounded mb-2" id="countrie" name="countrie">
                                    <option>Select Countrie</option>
                                    <option>2</option>
                                </select>
                                @if ($errors->has('countrie'))
                                    <div class="alert alert-danger">{{ $errors->first('countrie') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="state">state</label>
                                <select class="form-control border border-dark rounded mb-2" id="state" name="state">
                                    <option>Select State</option>
                                    <option>2</option>
                                </select>
                                @if ($errors->has('state'))
                                    <div class="alert alert-danger">{{ $errors->first('state') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="district">district</label>
                                <select class="form-control border border-dark rounded mb-2" id="district" name="district">
                                    <option>Select District</option>
                                    <option>2</option>
                                </select>
                                @if ($errors->has('district'))
                                    <div class="alert alert-danger">{{ $errors->first('district') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="sub_district">sub district</label>
                                <select class="form-control border border-dark rounded mb-2" id="sub_district"
                                    name="sub_district">
                                    <option>Select Sub District</option>
                                    <option>2</option>
                                </select>
                                @if ($errors->has('sub_district'))
                                    <div class="alert alert-danger">{{ $errors->first('sub_district') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="village">village</label>
                                <select class="form-control border border-dark rounded mb-2" id="village" name="village">
                                    <option>Select Village</option>
                                    <option>2</option>
                                </select>
                                @if ($errors->has('village'))
                                    <div class="alert alert-danger">{{ $errors->first('village') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="postcode">pincode</label>
                                <select class="form-control border border-dark rounded mb-2" id="postcode"
                                    name="postcode">
                                    <option>Select Pin Code</option>
                                    <option>2</option>
                                </select>
                                @if ($errors->has('postcode'))
                                    <div class="alert alert-danger">{{ $errors->first('postcode') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control border border-dark rounded mb-2"
                                    id="password" name="password" placeholder="Enter your password" />

                                @if ($errors->has('password'))
                                    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control border border-dark rounded mb-2"
                                    id="password_confirmation" name="password_confirmation"
                                    placeholder="Enter your password confirmation" />

                                @if ($errors->has('password_confirmation'))
                                    <div class="alert alert-danger">{{ $errors->first('password_confirmation') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <label for="address">address block number and society name</label>
                                <textarea class="form-control border border-dark rounded mb-2" rows="6" id="address" name="address"
                                    value="{{ old('address') }}" placeholder="Enter your address"></textarea>
                                @if ($errors->has('address'))
                                    <div class="alert alert-danger">{{ $errors->first('address') }}</div>
                                @endif
                            </div>
                            <div class="control-group">
                                <div class="mb-3">
                                    <label for="photo" class="form-label">Profile Photo</label>
                                    <input class="form-control form-control-sm" id="photo" name="photo"
                                        type="file" value="{{ old('photo') }}">
                                    @if ($errors->has('photo'))
                                        <div class="alert alert-danger">{{ $errors->first('photo') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <button type="reset" class="btn py-2 px-4 rounded sendMessageButton">Reset</button>
                                <a href="{{ route('login') }}" class="ml-5 underline">already registered?</a>
                                <button class="btn py-2 px-4 rounded sendMessageButton float-right" type="submit">Sign
                                    Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
