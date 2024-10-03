function openModal(title, description, imageSrc, thumbnails) {
    document.getElementById('modal-title').textContent = title;
    document.getElementById('modal-description').textContent = description;
    document.getElementById('modal-image').src = imageSrc;
    
    const thumbnailsContainer = document.getElementById('modal-thumbnails');
    thumbnailsContainer.innerHTML = ''; // Xóa nội dung cũ
    
    thumbnails.forEach(src => {
        const img = document.createElement('img');
        img.src = src;
        img.className = 'thumbnail';
        img.onclick = function() {
            document.getElementById('modal-image').src = src;
        };
        thumbnailsContainer.appendChild(img);
    });
    
    document.getElementById('productModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('productModal').style.display = 'none';
}