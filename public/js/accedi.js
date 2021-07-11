function validazione(event){
    const username = document.querySelector('#username');
    const password = document.querySelector('#password');

    let campi_ok = true;

    if(username.value.length == 0){
        campi_ok = false;
    }
   
    if(password.value.length == 0){
        campi_ok = false;
    }
    


    if(!campi_ok){
    //impediamo il submit
    event.preventDefault();
    }
}

const form = document.querySelector('form');
form.addEventListener('submit',validazione);

function controlla_campo(event){
    if(event.currentTarget.value.length ==0){
        event.currentTarget.classList.add('vuoto');
    }
    else{
        event.currentTarget.classList.remove('vuoto');
    }
}

const input_username = document.querySelector('input[type="text"]');
input_username.addEventListener('blur',controlla_campo);


const input_password = document.querySelector('input[type="password"]');
input_password.addEventListener('blur',controlla_campo);

