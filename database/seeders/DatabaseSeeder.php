<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Resource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Resource::truncate();

       Resource::insert([
           [
               'titre'      => 'Dragon Ball Z',
               'type'       => 'manga',
               'statut'     => 'disponible',
               'emprunteur' => null,
               'created_at' => now(),
               'updated_at' => now(),
           ],
           [
               'titre'      => 'Le Seigneur des Anneaux',
               'type'       => 'livre',
               'statut'     => 'emprunté',
               'emprunteur' => 'Alice Martin',
               'created_at' => now(),
               'updated_at' => now(),
           ],
           [
               'titre'      => 'Inception',
               'type'       => 'dvd',
               'statut'     => 'disponible',
               'emprunteur' => null,
               'created_at' => now(),
               'updated_at' => now(),
           ],
           [
               'titre'      => 'Daft Punk - Random Access Memories',
               'type'       => 'cd',
               'statut'     => 'emprunté',
               'emprunteur' => 'Thomas Dupont',
               'created_at' => now(),
               'updated_at' => now(),
           ],
           [
               'titre'      => 'National Geographic - Janvier 2025',
               'type'       => 'magazine',
               'statut'     => 'disponible',
               'emprunteur' => null,
               'created_at' => now(),
               'updated_at' => now(),
           ],
       ]);
    }
}
