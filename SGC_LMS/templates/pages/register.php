<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - SGC_LMS</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/theme-blue-mint.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="brand-logo">🎓</div>
                <h1 class="login-title">Inscription</h1>
                <p class="login-subtitle">Créez votre compte SGC_LMS</p>
            </div>
            
            <?php if (isset($error)): ?>
                <div class="error-message">
                    <span class="error-icon">⚠️</span>
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>
            
            <form method="POST" class="login-form">
                <div class="form-group">
                    <label for="first_name" class="form-label">Prénom</label>
                    <input type="text" id="first_name" name="first_name" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label for="last_name" class="form-label">Nom</label>
                    <input type="text" id="last_name" name="last_name" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label for="username" class="form-label">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" id="password" name="password" class="form-input" required>
                </div>
                
                <button type="submit" class="login-button">
                    <span class="button-text">S'inscrire</span>
                    <span class="button-icon">→</span>
                </button>
            </form>
            
            <div class="login-footer">
                <p>Déjà un compte ? <a href="login.php" class="login-link">Se connecter</a></p>
                <p><a href="index.php" class="login-link">← Retour à l'accueil</a></p>
            </div>
        </div>
    </div>
    
    <script src="assets/js/main.js"></script>
</body>
</html>
