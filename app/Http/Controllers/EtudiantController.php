<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    
    
    public function create()
    {
        $matiere = ['Laravel','Linux','Oracle'];
        $semestre = ['Sem_1','Sem_2'];
        return view('ajouter')->with('matiere',$matiere)->with('semestre',$semestre);
    }
    public function store(Request $request)//creation d'un objet de type Request (injection de dependance)
    {   
        $input = $request->all();
        Etudiant::create($input);
        return redirect('etudiant')->with('flash_message','Etudiant créé');
    }
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('classe', ['etudiants' => $etudiants]);
        
    }
    public function show($id){

        $etudiant = Etudiant::find($id);
        return view('etudiant.show', compact('etudiant'));
    }

    
}

