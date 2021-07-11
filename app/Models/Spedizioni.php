<?php
use Illuminate\Database\Eloquent\Model;

class Spedizioni extends Model {
   protected $table = "spedizioni";
   protected $primaryKey = "Codice_spedizione";
   protected $fillable = ['id_mittente','nome_dest','cognome_dest','Città_dest','Drone_Spedizione','data_spedizione'];
   public $timestamps = false;


   public function User(){
      return $this->belongsTo('User','ID_utente');
   }
}

?>