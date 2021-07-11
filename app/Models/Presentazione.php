<?php
use Illuminate\Database\Eloquent\Model;

class Presentazione extends Model {
   protected $table = "presentazione";
   protected $primaryKey = "titolo";
   protected $autoIncrement = false;
   protected $keytype = 'string';
   public $timestamps = false;
   public $incrementing = false;
}

?>