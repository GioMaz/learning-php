<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <?php
            // -------- //
            // STRINGHE //
            // -------- //

            $name= "Vittorio"; // string
            $age = 14; // int
            $balance = 79.35; // float 
            $nomi = array("Mario", "Matteo", "Marco", "Giuda"); // array
            $nomi_e_eta = array("Mario" => 13, "Matteo" => 15, "Marco" => 18, "Giuda" => 69); // array associativo

            $format = "My name is %s, I'm %d, and I'm worth %f dollars<br>";
            echo sprintf($format, $name, $age, $balance);
            printf($format, $name, $age, $balance);

            echo strlen($name); // 8
            echo "<br>";

            echo substr($name, 0, 2); // Vi
            echo "<br>";

            echo strpos($name, "Vittorio"); // 0
            echo "<br>";

            echo strrev($name); // oirottiV
            echo "<br>";

            echo str_replace("torio", "angelo", $name); // Vitangelo
            echo "<br>";

            $array = explode("/", "11/9/2001"); // array(11, 9, 2001)
            echo "<br>";

            echo strtoupper("Ciao mi chiamo " . $name); // CIAO MI CHIAMO VITTORIO
            echo "<br>";

            echo ucfirst("Ciao mi chiamo " . $name); // Ciao mi chiamo Vittorio
            echo "<br>";

            echo ucwords("Ciao mi chiamo " . $name); // Ciao Mi Chiamo Vittorio
            echo "<br>";

            echo trim("       " . $name . "       "); // Vittorio
            echo "<br>";

            // /^              inizio
            // [a-zA-Z0-9_-]   sono permessi caratteri da a a z, da A a Z, da 0 a 9, underscore (_) e meno (-)
            // {0,16}          la stringa deve essere lunga da 0 a 16
            // $/              fine
            $pattern = "/^[a-zA-Z0-9_-]{0,16}$/";
            $string = "Ciao192";
            if (preg_match($pattern, $string)) 
                echo "Stringa corretta";
            else
                echo "Stringa non corretta";
            echo "<br>";

            // get match values
            $pattern = "/^192.168.1.(\d*)$/";
            $string = "192.168.1.97";
            preg_match($pattern, $string, $result);
            echo $result[1];
            echo "<br>";

            // ----------- //
            // VALIDAZIONE //
            // ----------- //
            $email = "giovmaz2003@gmail.com";
            if (filter_var($email, FILTER_VALIDATE_EMAIL))
                echo "Questa email è valida";
            else 
                echo "Questa email non è valida";
            echo "<br>";

            $address = "192.168.1.69";
            if (filter_var($email, FILTER_VALIDATE_IP))
                echo "Questo indirizzo è valido";
            else 
                echo "Questo indirizzo nono è valido";
            echo "<br>";

            // -------------- //
            // SANITIZZAZIONE //
            // -------------- //
            $email = "(giovmaz2003@gmail.com)";
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            echo $email;
        ?>
    </body>
</html>
