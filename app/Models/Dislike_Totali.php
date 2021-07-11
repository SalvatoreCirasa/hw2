<?php
use Illuminate\Database\Eloquent\Model;

class Dislike_Totali extends Model {
   protected $table = "dislikes_totali";
   protected $primaryKey= "ID_drone";
   protected $autoIncrement = false;
   public $timestamps = false;

   public function Dislikes(){
      return $this->hasMany('Dislike','ID_Drone');
   }
}

?>