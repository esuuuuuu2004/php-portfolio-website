<?php
// includes/navbar.php
$currentPage = basename($_SERVER['PHP_SELF']);
$navItems = [
    'index.php'    => 'Home',
    'about.php'    => 'About',
    'projects.php' => 'Projects',
    'contact.php'  => 'Contact',
];
?>
<nav class="navbar" id="navbar">
    <div class="nav-container">

        <a href="index.php" class="nav-brand">
            <span class="brand-icon">&lt;/&gt;</span>
            <span class="brand-text">Mohammad</span>
        </a>

        <div class="nav-actions">
            <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode" title="Toggle dark mode">
                <span class="theme-icon">🌙</span>
            </button>
            <button class="hamburger" id="hamburger" aria-label="Toggle navigation menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <ul class="nav-links" id="navLinks" role="menubar">
            <?php foreach ($navItems as $page => $label): ?>
            <li role="none">
                <a href="<?php echo $page; ?>"
                   class="nav-link <?php echo ($currentPage === $page) ? 'active' : ''; ?>"
                   role="menuitem">
                    <?php echo $label; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>

    </div>
</nav>
