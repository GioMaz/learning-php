<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <?php
            // ---- //
            // JSON //
            // ---- //

            $json = "{\"nome\": \"Giovanni Maria\", \"cognome\": \"Zanchetta\"}";
            $array = json_decode($json, true);
            print_r($array);

            echo "<br>";

            $array1 = array("nome" => "Giovanni Maria", "cognome" => "Zanchetta");
            $json1 = json_encode($array1);
            echo $json1;
        ?>
    </body>
</html>
