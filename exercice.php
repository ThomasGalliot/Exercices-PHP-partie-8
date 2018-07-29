<DOCTYPE htnl>
<html>
    <head>
        <meta charset="utf-8">
        <title>variable superglobal</title>
    </head>
    <body>
        <?php
            //exercice1
            echo $_SERVER['HTTP_USER_AGENT'] . "<br>";

            echo $_SERVER['REMOTE_ADDR'] . "<br>";

            echo $_SERVER['SERVER_NAME'] . "<br>";
        ?>

        <?php
            //exercice2
            session_start();

            $_SESSION['lastname'] = 'GALLIOT';
            $_SESSION['firstname'] = 'Thomas';
            $_SESSION['age'] = 20;

            echo '<a href="session.php">session</a>'
        ?>
        <!--exercice3!-->
        <form action="cookies.php" method='POST'>
            <input type="text" name="login" value="<?php if(isset($_COOKIE['login'])) echo $_COOKIE['login'];?>" required />
            <input type="text" name="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>" required />
            <input type="submit" />
        </form>
    </body>

</html>