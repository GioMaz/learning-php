<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <?php
            // ------------ //
            // CRITTOGRAFIA //
            // ------------ //

            // hash di base
            $password = "Password2003";
            $hash = md5(sha1($password));

            // ------------ //

            $databasePassword = "Password2003";
            // hash che si trova nel database (il database contiene solo hash)
            $databaseHash = password_hash($databasePassword, PASSWORD_DEFAULT);

            // password ricavata da una richiesta POST da parte dell'utente
            $userPassword = "Password2003";

            // controlla se i due hash corrispondono
            if (password_verify($userPassword, $databaseHash))
                echo "Hash corrispondono";
            else
                echo "Hash non corrispondono";
        ?>
    </body>
</html>
