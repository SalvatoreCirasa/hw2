<html>
    <head>
        <link rel='stylesheet' href='{{ url("css/accedi.css") }}'>   
        <script src = '{{ url("js/accedi.js") }}' defer></script> 

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">  
        <title>Sicily Express Accedi</title>
    </head>

    <body>
       <header> 
          <div id="Overlay"></div>  
          <h1> Sicily Express</h1>
       </header>

       <h3 class='Titolo'>Accedi</h3>
        <main class ="login">
            <section>
                <form name='login' method='post'>

                <input type='hidden' name='_token' value='{{ $csrf_token }}'> <!--Input per verificare tramite lavarel l'utente e assegnare un token-->

                <div class="username">
                        
                        <div><label>Username<input type='text' id='username' name='username' value='{{$old_username}}'></label> </div>
                        
                </div>

                <div class="password">
                        
                        <div><label>Password<input type='password' id='password' name='password' ></label> </div>
                        
                </div>

                <div class="submit">
                        <div><input type='submit' id='submit' value='Accedi'></div>
                </div>
                </form>

                @if(isset($old_username))
                <div class='error'> Credenziali non valide </div> 
                @endif

                <div class="registrati">Non hai ancora un account? <a href='{{ url ("registrati") }}'>Registrati</a> </div>
            </section>
        </main>

      <footer> 
                <address>Studente: Cirasa Salvatore  <br>   Matricola: O46001676</address>
      </footer>
    </body>
</html>