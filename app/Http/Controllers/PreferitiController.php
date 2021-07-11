<?php

use Illuminate\Routing\Controller as BaseController;

class PreferitiController extends BaseController
{

    public function Loadpref(){
        $user = User::find(session('user_id'));
        $preferiti = Preferiti::where('id',$user->id)->get();
        return $preferiti;
    }

    public function Addpref($p1,$p2){
    $user = User::find(session('user_id'));
    $box = Dettagli_Drone::where('titolo',$p2)->value('immagine');
    Preferiti::create([
        'id' => $user->id,
        'id_box' => $p1,
        'img'=> $box,
        'title'=> $p2]);
    }

    public function Removepref($p1){
        $user = User::find(session('user_id'));
        $query = Preferiti::where('title',$p1)->where('id',$user->id);
        $query->delete();
    }
    
}
?>
