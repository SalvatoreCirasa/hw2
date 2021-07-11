<?php

use Illuminate\Routing\Controller as BaseController;

class LoginController extends BaseController
{

public function login(){
    //verifica dell'utente già loggato
    if(session('user_id') != null){
    return redirect('home');
    }
    else{
    //stampa errore in caso di inserimento sbagliato
    $old_username = Request::old('username');

    return view('accedi')
    ->with('csrf_token',csrf_token())
    ->with('old_username' , $old_username);
    }
 }


public function checkLogin(){
    //Verifica esistenza utente
    $user = User::where('username',request('username'))->first(); //prende il primo elemento restituito dalla query nella tabella Users utilizzando una query ORM
    $passw = request('password');
    
    if(isset($user->password)){
        $pas = $user->password;
        $check = password_verify($passw,$pas);
    if($check){
        //credenziali valide
        Session::put('user_id', $user->id); //salva l'id dell'utente in una sessione
        return redirect('home'); //reinderizza alla home
    }
    else{
        return redirect('accedi')->withInput();
    }
    }
    else{
        return redirect('accedi')->withInput(); //reinderizza alla pagina di login con l'input già inserito
    }
}


public function Logout(){
    //Eliminiamo i dati di sessione e reindirizziamo su accedi
    Session::flush();
    return redirect('accedi');
   }
}

?>
