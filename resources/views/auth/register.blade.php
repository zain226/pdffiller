@extends('layouts.auth')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <style>
        .iti--allow-dropdown {
            width: 100%;
        }
    </style>
@endpush
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
                    <div class="card shadow rounded border-0">
                        <div class="card-body">
                            <h4 class="card-title text-center">Signup</h4>
                            @if (session('status'))
                                <div class="mb-4">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="login-form mt-4" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">First name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control ps-5" placeholder="First Name"
                                                    name="first_name" required="">
                                                @include('components.error', ['key' => 'first_name'])

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last name <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control ps-5" placeholder="Last Name"
                                                    name="last_name" required="">
                                                @include('components.error', ['key' => 'last_name'])
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control ps-5" placeholder="Email"
                                                    name="email" required="">
                                                @include('components.error', ['key' => 'email'])
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <input type="tel" id="phone" name="phone"
                                                    class="form-control ps-5" required="">
                                                @include('components.error', ['key' => 'phone'])
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Password <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" name="password" class="form-control ps-5"
                                                    placeholder="Password" required="">
                                                @include('components.error', ['key' => 'password'])
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" name="password_confirmation"
                                                    class="form-control ps-5" placeholder="Password" required="">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">I Accept <a
                                                        href="#" class="text-primary">Terms And Condition</a></label>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Register</button>
                                        </div>
                                    </div>


                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account ?</small>
                                            <a href="{{ route('login') }}" class="text-dark fw-bold">Sign in</a>
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
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            initialCountry: "auto",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js", // For formatting/validation
        });

        phoneInputField.addEventListener("blur", function() {
            const phoneNumber = phoneInput.getNumber(); // Get the full phone number
            if (phoneInput.isValidNumber()) {
                $('#phone').val(phoneNumber); // Save the full number in the input
            } else {
                alert("Invalid phone number!");
                $('#phone').val(''); // Clear the input if invalid
            }
        });
    </script>
@endpush
