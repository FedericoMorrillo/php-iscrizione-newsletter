<?php
function validazione()
{
    //verifica se esiste un parametro email inviato con il get, se true l' assegna a una variabile
    if (isset($_GET["email"])) {
        $email = $_GET["email"];

        //validazione
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && strpos($email, ".") !== false && strpos($email, "@") !== false) {
            mostraMessaggioSuccesso($email);
        } else {
            mostraMessaggioErrore();
        }
    }
}

function mostraMessaggioSuccesso($email)
{
    //stampiamo all' interno di un alert
    echo '<div class="alert alert-success" role="alert">
            Grazie per esserti iscritto alla Newsletter con l\'indirizzo email: ' . $email . '
          </div>';
}

function mostraMessaggioErrore()
{
    //stampiamo all' interno di un alert
    echo '<div class="alert alert-danger" role="alert">
            L\'indirizzo email non è valido. Assicurati di inserire un indirizzo valido.
          </div>';
}
