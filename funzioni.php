<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <?php
            // -------- //
            // FUNZIONI //
            // -------- //

            function fattoriale($n, $i) {
                if ($i == 1)
                    return $n;
                else
                    return fattoriale($n * ( $i - 1 ), $i - 1);
            }
            echo fattoriale(5, 5);
        ?>
    </body>
</html>
