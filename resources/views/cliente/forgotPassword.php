<?php
    if (isset($_POST["forgotPass"])){
        $connection = pg_conn
            new psql("localhost", "root", "", "usersSystem");

        $email = $connection->$_POST["email"];

        $data = $connection->pg_query("SELECT id FROM clientes WHERE email='$email'");


        if ($data0->num_rows > 0){

        } else {
            echo "Verificar se o e-mail digitado está correto.";
        }
    }
?>

<html>
    <body>
    <form action="forgotPassword.php" method="post">
        <input type="text" name="email" id="" placeholder="Email"><br>
        <input type="button" name="forgotPass" value="Solicitar senha" />
    </form>
    </body>
</html>

/**
 * Created by PhpStorm.
 * User: ipox
 * Date: 02/07/2017
 * Time: 23:13
 */