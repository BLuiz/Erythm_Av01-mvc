<?php
include '../Util.class.php';


if (!empty($_POST)){
    Util::logar($_POST);
}
elseif(!empty($_GET['sair'])){
    Util::logoff();
}

?>


<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ERythm - Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    </head>
    <body>
        <div class="container my-5">
            <form action="login.php" method="post">
                
                <?php
                    if(isset($_GET['erro'])){ echo "Login ou senha errado. Tente novamente </br>"; }
                ?>

                <label>Login</label></br>
                <input type="text" name="login" placeholder="Usuário"></br></br>
                <label>Senha</label></br>
                <input type="password" name="senha" placeholder="******"></br></br>

                <input type="submit" value="Logar"></br>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>