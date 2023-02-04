<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function acceuillir(){
        return View("Acceuil");
    }
    public function envoyerdanslabd( Request $request){

        $nom = $request->input("nom");

        $duree = $request->input("duree");

        $jour1 = $request->input("jour1");

        $jour2 = $request->input("jour2");

        $jour3 = $request->input("jour3");

        $jour4 = $request->input("jour4");

        $jour5= $request->input("jour5");

        $jour6 = $request->input("jour6");

        $jour7 = $request->input("jour7");


        DB::table('_taches')->insert([ 
           
            'nom' => $nom, 
            'duree' =>$duree, 
            'jour1' =>$jour1, 
            'jour2' =>$jour2, 
            'jour3' =>$jour3, 
            'jour4' =>$jour4, 
            'jour5' =>$jour5, 
            'jour6' =>$jour6, 
            'jour7' =>$jour7]);

        return redirect("/");

    }
    public function afficherlavueajouter(){
        return View('Ajout');
    }

    public function observerlavuedevalidation(){
        $taches = DB::table("_taches")->get();

        return View('Validation',['taches'=>$taches]);
    }
    //
}
