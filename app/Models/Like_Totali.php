<?php
use Illuminate\Database\Eloquent\Model;

class Like_Totali extends Model {
   protected $table = "likes_totali";
   protected $primaryKey= "ID_drone";
   protected $autoIncrement = false;
   public $timestamps = false;

   public function Likes(){
      return $this->hasMany('Like','ID_Drone');
   }
}

?>