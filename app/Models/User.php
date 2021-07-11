<?php
use Illuminate\Database\Eloquent\Model;

class User extends Model {
   public $timestamps = false;
   protected $hidden = ['password']; //specifico che il campo password nel caso di una stampa debba essere nascosto.
   protected $fillable = ['nome_utente','cognome_utente','username','password','e_mail','Residenza_Città','Residenza_Provincia','recapito_telefonico'];

   public function Likes(){
      return $this->hasMany('Like','ID_utente');
   }
   public function Dislikes(){
      return $this->hasMany('Dislike','ID_utente');
   }
   public function Preferiti(){
      return $this->hasMany('Preferiti','id');
   }

   public function Spedizioni(){
      return $this->hasMany('Spedizioni','id_mittente');
   }
}

?>