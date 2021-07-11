<?php

use Illuminate\Routing\Controller as BaseController;

class VisualizzaSpedizioneController extends BaseController
{
    public function indirizzamento(){
    if(session('user_id') == null){
        return redirect('accedi');
    }
    $user = User::find(session('user_id')); //recupera l'id utente presente nella sessione
    return view('visualizzaSpedizioni')->with('username',$user->username);
    }

    public function CaricaSpedizione(){
        $user = User::find(session('user_id'));
        $spedizioni = Spedizioni::where('id_mittente',$user->id)->get();
        return $spedizioni;
    }

    public function AnnullaSpedizione($p1){
        $user = User::find(session('user_id'));
        $query = Spedizioni::where('codice_spedizione',$p1);
        $query->delete();
    }
}
?>