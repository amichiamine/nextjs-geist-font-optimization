<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGC_LMS - Plateforme d'apprentissage moderne</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/theme-blue-mint.css">
</head>
<body>
    <header class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="nav-brand">
                    <div class="brand-logo">🎓</div>
                    <span class="brand-name">SGC_LMS</span>
                </div>
                
                <!-- Navigation Desktop -->
                <nav class="nav-menu desktop-menu">
                    <a href="index.php" class="nav-link">Accueil</a>
                    <a href="login.php" class="nav-link">Connexion</a>
                    <a href="register.php" class="nav-link">Inscription</a>
                </nav>
                
                <!-- Bouton Menu Sandwich Mobile -->
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Menu">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
            </div>
            
            <!-- Menu Mobile Overlay Glass Blur Morphism -->
            <nav class="mobile-menu" id="mobileMenu">
                <div class="mobile-menu-content">
                    <a href="index.php" class="mobile-nav-link">🏠 Accueil</a>
                    <a href="courses.php" class="mobile-nav-link">📚 Cours</a>
                    <a href="about.php" class="mobile-nav-link">ℹ️ À propos</a>
                    <a href="contact.php" class="mobile-nav-link">📞 Contact</a>
                    <a href="login.php" class="mobile-nav-link">🔐 Connexion</a>
                    <a href="register.php" class="mobile-nav-link">📝 Inscription</a>
                </div>
            </nav>
        </div>
    </header>
    
    <main class="main-content">
        <div class="container">
            <?= $content ?>
        </div>
    </main>
    
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="brand-logo">🎓</div>
                    <span class="brand-name">SGC_LMS</span>
                </div>
                <div class="footer-text">
                    <p>&copy; 2024 SGC_LMS. Plateforme d'apprentissage moderne.</p>
                    <p>Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="assets/js/main.js"></script>
</body>
</html>
