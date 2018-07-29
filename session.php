<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>session</title>
    </head>
    <body>
        <?php
            //exercice2
            session_start();

            echo $_SESSION['lastname'] . " ";
            echo $_SESSION['firstname'] . " ";
            echo $_SESSION['age'] . " ans";
        ?>
    </body>
</html>