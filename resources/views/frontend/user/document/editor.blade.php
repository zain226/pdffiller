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
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" class="theme-opt"
        rel="stylesheet" type="text/css">
    <script src="{{ asset('frontend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
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

        .hide {
            display: none;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar bg-dark text-white left-sidebar">
                @include('frontend.user.document.components.leftbar')
            </div>
            <div class="col-md-10">
                <div>
                    <div class="text-center mb-4">
                        <h3>Unified Display</h3>
                    </div>
                    <div class="file-container">
                    </div>
                </div>
                <div class="col-md-2 sidebar bg-dark text-white ">
                    @include('frontend.user.document.components.esign')
                </div>
            </div>
        </div>
        @include('frontend.user.document.components.canvas')
        <div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" class="mb-0">
                    Customization
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas"
                    aria-label="Close"><i class="bi bi-x-circle"></i></button>
            </div>
            <div class="offcanvas-body p-4">
                <div class="row">
                    <div class="col-12">
                        <img src="assets/images/contact.svg" class="img-fluid d-block mx-auto" alt="">
                        <div class="card border-0 mt-4" style="z-index: 1">
                            <div class="card-body p-0">
                                @include('frontend.user.document.components.esign')
                                <button class="btn btn-primary apply w-100 mt-4">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offcanvas-footer p-4 border-top text-center">
            </div>
        </div>

        @php($now = now())
        <script>
            $(document).on('click', '.edit-btn', function() {
                let type = $(this).closest('.outerbox').data('type');
                $.ajax({
                    url: "{{ route('user.document.editor.get.component') }}",
                    data: {
                        type: type
                    },
                    method: 'get',
                    success: function(response) {
                        $('.appendBody').html(response.view)
                        $('.offcanvas').addClass('show')
                    },
                });
            })
            $(document).on('click', '.btn-close', function() {
                $(this).closest('.offcanvas').removeClass('show');
            })
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
                                '<div data-type="date" class="date-box outerbox"><input type="text" class="form-control date" value="{{ $now }}"></div>';
                            break;
                        case 'text':
                            field.innerHTML =
                                '<div data-type="text" class="text-box outerbox"><input type="text" class="form-control text"></div>';
                            break;
                        case 'radio':
                            field.innerHTML =
                                '<div data-type="radio" class="radio-box outerbox"><input type="checkbox" class=" "> Radio</div>';
                            break;
                        case 'check':
                            field.innerHTML =
                                '<div data-type="checkbox" class="check-box outerbox"><input type="checkbox" class=" "> Check box</div>';
                            break;
                        case 'signature':
                            field.innerHTML =
                                '<div data-type="esign" class="sig-out outerbox"><i class="bi bi-pen-fill"></i></div>';
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
