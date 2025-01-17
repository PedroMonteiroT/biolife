<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/all.css">

    <title>BioLife</title>
</head>

<body>
    <main>
        <div class="login">
            <form action="verificalogin.php" method="post">
                <h3>Login</h3>
                <div class="reto">
                    <label for="usu"><span class="material-symbols-outlined">person</span></label>
                    <input type="text" name="usuario" id="iusuario" placeholder="Usuário" minlength="6" maxlength="16"
                        required>
                </div>
                <br>
                <div class="reto">
                    <label for="senha"><span class="material-symbols-outlined">lock</span></label>
                    <input type="password" name="senha" id="isenha" placeholder="Senha" minlength="8" maxlength="16"
                        autocomplete="off" required>
                </div>
                <a href="#">Esqueci minha senha</a>
                <input type="submit" value="Login">
                <a href="cadastro.html">Não tenho cadastro</a>
            </form>
        </div>
    </main>
</body>

</html>