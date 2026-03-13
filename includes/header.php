<?php
// includes/header.php
if (!isset($pageTitle)) $pageTitle = "Portfolio";
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?> | Mohammad's Portfolio</title>

    <!-- SEO Meta -->
    <meta name="description" content="Mohammad's enterprise-level PHP portfolio showcasing projects, skills, and a contact form.">
    <meta name="keywords" content="PHP, Portfolio, Web Developer, Full-Stack, JavaScript, CSS, Projects, Skills, MySQL">
    <meta name="author" content="Mohammad">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?> | Mohammad's Portfolio">
    <meta property="og:description" content="Mohammad's dynamic PHP portfolio — projects, skills, and contact.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/images/og-image.png">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- AOS Animation CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
