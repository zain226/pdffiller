<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Editor</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fabric@4.6.0/dist/fabric.min.js"></script>
    <style>
        #pdfCanvas {
            border: 1px solid #000;
            margin-bottom: 10px;
        }

        #signatureCanvas {
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <h2>Document Editor</h2>
    <canvas id="pdfCanvas"></canvas>
    <button id="addSignature">Add Signature</button>
    <button id="addField">Add Required Field</button>
    <button id="addPage">Add New Page</button>
    <button id="save">Save Document</button>

    <!-- Signature Capture Canvas -->
    <div>
        <h4>Capture Signature</h4>
        <canvas id="signatureCanvas" width="300" height="150"></canvas>
        <button id="clearSignature">Clear Signature</button>
    </div>

    <script>
        const pdfUrl = '{{ asset('frontend/uploads/merged.pdf') }}'; // Your PDF path
        const pdfCanvas = document.getElementById('pdfCanvas');
        const pdfContext = pdfCanvas.getContext('2d');
        let fabricCanvas = null;
        let pdfDocument = null;
        let currentPage = 1;

        // Load PDF.js
        const pdfjsLib = window['pdfjs-dist/build/pdf'];
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';

        // Render PDF page
        function renderPDFPage(pageNumber) {
            pdfDocument.getPage(pageNumber).then(page => {
                const viewport = page.getViewport({
                    scale: 1.5
                });
                pdfCanvas.width = viewport.width;
                pdfCanvas.height = viewport.height;

                const renderContext = {
                    canvasContext: pdfContext,
                    viewport: viewport
                };
                page.render(renderContext).promise.then(() => {
                    if (!fabricCanvas) {
                        fabricCanvas = new fabric.Canvas('pdfCanvas', {
                            backgroundColor: null
                        });
                    }
                });
            });
        }

        // Load PDF
        pdfjsLib.getDocument(pdfUrl).promise.then(pdf => {
            pdfDocument = pdf;
            renderPDFPage(currentPage);
        });

        // Signature Canvas
        const signatureCanvas = document.getElementById('signatureCanvas');
        const signatureContext = signatureCanvas.getContext('2d');
        let signatureDrawing = false;

        signatureCanvas.addEventListener('mousedown', () => (signatureDrawing = true));
        signatureCanvas.addEventListener('mouseup', () => (signatureDrawing = false));
        signatureCanvas.addEventListener('mousemove', (e) => {
            if (signatureDrawing) {
                signatureContext.lineTo(e.offsetX, e.offsetY);
                signatureContext.stroke();
            }
        });

        document.getElementById('clearSignature').addEventListener('click', () => {
            signatureContext.clearRect(0, 0, signatureCanvas.width, signatureCanvas.height);
        });

        // Add Signature to Fabric Canvas
        document.getElementById('addSignature').addEventListener('click', () => {
            const signatureDataUrl = signatureCanvas.toDataURL();
            fabric.Image.fromURL(signatureDataUrl, (img) => {
                img.set({
                    left: 100,
                    top: 100,
                    scaleX: 0.5,
                    scaleY: 0.5
                });
                fabricCanvas.add(img);
            });
        });

        // Add Required Field
        document.getElementById('addField').addEventListener('click', () => {
            const fieldName = prompt('Enter field name:');
            if (fieldName) {
                const field = new fabric.Textbox(fieldName, {
                    left: 100,
                    top: 100,
                    width: 200,
                    fontSize: 16,
                    editable: true
                });
                fabricCanvas.add(field);
            }
        });

        // Add a New Page
        document.getElementById('addPage').addEventListener('click', () => {
            pdfCanvas.width = 600;
            pdfCanvas.height = 800;
            pdfContext.clearRect(0, 0, pdfCanvas.width, pdfCanvas.height);
            fabricCanvas.clear();
        });

        // Save Document
        document.getElementById('save').addEventListener('click', () => {
            const json = fabricCanvas.toJSON();
            console.log('Canvas data:', json);
            alert('Save functionality is under development!');
        });
    </script>
</body>

</html>
