# Médiathèque - Application Laravel

Application CRUD de gestion de ressources médiathèque développée avec Laravel.

## Stack technique

- PHP 8.3
- Laravel 11
- MySQL
- Blade (moteur de templates)

## Fonctionnalités

- Lister toutes les ressources
- Afficher le détail d'une ressource
- Ajouter une ressource
- Modifier une ressource
- Supprimer une ressource
- Validation des formulaires (FormRequest)
- Messages flash (succès, info)
- Affichage des erreurs de validation

## Installation

### Prérequis

- PHP >= 8.2
- Composer
- MySQL (XAMPP ou autre)
- Node.js (optionnel)

### Étapes

1. Cloner le projet

```bash
git clone https://github.com/ton-repo/LaravelDB.git
cd LaravelDB
```

2. Installer les dépendances

```bash
composer install
```

3. Copier le fichier d'environnement

```bash
cp .env.example .env
```

4. Configurer la base de données dans `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mediatheque_2
DB_USERNAME=root
DB_PASSWORD=
```

5. Générer la clé d'application

```bash
php artisan key:generate
```

6. Lancer les migrations et le seeder

```bash
php artisan migrate:fresh --seed
```

7. Démarrer le serveur

```bash
php artisan serve
```

L'application est accessible sur `http://127.0.0.1:8000`.

## Structure du projet

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── HomeController.php
│   │   └── ResourceController.php
│   └── Requests/
│       ├── StoreResourceRequest.php
│       └── UpdateResourceRequest.php
├── Models/
│   └── Resource.php
database/
├── factories/
│   └── ResourceFactory.php
├── migrations/
│   └── 2026_07_20_115133_create_resources_table.php
└── seeders/
    └── DatabaseSeeder.php
resources/
└── views/
    ├── layouts/
    │   └── app.blade.php
    └── resources/
        ├── index.blade.php
        ├── show.blade.php
        ├── create.blade.php
        └── edit.blade.php
routes/
└── web.php
```

## Routes

| Méthode   | URI                      | Action    | Nom                 |
|-----------|--------------------------|-----------|---------------------|
| GET       | /resources               | index     | resources.index     |
| GET       | /resources/create        | create    | resources.create    |
| POST      | /resources               | store     | resources.store     |
| GET       | /resources/{resource}    | show      | resources.show      |
| GET       | /resources/{resource}/edit | edit    | resources.edit      |
| PUT/PATCH | /resources/{resource}    | update    | resources.update    |
| DELETE    | /resources/{resource}    | destroy   | resources.destroy   |

## Modèle Resource

| Colonne    | Type    | Description              |
|------------|---------|--------------------------|
| id         | integer | Clé primaire             |
| titre      | string  | Titre de la ressource    |
| type       | string  | Type (livre, dvd, cd...) |
| statut     | string  | disponible / emprunté    |
| emprunteur | string  | Nom de l'emprunteur      |
| created_at | datetime| Date de création         |
| updated_at | datetime| Date de modification     |

## Validation

Les règles de validation sont définies dans les FormRequest :

- `titre` : obligatoire, unique, max 255 caractères
- `type` : obligatoire
- `statut` : obligatoire
- `emprunteur` : optionnel

## Auteur

Semih Sisman - Apprenti développeur DWWM  
Conseil Départemental du Loir-et-Cher (CD41)  
La Fabrique Numérique 41 - Blois
