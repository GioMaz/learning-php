<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <?php
            // ----- //
            // ARRAY //
            // ----- //

            $nomi = array("Mario", "Matteo", "Marco", "Giuda"); // array
            $nomi_e_eta = array("Mario" => 13, "Matteo" => 15, "Marco" => 18, "Giuda" => 69); // array associativo

            print_r($nomi_e_eta); // print per debug
            echo "<br>";
            echo count($nomi);
            echo "<br>";

            if (in_array("Mario", $nomi))
                echo "Mario c'è";
            else
                echo "Mario non c'è";
            echo "<br>";

            shuffle($nomi); // ordine randomico
            array_reverse($nomi); // cambia ordine
            array_merge($nomi, ["Giulio", "Pippo"]); // merge tra 2 array
            array_slice($nomi, 0, 2); // subarray
            array_keys($nomi_e_eta);
            array_values($nomi_e_eta);
        ?>
    </body>
</html>
