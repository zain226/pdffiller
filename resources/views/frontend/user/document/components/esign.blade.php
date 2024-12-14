    <h4>E-Signature</h4>

    @include('frontend.user.document.components.heightWidth')

    <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Draw</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">Upload</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false">Custom</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <canvas id="signaturePad" style="border: 1px solid #ddd; width: 100%; height: 200px;"></canvas>
            <button id="clearSignature">Clear</button>
            <button id="saveSignature">Save Signature</button>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h5>Upload Signature</h5>
            <input type="file" id="uploadSignature" accept="image/*">
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>




    <div>
        <div id="savedSignatures" class="mt-4 mb-4" style="margin-top: 20px;height:200px">
        </div>
    </div>
