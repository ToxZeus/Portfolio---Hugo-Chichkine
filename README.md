# Portfolio - Hugo Chichkine

Ce portfolio est développé avec PHP, utilisant une architecture MVC et des technologies modernes pour une meilleure maintenabilité et performance.

## 🛠 Technologies utilisées

- PHP 7.4+
- JavaScript (ES6+)
- Bootstrap 5
- HTML5 & CSS3

## 🚀 Installation

1. Cloner le repository :
```bash
git clone https://github.com/ToxZeus/Portfolio---Hugo-Chichkine.git
cd Portfolio---Hugo-Chichkine
```

2. Installer les dépendances :
```bash
composer install
```

3. Configurer le serveur web :
   - Point d'entrée : public/index.php
   - Configuration Apache ou Nginx nécessaire

4. Lancer le serveur de développement :
```bash
php -S localhost:8000 -t public
```

## 📁 Structure du projet

```
├── app/
│   ├── controllers/
│   ├── models/
│   ├── views/
│   │   └── templates/
│   ├── Translation.php
│   ├── Router.php
│   └── bootstrap.php
├── config/
│   └── config.php
├── lang/
│   ├── fr.json
│   └── en.json
├── public/
│   ├── assets/
│   │   ├── css/
│   │   └── js/
│   └── index.php
└── composer.json
```

## 🌍 Fonctionnalités

- Architecture MVC
- Support multilingue (FR/EN)
- Design responsive
- Navigation fluide
- Composants réutilisables
- Gestion moderne des assets

## 📝 License

MIT License