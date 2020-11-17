<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function index(){
        $datas=Batiment::all();
        return view('batiment',compact('datas'));
    }
    public function destroy($id){
        $batiment=Batiment::find($id);
        $batiment->delete();
        return redirect()->back();
    }
    public function edit($id){
        $batiment = Batiment::find($id);
        return view('edit/edit-batiment', compact('batiment'));
    }
    public function update(Request $request,$id){
        $batiment=Batiment::find($id);
        $batiment->nom=$request->nom;
        $batiment->description=$request->description;
        $batiment->save();
        return redirect('/');
    }
}
