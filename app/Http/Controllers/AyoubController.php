<?php

namespace App\Http\Controllers;

use App\Models\Premier_teble;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AyoubController extends Controller
{
    public function tablebase(){
        return Premier_teble::select('id')->get();
    }
   /* public function stor(){
        Premier_teble::create([
            'nome'=>'ayoub ben cheikhi ',
            'piece'=>'200',
            'photo'=>'bcndçzi.png',

        ]);
    }*/
    public function creat(){
        return view('data_base.creat');
    }
    public function stor(Request $request){
        //return $request;
        //validation  pour l'insertion  danns le base de donnes
       $rules = $this->getRules();
        $messages=$this->getMessages();
        $validator=Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        //apres la validation inserer les donnee
        Premier_teble::create([
            'nome'=>$request -> nome,
            'piece'=>$request -> piece,
            'photo'=>$request -> photo,

        ]);
        return redirect()->back()->with(['secestion'=>'Envoyez secsuflly']);
    }
    protected function getMessages(){
        return  $messages = ['nome.required'=>'Obligatoire d\'entrez le nome de offer !',
                             'nome.unique'=>'Cett nome est deja existe',
                             'piece.required'=>'Obligatoire d\'entrez le nomber des offers !',
                             'photo.required'=>'Obligatoire d\'entrez la photo de offer '];
    }
    protected function getRules(){
      return  $rules = ['nome'=>'required|max:100|unique:offers,nome',
                        'piece'=>'required|max:100|numeric',
                        'photo'=>'required'];
    }
}
