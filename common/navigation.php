<div class="navigation">
    <div class="container">
        <div class="nav-bar">
            <div class="logo">
                <a href="index.php"><img src="assets/image/logo/logop.jpg" alt=""></a>
            </div>
            <div class="nav-items">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#project">Portfolio</a></li>
                    <li><a href="achievement.php">Achievements</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

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