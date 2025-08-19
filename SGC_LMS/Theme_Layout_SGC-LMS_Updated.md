# 🎨 Theme & Layout Guide - SGC_LMS (Version Bleu/Vert Menthe)

## Palette de Couleurs Principale - MISE À JOUR

### Couleurs Primaires
- **Bleu Principal** : `#3B82F6` (rgb(59, 130, 246))
- **Vert Menthe** : `#22C55E` (rgb(34, 197, 94))
- **Vert Menthe Clair** : `#86EFAC` (rgb(134, 239, 172))

### Couleurs Secondaires
- **Succès** : `#22C55E` (Vert)
- **Attention** : `#F59E0B` (Orange)
- **Danger** : `#EF4444` (Rouge)

### Couleurs de Texte
- **Texte Principal** : `#1e3a8a` (Bleu marine foncé)
- **Texte Secondaire** : `#64748b` (Gris)
- **Texte sur Fond Sombre** : `#f8fafc` (Blanc cassé)

## Glass Morphism Design System

### Propriétés Glass Morphism
```css
:root {
  --glass-bg: rgba(255, 255, 255, 0.1);
  --glass-border: rgba(255, 255, 255, 0.2);
  --glass-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
  --blur-strength: 10px;
  --border-radius: 1rem;
}
```

### Cards Glass Morphism
- **Arrière-plan** : Semi-transparent avec blur
- **Bordures** : Subtiles avec transparence
- **Ombres** : Douces et diffuses
- **Animations** : Transitions fluides

## Navigation Mobile - Améliorations

### Menu Sandwich Lisible
- **Arrière-plan** : `rgba(15, 23, 42, 0.8)` (Plus opaque)
- **Container** : `rgba(255, 255, 255, 0.95)` (Très opaque)
- **Blur** : `25px` (Plus prononcé)
- **Texte** : `#1e3a8a` (Bleu marine pour contraste)

### Liens Menu Mobile
```css
.mobile-nav-link {
  color: #1e3a8a !important;
  background: rgba(59, 130, 246, 0.1);
  border: 1px solid rgba(59, 130, 246, 0.2);
}

.mobile-nav-link:hover {
  background: rgb(59, 130, 246);
  color: white !important;
}
```

## Composants UI

### Boutons
- **Primaire** : Dégradé Bleu → Vert Menthe
- **Secondaire** : Vert Menthe uni
- **Outline** : Bordure Bleue, fond transparent
- **Ghost** : Transparent avec hover Bleu

### Formulaires
- **Focus** : Bordure Bleue avec ombre
- **Placeholder** : Gris subtil
- **Validation** : Vert pour succès, Rouge pour erreur

### Typographie
- **Police** : Inter (Google Fonts)
- **Poids** : 300 à 900
- **Hiérarchie** : H1 (3rem) → H6 (1rem)

## Thèmes Disponibles

### Thème Principal (Bleu/Vert Menthe)
```css
.theme-blue-mint {
  --color-primary: 59 130 246;
  --color-secondary: 34 197 94;
  --color-accent: 134 239 172;
}
```

### Thèmes Alternatifs
- **Bleu Classique** : `--color-primary: 59 130 246`
- **Vert Moderne** : `--color-primary: 34 197 94`
- **Orange Énergique** : `--color-primary: 249 115 22`

## Responsive Design

### Breakpoints
- **Mobile** : < 768px
- **Tablette** : 768px - 1024px
- **Desktop** : > 1024px

### Adaptations Mobile
- Navigation hamburger avec overlay
- Cards empilées verticalement
- Texte et boutons plus grands
- Espacement optimisé

## Animations et Transitions

### Durées Standard
- **Rapide** : 150ms
- **Normal** : 300ms
- **Lent** : 500ms

### Courbes d'Animation
- **Standard** : `cubic-bezier(0.4, 0, 0.2, 1)`
- **Entrée** : `cubic-bezier(0, 0, 0.2, 1)`
- **Sortie** : `cubic-bezier(0.4, 0, 1, 1)`

### Effets Hover
- **Élévation** : `translateY(-2px) scale(1.02)`
- **Ombre** : Augmentation de l'intensité
- **Couleur** : Transition douce

## Accessibilité

### Contraste
- **Texte/Arrière-plan** : Ratio minimum 4.5:1
- **Éléments interactifs** : Ratio minimum 3:1
- **Focus** : Indicateurs visibles

### Navigation Clavier
- **Tab** : Navigation séquentielle
- **Enter/Space** : Activation des boutons
- **Escape** : Fermeture des modales

## Fichiers CSS

### Structure
```
assets/css/
├── main.css (Base)
├── theme-blue-mint.css (Thème principal)
├── login.css (Page connexion)
└── admin.css (Interface admin)
```

### Ordre de Chargement
1. `main.css` (Styles de base)
2. `theme-blue-mint.css` (Thème couleurs)
3. `[page].css` (Styles spécifiques)

## Changelog

### Version 2.0 - Thème Bleu/Vert Menthe
- ✅ Changement de palette : Violet/Bleu → Bleu/Vert Menthe
- ✅ Amélioration menu mobile : Meilleur contraste et lisibilité
- ✅ Optimisation Glass Morphism : Blur et transparence ajustés
- ✅ Navigation responsive : Overlay mobile amélioré
- ✅ Accessibilité : Contrastes conformes WCAG

### Version 1.0 - Thème Violet/Bleu (Précédent)
- Base Glass Morphism
- Navigation responsive
- Système de couleurs violet

## Utilisation

### Intégration
```html
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/theme-blue-mint.css">
```

### Classes Utilitaires
- `.theme-blue-mint` : Active le thème principal
- `.mobile-menu` : Menu mobile overlay
- `.glass-card` : Card avec effet Glass Morphism
- `.btn-primary` : Bouton principal avec dégradé

Cette documentation reflète les améliorations apportées au thème SGC_LMS avec la nouvelle palette Bleu/Vert Menthe et les corrections de lisibilité du menu mobile.
