<?php

use Illuminate\Routing\Controller as BaseController;

class RegisterController extends BaseController
{

    public function CreaUtente(){

        $request = request();
        
        $nome = $request->nome_utente;
        $cognome = $request->cognome_utente;
        $username = $request->username;
        $password = $request -> password;
        $e_mail = $request->e_mail;
        $città = $request ->città;
        $provincia = $request->provincia;
        $telefono = $request->recapito_telefonico;
        $check_OK = 0;

         if(strlen($username)>15){
            $check_OK=1;
         }

         if(strlen($username)<5){
            $check_OK=1;
         }

         if(strlen($nome)>15){
            $check_OK=1;
         }

         if(strlen($nome)<2){
            $check_OK=1;
         }

         if(strlen($cognome)>15){
            $check_OK=1;
         }

         if(strlen($cognome)<2){
            $check_OK=1;
         }

         if(strlen($password)>15){
            $check_OK=1;
         }

         if(strlen($password)<5){
            $check_OK=1;
         }

         if(strlen($città)>12){
            $check_OK=1;
         }

         if(strlen($città)<2){
            $check_OK=1;
         }

         if(strlen($e_mail)<7){
            $check_OK=1;
         }

         if(strlen($e_mail)>30){
            $check_OK=1;
         }

         $username_exist = User::where('username',$username)->exists();
         if($username_exist){
             $check_OK=1;
         }

         $e_mail_exist = User::where('e_mail',$e_mail)->exists();
         if($e_mail_exist){
             $check_OK=1;
         }


        if($check_OK==0){
        $pass = password_hash($request['password'], PASSWORD_BCRYPT);
        User::create([
            'nome_utente' => $nome,
            'cognome_utente' => $cognome,
            'username'=> $username,
            'password'=> $pass,
            'e_mail'=>$e_mail,
            'Residenza_Città'=>$città,
            'Residenza_Provincia'=>$provincia,
            'recapito_telefonico'=>$telefono]);

            $user = User::where('username',$username)->first(); 
            Session::put('user_id', $user->id);
            return redirect('home'); 
        }
        else{
            return redirect('registrati');
        }
    }

    public function checkUsername($query){
        $exist = User::where('username',$query)->exists();
        return ['exists'=> $exist];
    }

    public function checkEmail($query){
        $exist = User::where('e_mail',$query)->exists();
        return ['exists'=>$exist];
    }

    public function indirizzamento(){
        if(session('user_id') != null){
            return redirect('home');
        }
        return view('registrati')
        ->with('csrf_token',csrf_token());
    }
}


?>
