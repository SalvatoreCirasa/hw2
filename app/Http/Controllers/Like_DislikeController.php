<?php

use Illuminate\Routing\Controller as BaseController;

class Like_DislikeController extends BaseController
{

    public function Add_like($p1){
        $user = User::find(session('user_id'));

        Like::create([
        'ID_utente' => $user->id,
        'ID_drone' => $p1,
        'like_drone' => 'si'
         ]);

        $nlikes = Like_Totali::where('ID_drone',$p1)->value('likes');
        return $nlikes;    
    }

    public function Add_dislike($p1){
        $user = User::find(session('user_id'));

        Dislike::create([
        'ID_utente' => $user->id,
        'ID_drone' => $p1,
        'dislike_drone' => 'si'
         ]);
         
         $ndislikes = Dislike_Totali::where('ID_drone',$p1)->value('dislikes');
         return $ndislikes; 
        
    }

    public function Remove_like($p1){
        $user = User::find(session('user_id'));
        $query = Like::where('ID_drone',$p1)->where('ID_utente',$user->id);
        $query->delete();

        $nlikes = Like_Totali::where('ID_drone',$p1)->value('likes');
        return $nlikes; 
    }

    public function Remove_dislike($p1){
        $user = User::find(session('user_id'));
        $query = Dislike::where('ID_drone',$p1)->where('ID_utente',$user->id);
        $query->delete();

        $ndislikes = Dislike_Totali::where('ID_drone',$p1)->value('dislikes');
         return $ndislikes; 
    }

    public function Load_Like(){
        $array = [];
        $user = User::find(session('user_id'));
        $droni_user_like = Like::where('ID_utente',$user->id)->get();
        $i = 0;
    
        foreach ($droni_user_like as $likes) {
            $likes = Like_Totali::where('ID_drone',$likes->ID_drone)->get();
        
        foreach ($likes as $elemento){
            $array[$i]['id_box']= $elemento->ID_drone;
            $array[$i]['num_likes']= $elemento->likes;
            $i++;
        }
        }
        return json_encode($array);
    }


    public function Load_Dislike(){
        $array = [];
        $user = User::find(session('user_id'));
        $droni_user_dislike = Dislike::where('ID_utente',$user->id)->get();
        $i = 0;
    
        foreach ($droni_user_dislike as $dislikes) {
            $dislikes = Dislike_Totali::where('ID_drone',$dislikes->ID_drone)->get();
        
        foreach ($dislikes as $elemento){
            $array[$i]['id_box']= $elemento->ID_drone;
            $array[$i]['num_dislikes']= $elemento->dislikes;
            $i++;
        }
        }
        return json_encode($array);
    }

}
?>