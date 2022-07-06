<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <?php
            // --------- //
            // VARIABILI //
            // --------- //

            // include "funzioni.php";
            // include_once "funzioni.php";
            // require "funzioni.php";
            // require_once "funzioni.php";

            $name= "Vittorio"; // string
            $age = 14; // int
            $balance = 79.35; // float 
            $nomi = array("Mario", "Matteo", "Marco", "Giuda"); // array
            $nomi_e_eta = array("Mario" => 13, "Matteo" => 15, "Marco" => 18, "Giuda" => 69); // array associativo

            $random = rand(0, 5);
            define("NOME_COSTANTE", "Vittorio");
            NOME_COSTANTE;
            echo "<h1>My name is $name and I'm $age</h1>";

            // usare il contenuto di una variabile come nome di un'altra variabile
            // l'output sarà: 14
            $variable_name = "age";
            $$variable_name;

            // accedere ad una variabile globale da una funzione
            // quando normalmente non vi si potrebbe accedere (grazie a global)
            function get_variable() {
                global $name;
                $name;
            }
            get_variable();
        ?>
        <p>echo con sintassi abbreviata: <?=$name?></p>
    </body>
</html>
