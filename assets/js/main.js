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

