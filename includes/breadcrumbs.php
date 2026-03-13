<?php
// includes/breadcrumbs.php
$currentFile = basename($_SERVER['PHP_SELF'], '.php');
$breadcrumbMap = [
    'index'    => 'Home',
    'about'    => 'About',
    'projects' => 'Projects',
    'contact'  => 'Contact',
];
$currentLabel = $breadcrumbMap[$currentFile] ?? ucfirst($currentFile);
?>
<nav class="breadcrumb" aria-label="Breadcrumb" data-aos="fade-right" data-aos-duration="500">
    <div class="container">
        <ol class="breadcrumb-list" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="index.php" itemprop="item"><span itemprop="name">Home</span></a>
                <meta itemprop="position" content="1">
            </li>
            <?php if ($currentFile !== 'index'): ?>
            <li class="breadcrumb-separator" aria-hidden="true">&#8250;</li>
            <li class="breadcrumb-item current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <span itemprop="name" aria-current="page"><?php echo htmlspecialchars($currentLabel); ?></span>
                <meta itemprop="position" content="2">
            </li>
            <?php endif; ?>
        </ol>
    </div>
</nav>
