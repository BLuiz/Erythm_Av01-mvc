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
    <nav class="navbar navbar-dark bg-dark static-top">
            <div class="container">
                <a class="navbar-brand" href="../index.html">ERythm</a>
            </di>
        </nav>


    <div class="container p-4">
        <h2>Login de Adm</h2>
            <form action="login.php" method="post" style="height: 350px;0px" class="p-3">
                
                <?php
                    if(isset($_GET['erro'])){ echo "Login ou senha errado. Tente novamente </br>"; }
                ?>

                <div class="col d-flex justify-content-center p-4">
                    <div classs="row"> <label class="mx-3">Login</label> </div>
                    <div classs="row"> <input type="text" name="login" placeholder="Usuário"> </div>
                </div>
                <div class="col d-flex justify-content-center p-4">
                    <div classs="row"> <label class="mx-3">Senha</label></br> </div>
                    <div classs="row"> <input type="password" name="senha" placeholder="******"> </div>
                </div>
                <div class="col d-flex justify-content-center p-4">
                    <input type="submit" value="Logar"></br>
                </div>

            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </body>
</html>