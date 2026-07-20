# Médiathèque — Migration Laravel

Application web de gestion de ressources, migrée vers Laravel dans le cadre d'un brief pédagogique DWWM.

---

## Prérequis

- PHP >= 8.1
- Composer
- Laravel 10.x
- Un serveur local type [Laragon](https://laragon.org/) ou équivalent

---

## Installation

```bash
# 1. Cloner le dépôt
git clone https://github.com/<ton-username>/<ton-repo>.git
cd <ton-repo>

# 2. Installer les dépendances
composer install

# 3. Copier le fichier d'environnement
cp .env.example .env

# 4. Générer la clé d'application
php artisan key:generate
```

---

## Configuration `.env`

Ouvrir le fichier `.env` et vérifier les valeurs suivantes :

```env
APP_NAME=Mediatheque
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000
```

> Aucune base de données n'est utilisée dans cette version — les données sont en dur dans le contrôleur.

---

## Lancement

```bash
php artisan serve
```

L'application est accessible sur : [http://localhost:8000](http://localhost:8000)

---

## Routes disponibles

| Méthode | URL | Description |
|--------|-----|-------------|
| GET | `/resources` | Liste de toutes les ressources |
| GET | `/resource/{id}` | Détail d'une ressource |

---

## Structure MVC

```
app/Http/Controllers/
└── ResourceController.php     ← Contrôleur (index + show)

resources/views/
├── layouts/
│   └── app.blade.php          ← Layout commun
└── resources/
    ├── index.blade.php        ← Vue liste
    └── show.blade.php         ← Vue détail

routes/
└── web.php                    ← Déclaration des routes
```

---

## Commandes Artisan utiles

```bash
# Lancer le serveur de développement
php artisan serve

# Lister toutes les routes enregistrées
php artisan route:list

# Générer un contrôleur
php artisan make:controller NomController

# Vider le cache de configuration
php artisan config:clear

# Vider le cache des vues
php artisan view:clear
```

---

## Notes

- Le fichier `.env` n'est pas versionné (présent dans `.gitignore`)
- Le dossier `vendor/` n'est pas versionné
- Les données sont statiques (tableau PHP en dur dans le contrôleur), sans base de données
