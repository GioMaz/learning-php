<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <?php
            // ---------- //
            // FILESYSTEM //
            // ---------- //

            $file = "/Users/giovanni/file.txt";

            if (file_exists($file))
                echo "File exists";
            else
                echo "File does not exist";
            echo "<br>";

            echo filesize($file);
            echo "<br>";

            echo file_get_contents($file);
            echo "<br>";

            file_put_contents($file, "testo");

            copy($file, $file . ".old");

            unlink($file . ".old");
        ?>
    </body>
</html>
