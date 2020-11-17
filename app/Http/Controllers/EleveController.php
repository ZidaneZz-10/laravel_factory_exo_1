<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index(){
        $eleves=Eleve::all();
        return view('eleves',compact('eleves'));
    }
    public function destroy($id){
        $eleve=Eleve::find($id);
        $eleve->delete();
        return redirect()->back();
    }
    public function edit($id){
        $eleve = Eleve::find($id);
        return view('edit/edit-eleve', compact('eleve'));
    }
    public function update(Request $request,$id){
        $eleve=Eleve::find($id);
        $eleve->nom=$request->nom;
        $eleve->prenom=$request->prenom;
        $eleve->age=$request->age;
        $eleve->etat=$request->etat;
        $eleve->save();
        return redirect('/eleves');
    }
}
