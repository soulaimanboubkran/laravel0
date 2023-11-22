<?php

namespace App\Http\Controllers;

use App\Models\annonces;
use App\Http\Requests\StoreAnnoncesRequest;
use App\Http\Requests\UpdateAnnoncesRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AnnoncesController extends Controller
{
    public function index()
    {
        // a. Lister toutes les annonces
        $annonces = Annonces::all();
        return view('annonce.index',['Annonces'=>$annonces]);
    }

    public function create()
    {
        // b. Créer une nouvelle annonce
        return view('annonce.create');
    }

    public function store(Request $request)
    {
        try {
            // Logique pour enregistrer une nouvelle annonce
       $request->validate([
                "titre" => "nullable",
                "description" => "required",
                "type" => "required|in:Appartement,Maison,Villa,Magasin,Terrain",
                "ville" => "required",
                "superficie" => "integer",
                "neuf" => "boolean",
                "prix" => "required|numeric",
            ]);
            // Create a new annonce
          annonces::create($request->all());
    
            // Redirection vers la page index avec un message de succès
            return redirect()->route('annonces.index')->with('success', 'Annonce créée avec succès!');
        }catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()]);
        }
    }
    

    public function show(Annonces $annonce)
    {
        // d. Afficher le détail d'une annonce
        return view('annonce.show', compact('annonce'));
    }

    public function edit(Annonces $annonce)
    {
        // e. Modifier une annonce
        return view('annonce.edit', compact('annonce'));
    }

    public function update(Request $request, Annonces $annonce)
{
    try {
        // Validation using a form request (UpdateAnnoncesRequest)
        $request->validate([
            "titre" => "nullable",
            "description" => "required",
            "type" => "required|in:Appartement,Maison,Villa,Magasin,Terrain",
            "ville" => "required",
            "superficie" => "integer",
            "neuf" => "boolean",
            "prix" => "required|numeric",
        ]);

        // Update the annonce
        $annonce->update($request->all());

        // Redirection vers la page index avec un message de succès
        return redirect()->route('annonces.index')->with('success', 'Annonce modifiée avec succès!');
    } catch (ValidationException $e) {
        // Handle validation errors
        return redirect()->back()->withErrors($e->errors())->withInput();
    } catch (\Exception $e) {
        // Handle other exceptions
        return redirect()->back()->with('error', 'Une erreur est survenue lors de la modification de l\'annonce.');
    }
}


public function destroy(Annonces $annonce)
{
    try {
        // Supprimer une annonce
        $annonce->delete();

        // Redirection vers la page index avec un message de succès
        return redirect()->route('annonces.index')->with('success', 'Annonce supprimée avec succès!');
    } catch (\Exception $e) {
        // Handle other exceptions
        return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression de l\'annonce.');
    }
}
}
