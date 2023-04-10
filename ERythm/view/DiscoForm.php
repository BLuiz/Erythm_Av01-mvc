<?php
include "../controller/DiscoController.php";
include '../Util.class.php';

Util::verify();

$disco = new DiscoController();

if(!empty($_POST['id'])){
    $disco->update($_POST);
    header("location: DiscoList.php");
}
elseif(!empty($_POST)){
    $disco->salvar($_POST);
    header("location: DiscoList.php");
}

if(!empty($_GET['id'])){
    $data = $disco->buscar($_GET['id']);
}

?>




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ERythm - Discos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="./main.php">ERythm</a>
                <a class="btn btn-primary" href="./UsuarioList.php">Usuários</a>
                <!--<a class="btn btn-primary" href="./DiscoList.php">Discos</a>-->
                <a class="btn btn-primary" href="./PedidoList.php">Pedidos</a>
                <a class="btn btn-danger" href='./login.php?sair=1'>Sair</a>             
            </div>
        </nav>

    <div class="container mt-5">
        <h1>Cadastro de Discos</h1>
        <form action="DiscoForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ?$data->id : "" ?>">
            
            <div class="mb-3 col-6">
                <label class="form-label" for="nome">Nome: </label></br>
                <input class="form-control" type="text" name="nome" value="<?php echo !empty($data->nome) ?$data->nome : "" ?>"/></br>
            </div>

            <div class="mb-3 col-6">
                <label class="form-label" for="valor">Valor: </label></br>
                <input class="form-control" type="text" name="valor" value="<?php echo !empty($data->valor) ?$data->valor : "" ?>"/></br>
            </div>
            
            <div class="mb-3 col-6">
                <label class="form-label" for="artista">Artista: </label></br>
                <input class="form-control" type="text" name="artista" value="<?php echo !empty($data->artista) ? $data->artista : "" ?>"/></br>
            </div>

            <div class="mb-3 col-6">
                <label class="form-label" for="album">Álbum: </label></br>
                <input class="form-control" type="text" name="album" value="<?php echo !empty($data->album) ? $data->album : "" ?>"/></br>
            </div>

            <div class="mb-3 col-6">
                <label class="form-label" for="ano">Ano: </label></br>
                <input class="form-control" type="text" name="ano" value="<?php echo !empty($data->ano) ? $data->ano : "" ?>"/></br>
            </div>
            
        
            
            </br>

            <input class="btn btn-success" type="submit" value="Salvar"/>
            <a class="btn btn-primary" href="./main.php">Voltar</a>

        </form>
    







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </div>
</body>
</html>