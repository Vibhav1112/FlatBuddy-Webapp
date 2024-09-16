document.addEventListener('DOMContentLoaded', () => {
    console.log('JavaScript loaded');

    const dropArea = document.getElementById('drop-area');
    const fileInput = document.getElementById('file-input');
    const previewContainer = document.createElement('div'); // Create a container for image previews

    previewContainer.classList.add('preview-container'); // Add class for styling
    dropArea.appendChild(previewContainer); // Add the container to the drop area

    let isProcessing = false; // Flag to prevent redundant processing

    function processFiles(files) {
        if (isProcessing || files.length === 0) return; // Exit if already processing or no files
        isProcessing = true; // Set the flag to prevent redundant processing
        console.log('Processing files:', files);
        [...files].forEach(displayImage);
        isProcessing = false; // Reset the flag after processing
    }

    function displayImage(file) {
        if (!file.type.startsWith('image/')) {
            console.log('Not an image file:', file);
            return;
        }

        const img = document.createElement('img');
        img.classList.add('preview-img'); // Add class for styling
        img.file = file;

        const reader = new FileReader();
        reader.onload = (e) => {
            const image = new Image();
            image.src = e.target.result;
            image.onload = () => {
                resizeImage(image, 100, 100); // Resize to 100x100 pixels
            };
        };
        reader.readAsDataURL(file);

        function resizeImage(image, maxWidth, maxHeight) {
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            const { width, height } = image;

            let newWidth = width;
            let newHeight = height;

            // Calculate the new dimensions while maintaining the aspect ratio
            if (width > height) {
                if (width > maxWidth) {
                    newWidth = maxWidth;
                    newHeight = Math.round((height * maxWidth) / width);
                }
            } else {
                if (height > maxHeight) {
                    newHeight = maxHeight;
                    newWidth = Math.round((width * maxHeight) / height);
                }
            }

            canvas.width = newWidth;
            canvas.height = newHeight;
            ctx.drawImage(image, 0, 0, newWidth, newHeight);

            const resizedImg = document.createElement('img');
            resizedImg.classList.add('preview-img'); // Add class for styling
            resizedImg.src = canvas.toDataURL(); // Use the resized image data

            previewContainer.appendChild(resizedImg);
        }
    }

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });

    dropArea.addEventListener('dragover', () => {
        dropArea.classList.add('highlight');
    });

    dropArea.addEventListener('dragleave', () => {
        dropArea.classList.remove('highlight');
    });

    dropArea.addEventListener('drop', (e) => {
        console.log('File dropped');
        const files = e.dataTransfer.files;
        processFiles(files);
    });

    dropArea.addEventListener('click', () => {
        console.log('Drop area clicked');
        fileInput.click();
    });

    fileInput.addEventListener('change', () => {
        console.log('File input change');
        const files = fileInput.files;
        processFiles(files);
        fileInput.value = ''; // Clear file input after processing to avoid re-trigger
    });
});
