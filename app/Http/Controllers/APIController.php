<?php

use Illuminate\Routing\Controller as BaseController;

class APIController extends BaseController
{

    public function CercaMeteo($query){
        
     $client_secret=env("METEO_APIKEY");
     $end_point = 'http://api.weatherstack.com/current';
     $curl = curl_init();
     $meteo_request = $end_point.'?access_key='.$client_secret.'&query='.$query.'&region=Sicilia' ;
     curl_setopt($curl,CURLOPT_URL, $meteo_request);
     curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
     $result = curl_exec($curl);
     curl_close($curl);
     echo $result;
       
    }

}


?>