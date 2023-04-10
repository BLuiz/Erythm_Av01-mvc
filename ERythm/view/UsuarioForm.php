<?php
include "../controller/UsuarioController.php";
include '../Util.class.php';

Util::verify();

$usuario = new UsuarioController();

if(!empty($_POST['id'])){
    $usuario->update($_POST);
    header("location: UsuarioList.php");
}
elseif(!empty($_POST)){
    $usuario->salvar($_POST);
    header("location: UsuarioList.php");
}

if(!empty($_GET['id'])){
    $data = $usuario->buscar($_GET['id']);
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ERythm - Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="./main.php">ERythm</a>
        <!--<a class="btn btn-primary" href="./UsuarioList.php">Usuários</a>-->
        <a class="btn btn-primary" href="./DiscoList.php">Discos</a>
        <a class="btn btn-primary" href="./PedidoList.php">Pedidos</a>
        <a class="btn btn-danger" href='./login.php?sair=1'>Sair</a>             
      </div>
    </nav>

    <div class="container mt-5">
        <h1>Formulário de Cadastro</h1>
        <form action="UsuarioForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ?$data->id : "" ?>">
            
            <div class="mb-3 col-6">
                <label class="form-label" for="nome">Nome: </label></br>
                <input class="form-control" type="text" name="nome" value="<?php echo !empty($data->nome) ?$data->nome : "" ?>"/></br>
            </div>

            <div class="mb-3 col-6">
                <label class="form-label" for="cpf">CPF: </label></br>
                <input class="form-control" type="text" name="cpf" value="<?php echo !empty($data->cpf) ?$data->cpf : "" ?>"/></br>
            </div>
            
            <div class="mb-3 col-6">
                <label class="form-label" for="senha">Senha: </label></br>
                <input class="form-control" type="password" name="senha" value="<?php echo !empty($data->senha) ? $data->senha : "" ?>"/></br>
            </div>
            
        
            
            </br>

            <input class="btn btn-success" type="submit" value="Salvar"/>
            <a class="btn btn-primary" href="./UsuarioList.php">Voltar</a>

        </form>
    







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    </div>
</body>
</html>