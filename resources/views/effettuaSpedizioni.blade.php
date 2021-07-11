<html>
    <head>
        <link rel='stylesheet' href= '{{ url("css/effettuaSpedizioni.css") }}'>
        <script src = '{{ url("js/effettuaSpedizioni.js") }}' defer></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">  
        <title>Sicily Express Spedizioni</title>

    </head>

    <body>
        <nav> 
            <h2 id='utente'> Utente : {{ $username }} </h2>
            <a class='nav_a' href='{{ url ("home") }}'>Home</a>
            <a class='nav_a' href='{{ url ("visualizzaSpedizioni") }}'> Le mie spedizioni </a>
            <a class='nav_a' href='{{ url ("effettuaSpedizioni") }}'> Effettua una spedizione </a>
            <a class='nav_a' href='{{ url ("logout") }}'>esci </a>

            
                <div id="menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </nav>

       <header> 
          <div id="Overlay"></div>  
          <h1> Sicily Express</h1>
      </header>
      <h3 class='Titolo'>Spedizione</h3>
        <main>
                <section class="spedizione">
                
                <form name='spedizione' method='post'>

                @csrf

                <div class="nome_dest">
                        
                        <div><label>Nome Destinatario*<input type='text' name='nome_dest'></label> </div>
                        <span></span>
                </div>

                <div class="cognome_dest">
                        
                        <div><label>Cognome Destinatario*<input type='text' name='cognome_dest' ></label> </div>
                        <span></span>
                </div>
                
                <div class="città_dest">
                        
                        <div><label>Città destinatario*<input type='text' name='città_dest' ></label> </div>
                        <span></span>
                </div>

                <div class="drone_spedizione">
                        
                        <div><label>Drone*<select name="drone_spedizione"> 
                        <option value="DJI INSPIRE 2"> DJI INSPIRE 2 </option> 
                        <option value="DJI MAVIC PRO 2"> DJI MAVIC PRO 2 </option>
                        <option value="DJI PHANTOM 4"> DJI PHANTOM 4  </option> 
                        <option value="FreeX mcfx"> FreeX mcfx </option>
                        <option value="Parrot Anafi"> Parrot Anafi </option> 
                        <option value="U PAIR 2"> U PAIR 2 </option>
                        </select> </label> </div>
                </div>

                <div class="submit">
                        <div><input type='submit' id='submit' value='Conferma Ordine'></div>
                </div>

                </form>
                
                <div class="errore hidden">Compilare tutti i campi correttamente.</div>

            </section>
        </main>
        <footer> 
                <address>Studente: Cirasa Salvatore  <br>   Matricola: O46001676</address>
        </footer>
    </body>
</html>