<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <?php 
            $_paginas = array("index.html","unidadesPage.html");
            $_codigo = $_GET["codigo"];
            echo $_paginas[$_codigo];
        ?>
    </body>
</html>