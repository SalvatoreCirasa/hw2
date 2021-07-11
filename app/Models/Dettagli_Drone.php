<?php
use Illuminate\Database\Eloquent\Model;

class Dettagli_Drone extends Model {
   protected $table = "drone_details";
   protected $primaryKey= "titolo";
   protected $keytype = "string";
   public $timestamps = false;
   public $incrementing = false;
}

?>