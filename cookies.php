<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <?php
            // ------- //
            // COOKIES //
            // ------- //

            // I COOKIES SONO SALVATI IN UN ARRAY ASSOCIATIVO (DIZIONARIO)

            // CREATE
            // setcookie("nome", "valore", "scadenza", "path", "domain", "https true o false");
            setcookie("user_id", "589374398", strtotime("+1 year"));
            print_r($_COOKIE);
            echo "<br>";

            // READ
            echo $_COOKIE["user_id"];
            echo "<br>";

            // UPDATE
            setcookie("user_id", "888888888", strtotime("+1 year"));
            print_r($_COOKIE);
            echo "<br>";

            // DELETE
            unset($_COOKIE["user_id"]);
            print_r($_COOKIE);
            echo "<br>";
        ?>
    </body>
</html>
