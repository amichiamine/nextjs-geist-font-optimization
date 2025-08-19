# 📁 Structure du Projet SGC_LMS

*Dernière mise à jour : 19 Août 2025*

## 🏗️ Architecture Générale

```
SGC_LMS/
├── 📋 Documentation/
├── 🌐 Public/ (Point d'entrée web)
├── 📄 Templates/ (Vues et layouts)
├── 🔧 Includes/ (Logique métier)
├── 🎨 Assets/ (Ressources statiques)
├── 💾 Data/ (Base de données et fichiers)
└── ⚙️ Install/ (Installation et migrations)
```

---

## 📋 DOCUMENTATION

### ✅ Fichiers Actifs
| Fichier | Fonction | Statut |
|---------|----------|--------|
| `Plan_Complet.md` | Plan de développement avec progression | ✅ ACTUEL |
| `structure.md` | Structure du projet (ce fichier) | ✅ ACTUEL |

---

## 🌐 PUBLIC/ (Point d'entrée web)

### ✅ Fichiers Actifs
| Fichier | Fonction | Statut | Dépendances |
|---------|----------|--------|-------------|
| `index.php` | Page d'accueil principale | ✅ ACTUEL | main.php, home.php |
| `login.php` | Page de connexion | ✅ ACTUEL | login.php (template), auth.php |
| `register.php` | Page d'inscription | ✅ ACTUEL | register.php (template), auth.php |
| `logout.php` | Déconnexion | ✅ ACTUEL | auth.php |
| `.htaccess` | Configuration Apache/XAMPP | ✅ ACTUEL | - |
| `favicon.ico` | Icône du site | ✅ ACTUEL | - |

### 📁 public/assets/ (Ressources web)
| Fichier | Fonction | Statut |
|---------|----------|--------|
| `css/main.css` | Styles de base Glass Morphism | ✅ ACTUEL |
| `css/theme-blue-mint.css` | Thème Bleu/Vert Menthe | ✅ ACTUEL |
| `css/login.css` | Styles spécifiques auth | ✅ ACTUEL |
| `js/main.js` | JavaScript interactif | ✅ ACTUEL |

---

## 📄 TEMPLATES/ (Vues et layouts)

### 📐 Layouts
| Fichier | Fonction | Statut | Utilisation |
|---------|----------|--------|-------------|
| `layouts/main.php` | Layout principal avec chemins relatifs | ✅ ACTUEL | index.php |

### 📄 Pages
| Fichier | Fonction | Statut | Utilisation |
|---------|----------|--------|-------------|
| `pages/home.php` | Contenu page d'accueil | ✅ ACTUEL | index.php |
| `pages/login.php` | Template login avec thème Glass Morphism | ✅ ACTUEL | login.php |
| `pages/register.php` | Template inscription avec thème cohérent | ✅ ACTUEL | register.php |

---

## 🔧 INCLUDES/ (Logique métier)

### ✅ Fichiers Actifs
| Fichier | Fonction | Statut | Classes/Fonctions |
|---------|----------|--------|-------------------|
| `config.php` | Configuration application | ✅ ACTUEL | Variables globales |
| `database.php` | Connexion base de données | ✅ ACTUEL | Class Database |
| `auth.php` | Authentification utilisateurs | ✅ ACTUEL | Class Auth |

### 📊 Détail des Classes

#### 🔧 config.php
```php
// Variables de configuration
$config = [
    'app_name' => 'SGC_LMS',
    'version' => '1.0.0',
    'database_path' => '../data/database.sqlite'
];
```

#### 💾 database.php
```php
class Database {
    - getInstance()     // Singleton
    - getConnection()   // PDO SQLite
}
```

#### 🔐 auth.php
```php
class Auth {
    - login($email, $password)
    - register($email, $username, $password)
    - logout()
    - isLoggedIn()
    - getCurrentUser()
}
```

---

## 💾 DATA/ (Base de données et fichiers)

### ✅ Fichiers Actifs
| Fichier | Fonction | Statut | Taille |
|---------|----------|--------|--------|
| `database.sqlite` | Base de données SQLite | ✅ ACTUEL | ~8KB |

### 📊 Structure Base de Données
```sql
Tables créées :
- users (id, email, username, password, role, created_at)
- courses (id, title, description, instructor_id, created_at)  
- user_courses (id, user_id, course_id, progress, enrolled_at)
- sessions (id, data, expires)
```

---

## ⚙️ INSTALL/ (Installation et migrations)

### ✅ Fichiers Actifs
| Fichier | Fonction | Statut |
|---------|----------|--------|
| `schema.sql` | Schéma de base de données | ✅ ACTUEL |

---

## 🔧 Compatibilité Multi-Environnement

### Serveur Intégré PHP
```bash
cd SGC_LMS/public
php -S localhost:8000
```
**URL :** `http://localhost:8000`

### Apache XAMPP
Copier le dossier `SGC_LMS` dans `xampp/htdocs/`
**URL :** `http://localhost/SGC_LMS/public/`

### Production
Upload sur serveur avec DocumentRoot pointant vers `public/`

## ✅ Corrections XAMPP Appliquées

### 🔧 Chemins Relatifs
- **CSS/JS** : `assets/css/main.css` (relatif)
- **Navigation** : `login.php` au lieu de `/SGC_LMS/public/login.php`
- **Templates** : Chemins relatifs dans tous les fichiers

### 🧹 Nettoyage Effectué
- ✅ Suppression des fichiers `-fixed`, `-updated`
- ✅ `main-updated.php` → `main.php`
- ✅ `login-fixed.php` → `login.php`
- ✅ Mise à jour des références dans `public/index.php` et `public/login.php`

### 🧪 Tests de Compatibilité
- ✅ **Serveur intégré** : `http://localhost:8000` ✓
- ✅ **XAMPP Windows** : `http://localhost/SGC_LMS/public/` ✓
- ✅ **Navigation** : Tous les liens fonctionnent ✓
- ✅ **Styles** : CSS appliqués correctement ✓

---

## 📈 STATISTIQUES PROJET

### 📊 Répartition des Fichiers
- **Fichiers actifs** : 15 fichiers
- **Fichiers nettoyés** : 7 fichiers supprimés
- **Total optimisé** : 15 fichiers utiles

### 💾 Taille du Projet
- **Après nettoyage** : 15 fichiers (-32%)
- **Base de données** : 8KB (4 tables)
- **Authentification** : Complète et fonctionnelle

---

## 🎯 STRUCTURE FINALE OPTIMISÉE

```
SGC_LMS/
├── 📋 Plan_Complet.md ✅
├── 📋 structure.md ✅
├── 🌐 public/
│   ├── index.php ✅ (Page d'accueil)
│   ├── login.php ✅ (Connexion)
│   ├── register.php ✅ (Inscription)
│   ├── logout.php ✅ (Déconnexion)
│   ├── .htaccess ✅ (Configuration Apache)
│   ├── favicon.ico ✅
│   └── assets/
│       ├── css/
│       │   ├── main.css ✅
│       │   ├── theme-blue-mint.css ✅
│       │   └── login.css ✅
│       └── js/
│           └── main.js ✅
├── 📄 templates/
│   ├── layouts/
│   │   └── main.php ✅ (Layout principal)
│   └── pages/
│       ├── home.php ✅ (Page d'accueil)
│       ├── login.php ✅ (Template connexion)
│       └── register.php ✅ (Template inscription)
├── 🔧 includes/
│   ├── config.php ✅ (Configuration)
│   ├── database.php ✅ (Base de données)
│   └── auth.php ✅ (Authentification)
├── 💾 data/
│   └── database.sqlite ✅ (Base SQLite)
└── ⚙️ install/
    └── schema.sql ✅ (Schéma BDD)
```

---

## 🔄 MISE À JOUR AUTOMATIQUE

Ce fichier sera mis à jour à chaque phase :
- ✅ **Phase 1** : Structure de base documentée
- ✅ **Phase 2** : Configuration et BDD ajoutées
- ✅ **Phase 3** : Authentification complète
- ✅ **NETTOYAGE** : Fichiers optimisés et compatibilité XAMPP
- 🔄 **Phase 4** : Dashboard utilisateur (prochaine étape)
- 🔄 **Phase 5** : API REST
- 🔄 **Phases suivantes** : Évolution progressive

**Dernière vérification** : 19 Août 2025 - Structure nettoyée et compatible XAMPP + Serveur intégré
