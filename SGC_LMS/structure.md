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
| `Plan_Updated.md` | Plan de développement avec progression | ✅ ACTUEL |
| `Theme_Layout_SGC-LMS_Updated.md` | Documentation thème Bleu/Vert Menthe | ✅ ACTUEL |
| `structure.md` | Structure du projet (ce fichier) | ✅ ACTUEL |

### 🗑️ Fichiers à Supprimer
| Fichier | Raison | Action |
|---------|--------|--------|
| `Plan.md` | Remplacé par Plan_Updated.md | 🗑️ SUPPRIMER |
| `SGC_LMS.md` | Spécifications initiales, intégrées dans la doc | 🗑️ SUPPRIMER |
| `Theme_Layout_SGC-LMS.md` | Remplacé par Theme_Layout_SGC-LMS_Updated.md | 🗑️ SUPPRIMER |

---

## 🌐 PUBLIC/ (Point d'entrée web)

### ✅ Fichiers Actifs
| Fichier | Fonction | Statut | Dépendances |
|---------|----------|--------|-------------|
| `index.php` | Page d'accueil principale | ✅ ACTUEL | main-updated.php, home.php |
| `login.php` | Page de connexion | ✅ ACTUEL | login-fixed.php, auth.php |
| `favicon.ico` | Icône du site | ✅ ACTUEL | - |

### 🔄 Fichiers Vides/Non Implémentés
| Fichier | Fonction | Statut | Action |
|---------|----------|--------|--------|
| `logout.php` | Déconnexion | 📝 VIDE | Phase 3 |
| `register.php` | Inscription | 📝 VIDE | Phase 3 |

### 📁 public/assets/ (Ressources web)
| Fichier | Fonction | Statut |
|---------|----------|--------|
| `css/main.css` | Styles de base Glass Morphism | ✅ ACTUEL |
| `css/theme-blue-mint.css` | Thème Bleu/Vert Menthe | ✅ ACTUEL |
| `css/login.css` | Styles spécifiques login | ✅ ACTUEL |
| `js/main.js` | JavaScript interactif | ✅ ACTUEL |

---

## 📄 TEMPLATES/ (Vues et layouts)

### 📐 Layouts
| Fichier | Fonction | Statut | Utilisation |
|---------|----------|--------|-------------|
| `layouts/main-updated.php` | Layout principal avec thème Bleu/Vert | ✅ ACTUEL | index.php |

### 🗑️ Layouts à Supprimer
| Fichier | Raison | Action |
|---------|--------|--------|
| `layouts/main.php` | Remplacé par main-updated.php | 🗑️ SUPPRIMER |

### 📄 Pages
| Fichier | Fonction | Statut | Utilisation |
|---------|----------|--------|-------------|
| `pages/home.php` | Contenu page d'accueil | ✅ ACTUEL | index.php |
| `pages/login-fixed.php` | Template login avec thème corrigé | ✅ ACTUEL | login.php |

### 🗑️ Pages à Supprimer
| Fichier | Raison | Action |
|---------|--------|--------|
| `pages/login-new.php` | Remplacé par login-fixed.php | 🗑️ SUPPRIMER |
| `pages/login.php` | Ancien template, non utilisé | 🗑️ SUPPRIMER |

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
    - logout()
    - isLoggedIn()
    - getCurrentUser()
}
```

---

## 🎨 ASSETS/ (Ressources statiques - DOUBLONS)

### 🗑️ Dossier à Supprimer Complètement
| Dossier | Raison | Action |
|---------|--------|--------|
| `assets/` | Doublon de public/assets/ | 🗑️ SUPPRIMER ENTIÈREMENT |

**Explication :** Tous les assets sont déjà dans `public/assets/` et accessibles par le serveur web. Le dossier `assets/` racine fait doublon.

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

## 🧹 PLAN DE NETTOYAGE

### 🗑️ Fichiers à Supprimer (7 fichiers)
1. **Documentation obsolète :**
   - `Plan.md` → Remplacé par `Plan_Updated.md`
   - `SGC_LMS.md` → Spécifications intégrées
   - `Theme_Layout_SGC-LMS.md` → Remplacé par version Updated

2. **Templates obsolètes :**
   - `templates/layouts/main.php` → Remplacé par `main-updated.php`
   - `templates/pages/login-new.php` → Remplacé par `login-fixed.php`
   - `templates/pages/login.php` → Non utilisé

3. **Assets dupliqués :**
   - `assets/` (dossier entier) → Doublon de `public/assets/`

### 🔧 Code à Nettoyer
1. **Commentaires de développement** dans les fichiers PHP
2. **Variables non utilisées** dans les classes
3. **CSS redondant** entre les fichiers de styles
4. **JavaScript non utilisé** dans main.js

---

## 📈 STATISTIQUES PROJET

### 📊 Répartition des Fichiers
- **Fichiers actifs** : 15 fichiers
- **Fichiers à supprimer** : 7 fichiers  
- **Fichiers vides (Phase 3)** : 2 fichiers
- **Total après nettoyage** : 15 fichiers utiles

### 💾 Taille du Projet
- **Avant nettoyage** : ~22 fichiers
- **Après nettoyage** : ~15 fichiers (-32%)
- **Base de données** : 8KB (4 tables)

---

## 🎯 STRUCTURE FINALE OPTIMISÉE

```
SGC_LMS/
├── 📋 Plan_Updated.md
├── 📋 Theme_Layout_SGC-LMS_Updated.md  
├── 📋 structure.md
├── 🌐 public/
│   ├── index.php ✅
│   ├── login.php ✅
│   ├── logout.php (Phase 3)
│   ├── register.php (Phase 3)
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
│   │   └── main-updated.php ✅
│   └── pages/
│       ├── home.php ✅
│       └── login-fixed.php ✅
├── 🔧 includes/
│   ├── config.php ✅
│   ├── database.php ✅
│   └── auth.php ✅
├── 💾 data/
│   └── database.sqlite ✅
└── ⚙️ install/
    └── schema.sql ✅
```

---

## 🔄 MISE À JOUR AUTOMATIQUE

Ce fichier sera mis à jour à chaque phase :
- ✅ **Phase 1-2** : Structure de base documentée
- 🔄 **Phase 3** : Ajout authentification complète
- 🔄 **Phase 4** : Ajout dashboard utilisateur
- 🔄 **Phase 5** : Ajout API REST
- 🔄 **Phases suivantes** : Évolution progressive

**Dernière vérification** : 19 Août 2025 - Structure optimisée et prête pour Phase 3
