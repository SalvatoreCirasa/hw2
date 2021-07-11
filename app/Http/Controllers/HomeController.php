<?php

use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
   public function LoadHome(){
       //verifica dell'utente già loggato
    if(session('user_id') == null){
        return redirect('accedi');
    }
    $user = User::find(session('user_id')); //recupera l'id utente presente nella sessione
    //Leggiamo le collections dell'utente
    $likes = $user->Likes->toArray();
    $dislikes = $user->Dislikes->toArray();
    $preferiti = $user->Preferiti->toArray();
    return view('home')
    ->with('username',$user->username); //passa alla home l'username dell'utente con un dato id.
   }

    public function CaricaPresentazione(){
    $presentazione = Presentazione::all();
    return $presentazione;
    
   }

   public function CaricaDroni(){
    $droni = Dettagli_Drone::all();
    return $droni;
    
   }


}



?>