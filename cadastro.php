<?php
include_once("conectdb.php");

if (!isset($_POST['inomeusuario']) || !isset($_POST['iemail']) || !isset($_POST['isenha']) || !isset($_POST['irepsenha'])) { 
    header('Location: cadastro.php');
    exit;
}

$nomeusuario = $_POST['inomeusuario'];
$email = $_POST['iemail'];
$senha = $_POST['isenha'];
$repsenha = $_POST['irepsenha'];

if ($senha !== $repsenha) {
    header('Location: cadastro.php?error=senhas_diferentes');
    exit;
}

// Verifique se o nome de usuário já existe
$query = "SELECT nomeusuario FROM usuarios WHERE nomeusuario = '$nomeusuario'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    header('Location: cadastro.php?error=usuario_existente');
    exit;
}

// Insere o novo usuário com senha em texto plano (não recomendado para produção)
$query = "INSERT INTO usuarios (nomeusuario, Email, Senha) VALUES ('$nomeusuario', '$email', '$senha')";
if (mysqli_query($conn, $query)) {
    header('Location: login.php');
    exit;
} else {
    header('Location: cadastro.php?error=insercao_erro');
    exit;
}

mysqli_close($conn);
?>