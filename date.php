<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <?php
            // ---- //
            // DATE //
            // ---- //

            echo time();
            echo "<br>";
            echo strtotime("now");
            echo "<br>";
            echo strtotime("9/11/2001");
            echo "<br>";
            echo strtotime("11 September 2001");
            echo "<br>";
            echo strtotime("+1 day");
            echo "<br>";
            echo strtotime("+1 month 2 days 10 seconds");
            echo "<br>";
            echo strtotime("last monday");
            echo "<br>";
            echo strtotime("next saturday");
            echo "<br>";

            echo date("d/m/Y H:i:s", strtotime("now"));
            echo "<br>";
            echo date("r", strtotime("now"));
            echo "<br>";
        ?>
    </body>
</html>
