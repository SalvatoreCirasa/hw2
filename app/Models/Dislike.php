<?php
use Illuminate\Database\Eloquent\Model;

class Dislike extends Model {
   protected $table = "dislikes";
   protected $primaryKey= "Codice_Operazione";
   public $timestamps = false;
   protected $fillable = ['ID_utente','ID_drone','dislike_drone'];

   public function User(){
      return $this->belongsTo('User','ID_utente');
   }

   public function Dislike_Totali(){
      return $this->belongsTo('Dislike_Totali','ID_drone');
   }
}

?>