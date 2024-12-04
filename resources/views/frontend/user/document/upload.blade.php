<h2>Upload Document</h2>
<form id="documentUploadForm" method="POST" action="" enctype="multipart/form-data">
    @csrf

    <!-- Document Upload with Dropify -->
    <div class="mb-4">
        <label for="document" class="form-label">Upload Document</label>
        <input type="file" id="document" name="document" class="dropify" data-max-file-size="10M"
            data-allowed-file-extensions="pdf jpg png doc docx" />
    </div>

    <!-- Title Field -->
    <div class="mb-4">
        <label for="title" class="form-label">Document Title</label>
        <input type="text" id="title" name="title" class="form-control" placeholder="Enter document title"
            required>
    </div>

    <!-- Person Information for Email -->
    <div class="d-flex justify-content-between">
        <h4>Recipient Details</h4>
        <button class="btn btn-primary add_more btn-sm" type="button">Add More</button>

    </div>
    <div class="appendBody">
        <div class="row mb-3">
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
        </div>
    </div>

    <!-- Submit Button -->
    <div>
        <button type="submit" class="btn btn-primary">Submit Document</button>
    </div>
</form>
