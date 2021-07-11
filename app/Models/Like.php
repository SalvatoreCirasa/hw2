<?php
use Illuminate\Database\Eloquent\Model;

class Like extends Model {
   protected $table = "likes";
   protected $primaryKey= "Codice_operazione";
   public $timestamps = false;
   protected $fillable = ['ID_utente','ID_drone','like_drone'];

   public function User(){
      return $this->belongsTo('User','ID_utente');
   }

   public function Like_Totali(){
      return $this->belongsTo('Like_Totali','ID_drone');
   }
}

?>