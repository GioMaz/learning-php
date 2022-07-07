<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <?php
            // ---------- //
            // ISTRUZIONI //
            // ---------- //

            $name= "Vittorio"; // string
            $age = 14; // int
            $balance = 79.35; // float 
            $nomi = array("Mario", "Matteo", "Marco", "Giuda"); // array
            $nomi_e_eta = array("Mario" => 13, "Matteo" => 15, "Marco" => 18, "Giuda" => 69); // array associativo

            // if switch
            // for foreach while
            if ($age < 18)
                echo "Troppo giovane";
            elseif ($age > 100)
                echo "Troppo vecchio";
            else
                echo "Ok";
            echo "<br>";

            switch ($age) {
                case 18:
                    echo "Age is 18";
                    break;
                case 19:
                    echo "Age is 19";
                    break;
                case 20:
                    echo "Age is 20";
                    break;
                default:
                    echo "Age is $age";
                    break;
            }
            echo "<br>";

            for ($i = 0; $i < 20; $i++) {
                echo $i;
            }
            echo "<br>";

            foreach ($nomi as $nome) {
                echo "$nome ";
            }
            echo "<br>";

            foreach ($nomi_e_eta as $nome => $eta) {
                echo "$nome is $eta<br>";
            }

            $j = 20;
            while ($j > 0) {
                echo $j;
                $j--;
            }
            echo "<br>";
        ?>
    </body>
</html>
