<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
    </head>
    <body>
        <!----
         CRUD
        ----->

        <!--
            GET = campi dell'URL
            action = pagina php da eseguire una volta avvenuto il submit
        -->
        <form action="crud.php" method="get">
            <input type="text" name="query" placeholder="Get">
            <input type="submit">
        </form>
        <?=$_GET["query"]?>

        <!--
            POST = campi della richiesta HTTP
            action = pagina php da eseguire una volta avvenuto il submit
        -->
        <form action="crud.php" method="post">
            <input type="text" name="data" placeholder="Post">
            <input type="submit">
        </form>
        <?=$_POST["data"]?>
    </body>
</html>
