<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResourceRequest;
use App\Http\Requests\UpdateResourceRequest;
use App\Models\Resource;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ResourceController extends Controller
{
    public function index(): View
    {
        $resources = Resource::all();
        return view('resources.index', compact('resources'));
    }

    public function store(StoreResourceRequest $request): RedirectResponse
    {
        Resource::create($request->validated());
        return redirect()
            ->route('resources.index')
            ->with('success', 'Ajoutée');
    }

    public function show(Resource $resource): View {
        return view('resources.show', compact('resource'));
}

    public function create(): View {

        return view('resources.create');

    }

    public function update(UpdateResourceRequest $request, Resource $resource): RedirectResponse {
        $resource->update($request->all());
        return redirect()->route('resources.index')->with('info', 'La ressource a bien été mdoifiée');
    }

    public function edit(Resource $resource): View {
        return view('resources.edit', compact('resource'));
    }

    public function destroy(Resource $resource): RedirectResponse {

        $resource->delete();
        return back()->with('info','La ressource a bien été supprimée dans la base de donnée');
    }
}
