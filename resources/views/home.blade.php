    <html>   
    
    <head>         
        <title>Sicily express</title>                                                                              
        <link rel='stylesheet' href= '{{ url("css/home.css") }}'> 
        <script src = '{{ url("js/home.js") }}' defer></script> 
        <meta name="viewport" content = "width=device-width, initial-scale = 1">  
        <meta charset = "utf-8">  
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;500&display=swap" rel="stylesheet">                                 
    </head>                                                                                     
                                       
    <body>
        
            <nav> 
            <h2 id='utente'> BENVENUTO {{ $username }} !</h2> <!--l'elemento tra parentesi graffe è una variabile passata da web.php-->
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
                <h1> Sicily Express </h1>
            </header>

            <section id='presentazione'> 
                       
                        <!--Presentazione implementata tramite JS-->

                        <div id='div_meteo'>

                                <div class=info_meteo>
                                    <h1 class='title_info_meteo'>Sfrutta i nostri servizi!</h1>
                                    <p class='paragrafo_info_meteo'>Con la spedizione tramite drone le condizioni climatiche sono importanti! <br> Scopri subito le condizioni meteo della tua provincia prima di effettuare una spedizione!</p>
                                </div>

                                <form id='form2'>
                                    Selezionare una provincia :
                                    <select name='provincia' id='provincia'>
                                        <option value="Siracusa">Siracusa</option>
                                        <option value="Catania">Catania</option>
                                        <option value="Messina">Messina</option>
                                        <option value="Palermo">Palermo</option>
                                        <option value="Trapani">Trapani</option>
                                        <option value="Ragusa">Ragusa</option>
                                        <option value="Caltanissetta">Caltanissetta</option>
                                        <option value="Agrigento">Agrigento</option>
                                        <option value="Enna">Enna</option>
                                    </select>

                                    <input type='submit' id='submit1' value='Cerca'>
                                </form>
                                <section id='visualizza_meteo'>
                                    <!--implementata dinamicamente-->
                                </section>

                        </div>
            </section>

            <section id = "question-name">
                <h1 class = 'titolo'>scopri subito tutti i nostri Droni !</h1>
            </section>
            
            <section class= "preferiti hidden">
                <h1>PREFERITI</h1>
               <!--implementato dinamicamente-->
            </section>

            <section id = "ricerca">
                <h1>TUTTI I DRONI:</h1>
                <p> ricerca</p>
                <input id="cerca" type='text'>
            </section>

            <section id="griglia">
                <!--implementata dinamicamente-->
            </section>

            <main id='main_val'>
            <h1 class='titolo_valutazione'>Valutazione degli utenti</h1>
            <section id='valutazioni'>
                <!--Implementato dinamicamente-->
            </section>
            </main>

            <section id="free-gift">
                <h1>Super Promozione</h1>
                <p class='description'>Ogni 5 spedizioni utilizzando i nostri servizi <br> riceverai un libro a tua scelta in regalo!</p>
                <p class='guida-utente'>cerca subito il tuo libro e scopri se è presente nei nostri magazzini!</p>
                <form id='form1'>
                    inserisci il titolo di un libro
                    <input type='text' id='libro'>
                    <input type='submit' id='submit' value='Cerca'>
                </form>

                <section id='library-view'>
                    <!--implementato dinamicamente-->
                </section>
            </section>
            
            <footer> 
                <address>Studente: Cirasa Salvatore  <br>   Matricola: O46001676</address>
            </footer>

    </body>
</html>