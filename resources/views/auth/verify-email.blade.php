@extends('layouts.auth')


@section('content')
    <section class="bg-auth-home d-table w-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="me-lg-5">
                        <img src="{{ asset('frontend/assets/images/user/signup.svg') }}" class="img-fluid d-block mx-auto"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="card login-page shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">Verify Email</h4>
                            <div>
                                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </div>
                            @if (session('status') == 'verification-link-sent')
                                <div class="mb-4 mt-4 text-success">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </div>
                            @endif
                            <form class="login-form mt-4" action="{{ route('verification.send') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Verification Email') }}</button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
