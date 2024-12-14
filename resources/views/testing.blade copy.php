<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Form with Custom Fields</title>
    <style>
        #pdf-viewer {
            position: relative;
        }

        #pdf-canvas {
            border: 1px solid #000;
        }

        .draggable {
            padding: 5px;
            margin: 5px;
            cursor: move;
            background-color: #f0f0f0;
        }

        .form-field {
            position: absolute;
            border: 1px solid #000;
            padding: 5px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .form-field input {
            width: 100%;
        }

        .delete-btn {
            background-color: red;
            color: white;
            border: none;
            padding: 2px 5px;
            cursor: pointer;
            font-size: 12px;
        }

        .delete-btn:hover {
            background-color: darkred;
        }
    </style>
</head>

<body>

    <!-- Sidebar for draggable fields -->
    <div class="sidebar">
        <button class="draggable" id="text-field" draggable="true">Text Field</button>
        <button class="draggable" id="date-field" draggable="true">Date Picker</button>
        <button class="draggable" id="radio-field" draggable="true">Radio Button</button>
    </div>

    <!-- PDF Viewer -->
    <div id="pdf-viewer">
        <canvas id="pdf-canvas"></canvas>
        <div id="overlay"></div>
    </div>

    <!-- Button to generate and download PDF -->
    <button onclick="generatePDF()">Download PDF</button>

    <!-- Include PDF.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
    <!-- Include jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <script>
        let pdfDoc = null;
        const canvas = document.getElementById('pdf-canvas');
        const ctx = canvas.getContext('2d');
        const overlay = document.getElementById('overlay');
        let draggedElement = null;
        let fields = [];

        // Load PDF document
        const url = '{{ asset('frontend/uploads/merged.pdf') }}'; // Replace with your PDF path
        pdfjsLib.getDocument(url).promise.then(doc => {
            pdfDoc = doc;
            renderPage(1);
        });

        // Render PDF page
        function renderPage(pageNum) {
            pdfDoc.getPage(pageNum).then(page => {
                const viewport = page.getViewport({
                    scale: 1.5
                });
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                const renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };
                page.render(renderContext);
            });
        }

        // Drag and drop for custom form fields
        document.querySelectorAll('.draggable').forEach(element => {
            element.addEventListener('dragstart', (e) => {
                draggedElement = e.target;
            });
        });

        document.getElementById('pdf-viewer').addEventListener('dragover', (e) => {
            e.preventDefault();
        });

        document.getElementById('pdf-viewer').addEventListener('drop', (e) => {
            e.preventDefault();

            if (draggedElement) {
                const fieldType = draggedElement.id;
                const newField = document.createElement('div');
                newField.classList.add('form-field');
                newField.style.left = `${e.clientX - canvas.offsetLeft}px`;
                newField.style.top = `${e.clientY - canvas.offsetTop}px`;

                if (fieldType === 'text-field') {
                    newField.innerHTML = `<input type="text" />`;
                } else if (fieldType === 'date-field') {
                    newField.innerHTML = `<input type="date" />`;
                } else if (fieldType === 'radio-field') {
                    newField.innerHTML = `<input type="radio" name="group" />`;
                }

                // Add a delete button to the field
                const deleteButton = document.createElement('button');
                deleteButton.classList.add('delete-btn');
                deleteButton.innerText = 'X';
                deleteButton.onclick = () => {
                    newField.remove();
                    removeFieldData(newField);
                };

                newField.appendChild(deleteButton);
                overlay.appendChild(newField);

                // Store the field data for generating PDF
                fields.push({
                    type: fieldType,
                    x: e.clientX - canvas.offsetLeft,
                    y: e.clientY - canvas.offsetTop,
                    element: newField
                });
            }
        });

        // Generate and download the modified PDF with form fields
        function generatePDF() {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            // Add the existing PDF content to the new document
            const imgData = canvas.toDataURL('image/png');
            doc.addImage(imgData, 'PNG', 0, 0, canvas.width / 4, canvas.height / 4); // Adjust scale as needed

            // Add form fields data to the new PDF using jsPDF form field annotations
            fields.forEach(field => {
                const rect = field.element.getBoundingClientRect();
                const x = (rect.left - canvas.offsetLeft) / 4; // Scale to fit the PDF
                const y = (rect.top - canvas.offsetTop) / 4;  // Scale to fit the PDF

                if (field.type === 'text-field') {
                    const input = field.element.querySelector('input');
                    doc.text(input.value, x, y); // Position text field
                    doc.textField(x, y, 40, 10, { value: input.value }); // jsPDF text field
                } else if (field.type === 'date-field') {
                    const input = field.element.querySelector('input');
                    doc.text(input.value, x, y); // Position text field
                    doc.textField(x, y, 40, 10, { value: input.value }); // jsPDF text field
                } else if (field.type === 'radio-field') {
                    const input = field.element.querySelector('input');
                    if (input.checked) {
                        doc.text('Selected', x, y); // Position radio button
                    }
                }
            });

            // Save the modified PDF
            doc.save('modified.pdf');
        }

        // Remove field data when it's deleted
        function removeFieldData(fieldElement) {
            fields = fields.filter(field => field.element !== fieldElement);
        }
    </script>
</body>

</html>