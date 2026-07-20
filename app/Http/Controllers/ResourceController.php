<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index() {
        $resources = [
            ['id' => 1, 'title' => 'Premier projet', 'description' => "Projet Laravel"],
            ['id' => 2, 'title' => 'Deuxième projet', 'description' => "Projet React JS"]
        ];

        return view(
            'resources.index',
            compact('resources'));
    }

    public function show($id) {
        $resources = [
            ['id' => 1, 'title' => 'Premier projet', 'description' => 'Projet Laravel'],
            ['id' => 2, 'title' => 'Deuxième projet', 'description' => 'Projet React JS'],
        ];

        // Cherche la ressource correspondant à l'id
        $resource = collect($resources)->firstWhere('id', (int) $id);

        if (!$resource) {
            abort(404);
        }
        return view(
            'resources.show', compact('resource'));
    }
}
