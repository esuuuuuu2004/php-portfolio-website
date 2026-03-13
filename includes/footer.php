<?php
// includes/footer.php
$navItems = [
    'index.php'    => 'Home',
    'about.php'    => 'About',
    'projects.php' => 'Projects',
    'contact.php'  => 'Contact',
];
?>
<footer class="footer" data-aos="fade-up" data-aos-duration="600">
    <div class="container">
        <div class="footer-grid">

            <!-- Brand -->
            <div class="footer-brand">
                <a href="index.php" class="nav-brand footer-logo">
                    <span class="brand-icon">&lt;/&gt;</span>
                    <span class="brand-text">Mohammad</span>
                </a>
                <p>Full-stack PHP developer crafting clean, scalable, and beautiful web experiences.</p>
                <div class="social-icons">
                    <a href="https://github.com/" target="_blank" rel="noopener noreferrer" class="social-icon" title="GitHub">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.44 9.8 8.2 11.4.6.11.82-.26.82-.57v-2c-3.34.72-4.04-1.6-4.04-1.6-.54-1.38-1.33-1.74-1.33-1.74-1.08-.74.08-.72.08-.72 1.2.08 1.83 1.23 1.83 1.23 1.07 1.83 2.8 1.3 3.48 1 .1-.78.42-1.3.76-1.6-2.67-.3-5.47-1.33-5.47-5.93 0-1.31.47-2.38 1.24-3.22-.14-.3-.54-1.52.1-3.18 0 0 1-.32 3.3 1.23a11.5 11.5 0 0 1 3-.4c1.02 0 2.04.13 3 .4 2.28-1.55 3.29-1.23 3.29-1.23.65 1.66.24 2.88.12 3.18.77.84 1.23 1.91 1.23 3.22 0 4.61-2.8 5.63-5.48 5.92.43.37.81 1.1.81 2.22v3.29c0 .32.22.69.83.57C20.57 21.8 24 17.3 24 12c0-6.63-5.37-12-12-12z"/></svg>
                    </a>
                    <a href="https://linkedin.com/" target="_blank" rel="noopener noreferrer" class="social-icon" title="LinkedIn">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M20.45 20.45h-3.56v-5.57c0-1.33-.03-3.04-1.85-3.04-1.85 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.07 2.07 0 1 1 0-4.14 2.07 2.07 0 0 1 0 4.14zm1.78 13.02H3.56V9h3.56v11.45zM22.22 0H1.77C.79 0 0 .77 0 1.73v20.54C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.73C24 .77 23.2 0 22.22 0z"/></svg>
                    </a>
                    <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer" class="social-icon" title="Twitter / X">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M18.9 1.15h3.68l-8.04 9.19L24 22.85h-7.4l-5.8-7.58-6.63 7.58H.47l8.6-9.83L0 1.15h7.59l5.24 6.94 6.07-6.94zm-1.29 19.4h2.04L6.47 3.24H4.28l13.33 17.31z"/></svg>
                    </a>
                    <a href="mailto:mohammad@example.com" class="social-icon" title="Email">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-col">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    <?php foreach ($navItems as $page => $label): ?>
                    <li><a href="<?php echo $page; ?>"><?php echo $label; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-col">
                <h4 class="footer-heading">Get In Touch</h4>
                <ul class="footer-contact">
                    <li><span>&#128205;</span> City, Country</li>
                    <li><span>&#128231;</span> <a href="mailto:mohammad@example.com">mohammad@example.com</a></li>
                    <li><span>&#128222;</span> +1 (555) 000-0000</li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Mohammad. All rights reserved.</p>
            <p>Built with <span class="heart">&#9829;</span> using PHP &amp; CSS</p>
        </div>
    </div>
</footer>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 800, once: true, offset: 80, easing: 'ease-out-cubic' });
</script>

<!-- Main Script -->
<script src="assets/js/script.js"></script>
</body>
</html>
