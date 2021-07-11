<?php

use Illuminate\Routing\Controller as BaseController;

class EffettuaSpedizioneController extends BaseController
{
    public function indirizzamento(){
    if(session('user_id') == null){
        return redirect('accedi');
    }
    $user = User::find(session('user_id')); //recupera l'id utente presente nella sessione
    return view('effettuaSpedizioni')->with('username',$user->username);
    }

    public function CreaSpedizione(){
        $request = request();
        $data = date("d-m-Y");
        $user = User::find(session('user_id'));
        $nome_dest = $request->nome_dest;
        $cognome_dest = $request->cognome_dest;
        $città = $request->città_dest;
        $drone = $request->drone_spedizione;
        $check_OK=0;

        if(strlen($nome_dest)>15){
            $check_OK=1;
         }

         if(strlen($nome_dest)<2){
            $check_OK=1;
         }

         if(strlen($cognome_dest)>15){
            $check_OK=1;
         }

         if(strlen($cognome_dest)<2){
            $check_OK=1;
         }

         if(strlen($città)>18){
            $check_OK=1;
         }

         if(strlen($città)<2){
            $check_OK=1;
         }

        if($check_OK==0){
        Spedizioni::create([
            'id_mittente' => $user->id,
            'nome_dest'=> $request->nome_dest,
            'cognome_dest'=> $request->cognome_dest,
            'Città_dest'=>$request->città_dest,
            'Drone_Spedizione'=>$request->drone_spedizione,
            'data_spedizione'=>$data]);
             return redirect('home')
             ->with('csrf_token',csrf_token());
        }
        else{
            return redirect('effettuaSpedizioni');
        }
    }
}
?>