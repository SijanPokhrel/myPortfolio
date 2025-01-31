<div class="navigation">
    <div class="container">
        <div class="nav-bar">
            <div class="logo">
                <a href="index.php"><img src="assets/image/logo/logop.jpg" alt=""></a>
            </div>
            <div class="nav-items">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Me</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="achievement.php">Achievements</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- <div class="mobile-nav">
    <div class="container">
        <div class="nav-items">
            <ul>
                <li>
                    <a href="index.php">
                        <i class="navi fa-solid fa-house"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="about.php">
                        <i class="navi fa-regular fa-user"></i>
                        <p>About</p>
                    </a>
                </li>
                <li>
                    <a href="portfolio.php">
                        <i class="navi fa-solid fa-briefcase"></i>
                        <p>Portfolio</p>
                    </a>
                </li>
                <li>
                    <a href="achievement.php">
                        <i class="navi fa-regular fa-images"></i>
                        <p>Achievements</p>
                    </a>
                </li>
                <li>
                    <a href="contact.php">
                        <i class="navi fa-regular fa-message"></i>
                        <p>Contact</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div> -->


<nav>
    <a href="index.php" class="logo-mob"><img src="assets/image/logo/logop.jpg" alt=""></a>
    <button class="hamburger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Me</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="achievement.php">Achievements</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>


<script>
document.addEventListener('DOMContentLoaded', () => {
    window.onload = function() {
        const links = document.querySelectorAll(".nav-items ul li a");
        const currentURL = window.location.href;

        links.forEach(link => {
            if (link.href === currentURL) {
                link.classList.add("active");
            }
        });
    };
});
</script>
<script>
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navLinks.classList.toggle('active');
});

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    if (!hamburger.contains(e.target) && !navLinks.contains(e.target)) {
        hamburger.classList.remove('active');
        navLinks.classList.remove('active');
    }
});

// Close menu when clicking a link
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navLinks.classList.remove('active');
    });
});

// Close menu on resize
window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
        hamburger.classList.remove('active');
        navLinks.classList.remove('active');
    }
});
</script>