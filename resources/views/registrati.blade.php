

<html>
    <head>
    <link rel='stylesheet' href='{{ url("css/registrati.css") }}'>   
        <script src = '{{ url("js/registrati.js") }}' defer></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">  
        <title>Sicily Express Registrazione</title>

    </head>

    <body>
       <header> 
          <div id="Overlay"></div>  
          <h1> Sicily Express</h1>
      </header>
      <h3 class='Titolo'>Registrazione</h3>
        <main>
                <section class="subscribe">
                
                <form name='signup' method='post'>

                <input type='hidden' name='_token' value='{{ $csrf_token }}'>

                    <div class="names">
                    <div class="nome_utente">
                        
                        <div><label>Nome*<input type='text' name='nome_utente' ></label> </div>
                        <span></span>
                    </div>

                <div class="cognome_utente">
                        
                        <div><label>Cognome*<input type='text' name='cognome_utente' ></label> </div>
                        <span></span>
                </div>
                </div>
                <div class="username">
                        
                        <div><label>Username*<input type='text' name='username' ></label> </div>
                        <span></span>
                </div>


                <div class="password">
                        
                        <div><label>Password*<input type='password' name='password' ></label> </div>
                        <span></span>
                </div>

                <div class="e_mail">
                        
                        <div><label>E-mail*<input type='text' name='e_mail' ></label> </div>
                        <span></span>
                </div>

                <div class="città">
                        
                        <div><label>Città*<input type='text' name='città' ></label> </div>
                        <span></span>
                </div>

                <div class="provincia">
                        
                        <div><label>Provincia*<select name="provincia"> 
                        <option value="Siracusa"> Siracusa </option> 
                        <option value="Catania"> Catania </option>
                        <option value="Palermo"> Palermo </option> 
                        <option value="Messina"> Messina </option>
                        <option value="Ragusa"> Ragusa </option> 
                        <option value="Trapani"> Trapani </option>
                        <option value="Caltanissetta"> Caltanissetta </option> 
                        <option value="Agrigento"> Agrigento </option>
                        <option value="Enna"> Enna </option> 
                         </select> </label> </div>
                </div>

                <div class="recapito_telefonico">
                        <!--Se il submit non va a buon fine, il server reinderizza su questa pagina lasciando i valori inseriti precedentemente-->
                        <div><label>Recapito Telefonico*<input type='text' name='recapito_telefonico' > </label> </div>
                        <span></span>
                </div>

                <div class="acconsento">
                        <div><label>Acconsento al trattamento dei miei dati.<input type='checkbox' name='acconsento' value='1' ></label> </div>      
                </div>

                <div class="submit">
                        <div><input type='submit' id='submit' value='Registrati'></div>
                </div>

                </form>
                
                <div class="errore hidden">Compilare tutti i campi correttamente.</div>

                <div class="login">Hai un account? <a href='{{ url ("accedi") }}'>Accedi</a> </div>

            </section>
        </main>
        <footer> 
                <address>Studente: Cirasa Salvatore  <br>   Matricola: O46001676</address>
        </footer>
    </body>
</html>