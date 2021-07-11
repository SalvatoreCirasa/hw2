<?php
use Illuminate\Database\Eloquent\Model;

class Preferiti extends Model {
   protected $table = "preferiti";
   protected $primaryKey= "Codice_operazione";
   public $timestamps = false;
   protected $fillable = ['id','id_box','img','title'];

   public function User(){
      return $this->belongsTo('User','ID_utente');
   }
}

?>