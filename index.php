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
            echo "Grazie per esserti iscritto con l'indirizzo email: " . $email;
        }
        ?>
        <!--/PHP-->

        <!--form-->
        <form method="GET" action="index.php">
            <input class="py-1" type="email" name="email" id="email" required>
            <button class="btn btn-primary" type="submit">iscriviti</button>
        </form>
        <!--/form-->

    </div>
    <!--/contenitore-->
</body>

</html>