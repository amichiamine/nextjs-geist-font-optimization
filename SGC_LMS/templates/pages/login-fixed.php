<?php
// Template de la page de connexion - Design Glass Morphism SGC_LMS
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - SGC_LMS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="stylesheet" href="/assets/css/theme-blue-mint.css">
</head>
<body>
    <!-- Container principal avec Glass Morphism -->
    <div class="login-container">
        <!-- Éléments décoratifs d'arrière-plan -->
        <div class="decoration decoration-1"></div>
        <div class="decoration decoration-2"></div>
        <div class="decoration decoration-3"></div>
        
        <!-- Card de connexion Glass Morphism -->
        <div class="login-card">
            <!-- Header avec logo et titre -->
            <div class="login-header">
                <div class="brand-logo">🎓</div>
                <h1 class="brand-name">SGC_LMS</h1>
                <h2 class="login-title">Connexion</h2>
                <p class="login-subtitle">Accédez à votre espace d'apprentissage</p>
            </div>
            
            <!-- Formulaire de connexion -->
            <form class="login-form" method="POST" action="/login.php">
                <!-- Champ Email -->
                <div class="form-group">
                    <label for="email" class="form-label">
                        📧 Adresse email
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="form-input" 
                        placeholder="votre@email.com"
                        autocomplete="email"
                        required
                    >
                </div>
                
                <!-- Champ Mot de passe -->
                <div class="form-group">
                    <label for="password" class="form-label">
                        🔒 Mot de passe
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-input" 
                        placeholder="Votre mot de passe"
                        autocomplete="current-password"
                        required
                    >
                </div>
                
                <!-- Options de connexion -->
                <div class="form-options">
                    <label class="checkbox-label">
                        <input type="checkbox" name="remember" class="checkbox-input">
                        <span class="checkbox-custom"></span>
                        <span class="checkbox-text">Se souvenir de moi</span>
                    </label>
                    
                    <a href="/forgot-password.php" class="forgot-link">
                        Mot de passe oublié ?
                    </a>
                </div>
                
                <!-- Bouton de connexion -->
                <button type="submit" class="btn btn-primary btn-login">
                    <span class="btn-icon">🚀</span>
                    <span class="btn-text">Se connecter</span>
                </button>
                
                <!-- Lien d'inscription -->
                <div class="signup-section">
                    <p class="signup-text">
                        Pas encore de compte ? 
                        <a href="/register.php" class="signup-link">Créer un compte</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    
    <!-- JavaScript pour interactions -->
    <script src="/assets/js/main.js"></script>
    <script>
        // Animation d'entrée de la card
        document.addEventListener('DOMContentLoaded', function() {
            const loginCard = document.querySelector('.login-card');
            loginCard.style.opacity = '0';
            loginCard.style.transform = 'translateY(30px) scale(0.95)';
            
            setTimeout(() => {
                loginCard.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                loginCard.style.opacity = '1';
                loginCard.style.transform = 'translateY(0) scale(1)';
            }, 100);
        });
        
        // Animation des champs de saisie
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
    </script>
</body>
</html>
