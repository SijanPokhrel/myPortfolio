//Text typing animation JS
const texts = ["Pencil Artist", "Web Developer"];
const typingContainer = document.getElementById("typing-container");
let textIndex = 0; // Tracks the current text in the array
let charIndex = 0; // Tracks the current character index
let isDeleting = false; // Indicates typing or deleting mode

function typeAnimation() {
    const currentText = texts[textIndex]; // Get the current text
    if (isDeleting) {
        // Reverse: Delete characters from right to left
        charIndex--;
        typingContainer.textContent = currentText.substring(0, charIndex);
    } else {
        // Forward: Add characters from left to right
        charIndex++;
        typingContainer.textContent = currentText.substring(0, charIndex);
    }

    // When the entire text is typed
    if (!isDeleting && charIndex === currentText.length) {
        isDeleting = true; // Start deleting
        setTimeout(typeAnimation, 1000); // Pause before reversing
    }
    // When the text is completely deleted
    else if (isDeleting && charIndex === 0) {
        isDeleting = false; // Start typing the next text
        textIndex = (textIndex + 1) % texts.length; // Move to the next text, loop back to the first text
        setTimeout(typeAnimation, 500); // Pause before typing next text
    } else {
        // Control typing and deleting speeds
        setTimeout(typeAnimation, isDeleting ? 100 : 150);
    }
}


// Intersection Observer for Fade-in Scroll Animation JS
const containers = document.querySelectorAll('p');
const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target); // Stop observing after animation triggers
        }
    });
}, {
    threshold: 0.1, // Trigger when 10% of the container is visible
});
containers.forEach(p => observer.observe(p));


//commission-submission JS
const form = document.getElementById('myForm');
const formContainer = document.getElementById('form-section');
const thankYouMessage = document.getElementById('thank-you');
const forms = document.getElementById('uForm'); // Updated to match the correct form ID


form.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission
    form.style.display = 'none'; // Hide the form
    thankYouMessage.style.display = 'block'; // Show the thank-you message

});

function resetForm() {
    thankYouMessage.style.display = 'none'; // Hide the thank-you message
    form.style.display = 'block'; // Show the submit-form-page
    document.getElementById('myForm').scrollIntoView({
        behavior: 'smooth'
    }); // Scroll back to the submit form page
    forms.reset(); // Reset form fields
}







