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
                            <h4 class="card-title text-center">Phone Verify</h4>
                            @if (session('status'))
                                <div class="mb-4">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="login-form mt-4" action="{{ route('phone.verification.submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Verification Code <span
                                                    class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <input type="text" class="form-control ps-5" placeholder="Code"
                                                    name="token" required="" id="token">
                                                @include('components.error', ['key' => 'token'])
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 mb-0">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Verify</button>
                                        </div>
                                    </div>



                                    <div class="col-12 text-center mt-4">

                                        <button type="button" class="btn btn-secondary" id="resend-button">Resend
                                            Token</button>
                                        <span id="timer" style="display: none;">Please wait 60 seconds</span>
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
    <script>
        $(document).ready(function() {
            var timerInterval;
            var timeLeft = 5;

            // Handle Resend Token button click
            $(document).on('click', '#resend-button', function(e) {
                e.preventDefault(); // Prevent the form from submitting
                var button = $(this);
                var timerSpan = $('#timer');

                // Disable the button and show the timer
                button.prop('disabled', true);
                timerSpan.show().text('Please wait ' + timeLeft + ' seconds');

                // Start the countdown timer
                timerInterval = setInterval(function() {
                    timeLeft--;
                    timerSpan.text('Please wait ' + timeLeft + ' seconds');

                    if (timeLeft <= 0) {
                        clearInterval(timerInterval);
                        button.prop('disabled', false); // Re-enable button
                        timerSpan.hide(); // Hide timer
                        timeLeft = 60; // Reset timer for next use
                    }
                }, 1000);

                // Send AJAX request to resend the token
                $.ajax({
                    url: "{{ route('phone.verification.resend') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        // Optionally, you can show a message or handle the response
                        alert('Token resent successfully!');
                    },
                    error: function(xhr, status, error) {
                        // Handle errors (e.g., show a message)
                        alert('Error resending token. Please try again.');
                    }
                });
            });
        });
    </script>
@endpush
