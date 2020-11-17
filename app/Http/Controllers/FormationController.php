<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){
        $formations=Formation::all();
        return view('formations',compact('formations'));
    }
    public function destroy($id){
        $formation=Formation::find($id);
        $formation->delete();
        return redirect()->back();
    }
    public function edit($id){
        $formation = Formation::find($id);
        return view('edit/edit-formation', compact('formation'));
    }
    public function update(Request $request,$id){
        $formation=Formation::find($id);
        $formation->nom=$request->nom;
        $formation->description=$request->description;
        $formation->save();
        return redirect('/formations');
    }
}
