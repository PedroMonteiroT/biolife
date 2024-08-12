<?php
include_once("conectdb.php");

session_start();

if (!isset($_POST['usuario']) || !isset($_POST['senha'])) {
    header('Location: login.php');
    exit;
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Verifique se o usuário existe e se a senha corresponde (não recomendado para produção)
$query = "SELECT * FROM usuarios WHERE nomeusuario = '$usuario' AND Senha = '$senha'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if ($row) {
    // Senha correta
    $_SESSION["id_usuario"] = $row['Id'];
    $_SESSION["nome_usuario"] = $row['nomeusuario'];
    header('Location: gerecias.php');
    exit;
} else {
    echo '<script type="text/javascript">
            alert("Usuário ou Senha incorretos!");
            history.back();
          </script>';
}

mysqli_close($conn);
?>