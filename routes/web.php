<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
                                                                        /*accedi*/

Route::get('accedi','LoginController@login');
Route::post('accedi', 'LoginController@checkLogin');

                                                                        /*Registrati*/

Route::get('registrati','RegisterController@indirizzamento');
Route::post('registrati','RegisterController@CreaUtente');
Route::get("registrati/username/{q}",'RegisterController@checkUsername');
Route::get("registrati/e_mail/{q}",'RegisterController@checkEmail');

                                                                        /*Home*/

Route::get('home', 'HomeController@LoadHome');
Route::get('loadpresentazione','HomeController@CaricaPresentazione');
Route::get('loadDroni','HomeController@CaricaDroni');
                                                                        /*API*/
Route::get('Meteo/{p1}','APIController@CercaMeteo'); 

                                                                        /*Preferiti*/

Route::get('AddPreferiti/{p1}/{p2}','PreferitiController@Addpref'); 
Route::get('RemovePreferiti/{p1}','PreferitiController@Removepref'); 
Route::get('LoadPreferiti','PreferitiController@Loadpref');

                                                                        /*Like e Dislike */

Route::get('Add_like/{p1}','Like_DislikeController@Add_like'); 
Route::get('Add_dislike/{p1}','Like_DislikeController@Add_dislike'); 
Route::get('Remove_like/{p1}','Like_DislikeController@Remove_like'); 
Route::get('Remove_dislike/{p1}','Like_DislikeController@Remove_dislike'); 
Route::get('Load_likes_totali','Like_DislikeController@Load_like');
Route::get('Load_dislikes_totali','Like_DislikeController@Load_dislike');

                                                                        /*Spedizioni*/

Route::get('effettuaSpedizioni','EffettuaSpedizioneController@indirizzamento');
Route::post('effettuaSpedizioni' , 'EffettuaSpedizioneController@CreaSpedizione');
Route::get('visualizzaSpedizioni', 'VisualizzaSpedizioneController@indirizzamento');
Route::get('loadSpedizioni', 'VisualizzaSpedizioneController@CaricaSpedizione');  
Route::get('RemoveSpedizioni/{p1}' , 'VisualizzaSpedizioneController@AnnullaSpedizione');                                                                         
                                                                        
                                                                   /*Logout*/

Route::get('logout','LoginController@Logout');


?>