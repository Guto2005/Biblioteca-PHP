<?php
$servername="localhost";
$username= "root";
$password="";
$dbname= "biblioteca";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar se a conexão foi estabelecida
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']=="POST"){
    $titulo = mysqli_real_escape_string( $conn, $_POST["titulo"]);
    $autor = mysqli_real_escape_string( $conn, $_POST["autor"]);
    $disponivel = isset($_POST["disponivel"])? 1 :0;
}


?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="titulo">BEM VINDO A BIBLIOTECA</h1>
    <?php
    include 'cabecalho.php';
    ?>
    <form method="POST" enctype="multipart/form-data">
        <label for="titulo">Titulo</label>
        <input type="text" id="titulo" name="titulo" required>
        <label for="autor">Autor</label>
        <input for="autor" id="autor" name="autor" required>
        <label for="disponivel">Disponivel</label>
        <input type="checkbox" id="disponivel" name="disponivel">
        <label for="imagem">Imagem do livro</label>
        <input type="file" id="imagem" name="imagem" required>
        <button type="submit">Cadastrar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>