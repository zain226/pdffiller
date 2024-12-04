@extends('frontend.layouts.app')

@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css" />
    <style>
        .trashbox {
            height: 30px;
            width: 30px;
            background: red;
            border-radius: 50%;
            text-align: center;
            padding: 3px 0px 0 0;
            position: absolute;
            right: 0;
            cursor: pointer;
        }
    </style>
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

        $(document).on('click', '.add_more', function() {
            let html = `<div class="row mb-3">
            <div class="col-md-6">
                <label for="recipient_name" class="form-label">Name</label>
                <input type="text" id="recipient_name" name="recipient_name[]" class="form-control"
                    placeholder="Recipient name" required>
            </div>
            <div class="col-md-6">
                <label for="recipient_email" class="form-label">Email</label>
                <input type="email" id="recipient_email" name="recipient_email[]" class="form-control"
                    placeholder="Recipient email" required>
            </div>
            <div class="trashbox"><i class="uil uil-trash text-white"></i></div>
        </div>`;

            $('.appendBody').append(html)
        });
        $(document).on('click', '.trashbox', function() {
            $(this).closest('.row').remove();
        });
    </script>
@endpush
