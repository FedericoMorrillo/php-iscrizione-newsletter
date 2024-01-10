<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Iscrizione Newsletter</title>
</head>

<body>
    <!--contenitore-->
    <div class="text-center py-5">
        <h1 class="pb-3">Iscrizione Newsletter</h1>

        <!--PHP-->
        <?php
        //verifica se esiste un parametro email inviato con il get, se true l' assegna a una variabile
        if (isset($_GET["email"])) {
            $email = $_GET["email"];

            //validazione
            if (filter_var($email, FILTER_VALIDATE_EMAIL) && strpos($email, ".") !== false && strpos($email, "@") !== false) {
                //stampiano all' interno di un alert
                echo '<div class="alert alert-success" role="alert">
                        Grazie per esserti iscritto alla Newsletter con l\'indirizzo email: ' . $email . '
                      </div>';
            } else {
                //stampiamo all' interno di un alert
                echo '<div class="alert alert-danger" role="alert">
                        L\'indirizzo email non è valido. Assicurati di inserire un indirizzo valido.
                      </div>';
            }
        }
        ?>
        <!--/PHP-->

        <!--form-->
        <form method="GET" action="index.php">
            <!--potevo utilizzare un type email ma di base da l' obbligo di inserire la @ come prestabilito-->
            <input class="py-1" type="text" name="email" id="email" required>
            <button class="btn btn-primary" type="submit">iscriviti</button>
        </form>
        <!--/form-->

    </div>
    <!--/contenitore-->
</body>

</html>