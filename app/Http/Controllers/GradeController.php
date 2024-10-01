<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Http\Requests\StoreGradeRequest;
use App\Http\Requests\UpdateGradeRequest;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{
  // Affiche la liste des grades
  public function index()
  {
      $fonctions = Grade::all();
      return view('grade.index', compact('fonctions'));
      
  }

  // Affiche le formulaire pour créer un grade
  public function create()
  {
      return view('grade.create');
  }

  // Enregistre un nouveau grade dans la base de données
  public function store(Request $request)
  {
      // Validation des données
     dd('kqsj');
  // Affiche un grade spécifique
  }
  public function show(Grade $grade)
  {
      return view('grade.show', compact('grade'));
  }

  // Affiche le formulaire pour éditer un grade
  public function edit(Grade $grade)
  {
      return view('grade.edit', compact('grade'));
  }

  // Met à jour un grade dans la base de données
  public function update(Request $request, Grade $grade)
  {
      // Validation des données
      $request->validate([
          'type' => 'required|string|max:255',
          'fonction' => 'required|string|max:255',
          'description' => 'nullable|string',
          'user_id' => 'required|exists:users,id',
      ]);

      // Mise à jour du grade
      $grade->update($request->all());

      // Redirection après succès
      return redirect()->route('grade1.index')->with('success', 'Grade mis à jour avec succès');
  }

  // Supprime un grade de la base de données
  public function destroy(Grade $grade)
  {
      $grade->delete();

      // Redirection après suppression
      return redirect()->route('grade.index')->with('success', 'Grade supprimé avec succès');
  }
}
