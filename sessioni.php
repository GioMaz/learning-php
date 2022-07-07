<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <?php
            // -------- //
            // SESSIONE //
            // -------- //

            // inizio sessione (UTILIZZARE session_start() SU OGNI FILE PHP
            // PER RIPRENDERE LA SESSIONE PRECEDENTE)
            session_start(); // crea un cookie con l'id della sessione
            print_r($_COOKIE);

            // variabili di una sessione
            $_SESSION["name"] = "Giovanni"; // inserisce una variabile
            unset($_SESSION["name"]); // rimuove una variabile
            session_unset(); // rimuove tutte le variabili

            // fine sessione
            session_destroy();
        ?>
    </body>
</html>
