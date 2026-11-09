<?php
// header.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'M.R. Rahmath Rufaidh | Web Developer & Founder'; ?></title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navigation Header -->
    <header class="site-header">
        <div class="container nav-container">
            <a href="index.php" class="logo">
             Rahmath<span>Rufaidh</span>
            </a>
            <nav class="nav-menu" id="navMenu">
                <ul class="nav-links">
                    <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About & Education</a></li>
                    <li><a href="brands.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'brands.php' ? 'active' : ''; ?>">Brands & Ownership</a></li>
                    <li><a href="projects.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'active' : ''; ?>">Projects</a></li>
                    <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a></li>
                </ul>
                <div class="nav-socials">
                    <a href="https://www.linkedin.com/in/rahmath-rufaidh-884441407?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://github.com/rahmathruf/" target="_blank" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                </div>
            </nav>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>