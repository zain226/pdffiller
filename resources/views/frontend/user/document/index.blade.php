@extends('frontend.layouts.app')

@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css" />
@endpush
@section('content')
    <section class="bg-profile d-table w-100 bg-primary"
        style="
    background: url('{{ asset('frontend/assets/images/account/bg.png') }}') center center;
">
        <div class="container">
            <div class="row">
                @include('frontend.user.components.header')
            </div>
        </div>
    </section>
    <section class="section mt-60">
        <div class="container mt-lg-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 d-lg-block d-none">
                    @include('frontend.user.components.sidebar')
                </div>

                <div class="col-lg-8 col-12">
                    <div class="border-bottom pb-4">
                        <div class="row">
                            @include('frontend.user.document.upload')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
    <script>
        $('.dropify').dropify({
            messages: {
                'default': 'Upload Document',
                'replace': 'Upload Document',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });


        $('#document').on('change', function() {
            const file = this.files[0]; // Get the uploaded file
            if (file) {
                const fileName = file.name.split('.').slice(0, -1).join('.'); // Extract file name without extension
                $('#title').val(fileName); // Set file name in the title field
            }
        });
    </script>
@endpush
