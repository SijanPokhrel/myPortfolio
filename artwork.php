<?php include 'common/header.php'; ?>
<?php include 'common/navigation.php'; ?>
<div class="artwork-section">
    <div class="container">
        <div class="artwork-header">
            <p>Available <span class="highlight">Artworks</span></p>
        </div>
        <div class="artwork-content">
            <div class="art-img-txt">
                <div class="art-img">
                    <img src="assets/image/artworks/i.JPG" alt="" data-src="assets/image/artworks/i.JPG">
                </div>
                <div class="art-txt">
                    <p>BIPUL CHHETRI (2021)</p>
                </div>
            </div>
            <div class="art-img-txt">
                <div class="art-img">
                    <img src="assets/image/artworks/ii.JPG" alt="" data-src="assets/image/artworks/ii.JPG">
                </div>
                <div class="art-txt">
                    <p>THE OLD MAN (2021)</p>
                </div>
            </div>
            <div class="art-img-txt">
                <div class="art-img">
                    <img src="assets/image/artworks/iii.JPG" alt="" data-src="assets/image/artworks/iii.JPG">
                </div>
                <div class="art-txt">
                    <p>JETHALAL (2021)</p>
                </div>
            </div>
            <div class="art-img-txt">
                <div class="art-img">
                    <img src="assets/image/artworks/iv.JPG" alt="" data-src="assets/image/artworks/iv.JPG">
                </div>
                <div class="art-txt">
                    <p>LAXMI PRASAD DEVKOTA (2021)</p>
                </div>
            </div>
            <div class="art-img-txt">
                <div class="art-img">
                    <img src="assets/image/artworks/v.JPG" alt="" data-src="assets/image/artworks/v.JPG">
                </div>
                <div class="art-txt">
                    <p>LEONAL ANDRES MESSI (2022)</p>
                </div>
            </div>
            <div class="art-img-txt">
                <div class="art-img">
                    <img src="assets/image/artworks/vi.JPG" alt="" data-src="assets/image/artworks/vi.JPG">
                </div>
                <div class="art-txt">
                    <p>KUMARI ATTIRE (2022)</p>
                </div>
            </div>
            <div class="art-img-txt">
                <div class="art-img">
                    <img src="assets/image/artworks/aa.JPG" alt="" data-src="assets/image/artworks/aa.JPG">
                </div>
                <div class="art-txt">
                    <p>THE LIGHT OF HOPE (2023)</p>
                </div>
            </div>
            <div class="art-img-txt">
                <div class="art-img">
                    <img src="assets/image/artworks/bb.JPG" alt="" data-src="assets/image/artworks/bb.JPG">
                </div>
                <div class="art-txt">
                    <p>SELF CAGED (2023)</p>
                </div>
            </div>
            <div class="art-img-txt">
                <div class="art-img">
                    <img src="assets/image/artworks/dd.JPG" alt="" data-src="assets/image/artworks/dd.JPG">
                </div>
                <div class="art-txt">
                    <p>ROOT (2023)</p>
                </div>
            </div>
            <div class="art-img-txt">
                <div class="art-img">
                    <img src="assets/image/artworks/gg.JPG" alt="" data-src="assets/image/artworks/gg.JPG">
                </div>
                <div class="art-txt">
                    <p>THE SYMBOLIC LOTUS (2023)</p>
                </div>
            </div>
            <div class="art-img-txt">
                <div class="art-img">
                    <img src="assets/image/artworks/hh.JPG" alt="" data-src="assets/image/artworks/hh.JPG">
                </div>
                <div class="art-txt">
                    <p>AMRIT GURUNG(micro art) (2022)</p>
                </div>
            </div>
            <div class="art-img-txt">
                <div class="art-img">
                    <img src="assets/image/artworks/jj.JPG" alt="" data-src="assets/image/artworks/jj.JPG">
                </div>
                <div class="art-txt">
                    <p>BALEN SHAH (2024)</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <button class="nav-btn prev">&laquo;</button>
            <img id="modal-image" alt="Modal Image">
            <button class="nav-btn next">&raquo;</button>
        </div>
    </div>
</div>


<script>
const modal = document.getElementById('modal');
const modalImage = document.getElementById('modal-image');
const closeBtn = document.querySelector('.close');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
const images = Array.from(document.querySelectorAll('.art-img-txt .art-img img'));
let currentIndex = 0;

// Swipe variables
let touchStartX = 0;
let touchEndX = 0;

// Function to open the modal
function openModal(index) {
    currentIndex = index;
    modalImage.src = images[currentIndex].getAttribute('data-src');
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden'; // Prevent background scroll
}

// Function to close the modal
function closeModal() {
    modal.style.display = 'none';
    document.body.style.overflow = ''; // Re-enable background scroll
}

// Function to show the previous image
function showPrevImage() {
    currentIndex = (currentIndex - 1 + images.length) % images.length; // Loop back to last if at the start
    modalImage.src = images[currentIndex].getAttribute('data-src');
}

// Function to show the next image
function showNextImage() {
    currentIndex = (currentIndex + 1) % images.length; // Loop back to first if at the end
    modalImage.src = images[currentIndex].getAttribute('data-src');
}

// Add event listeners to gallery images
images.forEach((img, index) => {
    img.addEventListener('click', () => {
        openModal(index);
    });
});

// Close modal on close button click
closeBtn.addEventListener('click', closeModal);

// Close modal when clicking outside the image
modal.addEventListener('click', (e) => {
    if (e.target === modal) closeModal();
});

// Add event listeners to navigation buttons
prevBtn.addEventListener('click', showPrevImage);
nextBtn.addEventListener('click', showNextImage);

// Add swipe functionality
modal.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
});

modal.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
});

function handleSwipe() {
    if (touchStartX - touchEndX > 50) {
        // Swipe left: show next image
        showNextImage();
    } else if (touchEndX - touchStartX > 50) {
        // Swipe right: show previous image
        showPrevImage();
    }
}

// Keyboard navigation (left and right arrow keys)
document.addEventListener('keydown', (e) => {
    if (modal.style.display === 'flex') {
        if (e.key === 'ArrowLeft') {
            showPrevImage();
        } else if (e.key === 'ArrowRight') {
            showNextImage();
        } else if (e.key === 'Escape') {
            closeModal();
        }
    }
});
</script>
<?php include 'common/footer.php'; ?>