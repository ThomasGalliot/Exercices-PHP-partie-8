<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>cookies</title>
    </head>
    <body>
        <?php
            //exercice3
            setcookie('login', $_POST['login']);
            setcookie('password', $_POST['password']);
            
            //exercice4
            echo "<p>" . $_COOKIE['login'] . ' ' . $_COOKIE['password'] . "</p>";
            echo "<a href='modif.php'>modifier les cookies</a>"
        ?>
    </body>
</html>
