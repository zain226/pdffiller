<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF E-Signature with Drag & Drop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.14.305/pdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.10.17/interact.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script> <!-- jsPDF Library -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        .file-row {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            background-color: #f8f9fa;
            border-radius: 5px;
            position: relative;
        }

        canvas,
        img {
            max-width: 100%;
            display: block;
            margin: 0 auto;
        }

        .signature-pad {
            border: 1px solid #ccc;
            border-radius: 5px;
            height: 150px;
            background-color: #fff;
        }

        .draggable {
            position: absolute;
            cursor: move;
            z-index: 10;
        }

        .delete-btn {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 12px;
            text-align: center;
            line-height: 18px;
            cursor: pointer;
            z-index: 20;
        }

        .left-sidebar {
            padding: 20px;
            background-color: #343a40;
            color: white;
            height: 100vh;
        }

        .left-sidebar .option {
            margin-bottom: 10px;
            cursor: grab;
            padding: 5px 10px;
            border: 1px dashed #ccc;
            background-color: #495057;
            border-radius: 5px;
            text-align: center;
        }

        .sidebar {
            position: sticky;
            z-index: 999;
            top: 0;
        }

        .edit-btn {
            position: absolute;
            top: -30px;
            right: 0;
        }

        .outerbox {
            position: relative;
        }

        .sig-out {
            height: 50px;
            width: 50px;
            background: #ffd32c;
            font-size: 26px;
            text-align: center;
            padding: 0px;
            border: 2px dotted;
            opacity: 0.8;
        }
    </style>

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-md-2 sidebar bg-dark text-white left-sidebar">
                <h5>Tools</h5>
                <div class="option" draggable="true" data-type="date">Add Date Field</div>
                <div class="option" draggable="true" data-type="text">Add Text Field</div>
                <div class="option" draggable="true" data-type="radio">Add Radio Button</div>
                <div class="option" draggable="true" data-type="check">Add Check Box Button</div>
                <div class="option" draggable="true" data-type="signature">Add Signature File</div>
            </div>

            <!-- Main Content -->
            <div class="col-md-10">
                <div>
                    <div class="text-center mb-4">
                        <h3>Unified Display</h3>
                    </div>
                    <div class="file-container">
                        <!-- Dynamically display files -->
                    </div>
                    <button id="downloadPDF" class="btn btn-primary mt-3">Download PDF with Signature</button>
                </div>

                <!-- Right Sidebar -->
                <div class="col-md-2 sidebar bg-dark text-white ">
                    <h4>E-Signature</h4>
                    <canvas id="signaturePad" style="border: 1px solid #ddd; width: 100%; height: 200px;"></canvas>
                    <button id="clearSignature">Clear</button>
                    <button id="saveSignature">Save Signature</button>
                    <br><br>
                    <h5>Upload Signature</h5>
                    <input type="file" id="uploadSignature" accept="image/*">
                    <div id="savedSignatures" style="margin-top: 20px;">
                        <!-- Saved or uploaded signatures will appear here -->
                    </div>
                </div>
            </div>
        </div>
        @php($now = now())
        <script>
            $(document).ready(function() {
                // Attach hover functionality to elements with the .outerbox class
                $(document).on({
                    mouseenter: function() {
                        // On hover, append the edit button
                        if ($(this).find(".edit-btn").length === 0) {
                            $(this).append(
                                '<button class="btn btn-primary btn-sm edit-btn"><i class="bi bi-pencil-square"></i></button>'
                            );
                        }
                    },
                    mouseleave: function() {
                        // On hover out, remove the edit button
                        $(this).find(".edit-btn").remove();
                    },
                }, '.outerbox'); // Specify the target element selector
            });
            $(document).ready(function() {



                const signaturePad = new SignaturePad(document.getElementById('signaturePad'));
                const files = [{
                        type: 'image',
                        path: '{{ asset('frontend/uploads/image.jpg') }}'
                    },
                    {
                        type: 'pdf',
                        path: '{{ asset('frontend/uploads/pdf.pdf') }}'
                    },
                ];
                const container = $('.file-container');

                // Render Files Dynamically
                files.forEach((file) => {
                    if (file.type === 'image') {
                        const imgRow = `<div class="file-row"><img src="${file.path}" alt="Image"></div>`;
                        container.append(imgRow);
                    } else if (file.type === 'pdf') {
                        fetch(file.path)
                            .then((res) => res.arrayBuffer())
                            .then((buffer) => {
                                pdfjsLib.getDocument(buffer).promise.then((pdf) => {
                                    for (let i = 1; i <= pdf.numPages; i++) {
                                        pdf.getPage(i).then((page) => {
                                            const viewport = page.getViewport({
                                                scale: 1
                                            });
                                            const canvas = document.createElement('canvas');
                                            canvas.height = viewport.height;
                                            canvas.width = viewport.width;

                                            const renderContext = {
                                                canvasContext: canvas.getContext('2d'),
                                                viewport: viewport,
                                            };
                                            page.render(renderContext).promise.then(() => {
                                                container.append(
                                                    `<div class="file-row"></div>`
                                                ).append(canvas);
                                            });
                                        });
                                    }
                                });
                            });
                    }
                });
                // Clear Signature Pad
                $('#clearSignature').click(() => signaturePad.clear());

                // Save Signature
                $('#saveSignature').click(() => {
                    if (!signaturePad.isEmpty()) {
                        addSignature(signaturePad.toDataURL());
                    }
                });

                // Upload Signature
                $('#uploadSignature').on('change', function() {
                    const file = this.files[0];
                    if (file && file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            addSignature(e.target.result);
                        };
                        reader.readAsDataURL(file);
                    } else {
                        alert('Please upload a valid image file.');
                    }
                });

                // Add Signature
                function addSignature(dataURL) {
                    const img = document.createElement('img');
                    img.src = dataURL;
                    img.className = 'draggable';
                    img.style.width = '150px';
                    img.style.height = 'auto';
                    $('#savedSignatures').append(img);
                    makeDraggable(img);
                }

                // Add Drag-and-Drop Fields
                $('.option').on('dragstart', function(e) {
                    e.originalEvent.dataTransfer.setData('type', $(this).data('type'));
                });

                $('.file-container').on('dragover', function(e) {
                    e.preventDefault();
                });

                $('.file-container').on('drop', function(e) {
                    e.preventDefault();

                    const type = e.originalEvent.dataTransfer.getData('type');
                    const containerOffset = $(this).offset();
                    const dropX = e.originalEvent.pageX - containerOffset.left;
                    const dropY = e.originalEvent.pageY - containerOffset.top;
                    addField(type, dropX, dropY);
                });

                function addField(type, x, y) {
                    const field = document.createElement('div');
                    field.className = 'draggable';
                    field.style.position = 'absolute'; // Ensures positioning relative to the container
                    field.style.left = `${x}px`;
                    field.style.top = `${y}px`;

                    switch (type) {
                        case 'date':
                            field.innerHTML =
                                '<div class="date-box outerbox"><input type="text" class="form-control date" value="{{ $now }}"></div>';
                            break;
                        case 'text':
                            field.innerHTML =
                                '<div class="text-box outerbox"><input type="text" class="form-control text"></div>';
                            break;
                        case 'radio':
                            field.innerHTML =
                                '<div class="radio-box outerbox"><input type="checkbox" class=" "> Radio</div>';
                            break;
                        case 'check':
                            field.innerHTML =
                                '<div class="check-box outerbox"><input type="checkbox" class=" "> Check box</div>';
                            break;
                        case 'signature':
                            field.innerHTML = '<div class="sig-out outerbox"><i class="bi bi-pen-fill"></i></div>';
                            break;
                        case 'signaturee':
                            field.textContent = 'Signature Placeholder';
                            break;
                    }

                    $('.file-container').append(field);
                    makeDraggable(field);
                }


                // Draggable Functionality
                function makeDraggable(element) {
                    interact(element).draggable({
                        listeners: {
                            move(event) {
                                const {
                                    target,
                                    dx,
                                    dy
                                } = event;
                                const x = (parseFloat(target.dataset.x) || 0) + dx;
                                const y = (parseFloat(target.dataset.y) || 0) + dy;

                                target.style.transform = `translate(${x}px, ${y}px)`;
                                target.dataset.x = x;
                                target.dataset.y = y;
                            },
                        },
                    });

                    // Add Delete Button
                    // const deleteBtn = document.createElement('button');
                    // deleteBtn.className = 'delete-btn';
                    // deleteBtn.innerHTML = '&times;';
                    // deleteBtn.onclick = () => element.remove();
                    // element.append(deleteBtn);
                }
            });
        </script>

</body>

</html>
