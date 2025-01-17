<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/gerencias.css">
    <link rel="stylesheet" href="styles/menu.css">
    <title>BioLife</title>
</head>


<body>
    <?php 
        include_once 'header.php';
    ?>
    <main>
        <section>
            <a href="ficha.php" class="caixa caixa1">
                <span class="material-symbols-outlined">cardiology</span>
                <p>REALIZAR FICHAMENTO DE NOVO PACIENTE</p>
                <span class="mais">+</span>
            </a>
            <a href="consulta.php" class="caixa caixa2">
                <span class="material-symbols-outlined">stethoscope</span>
                <p>ACESSAR CONSULTA DE FICHAS</p>
                <span class="mais">+</span>
            </a>
            <a href="estoquemedicamentos.php" class="caixa caixa3">
                <span class="material-symbols-outlined">pill</span>
                <p>ACESSAR ESTOQUE DE MEDICAMENTOS</p>
                <span class="mais">+</span>
            </a>
            <a href="estoqueequipamentosmedicos.php" class="caixa caixa4">
                <span class="material-symbols-outlined">syringe</span>
                <p>ACESSAR ESTOQUE DE EQUIPAMENTOS MÉDICOS</p>
                <span class="mais">+</span>
            </a>
            <a href="medicos.php" class="caixa caixa5">
                <span class="material-symbols-outlined">local_hospital</span>
                <p>MÉDICOS CADASTRADOS</p>
                <span class="mais">+</span>
            </a>
            <a href="#" class="caixa caixa6">
                <span class="material-symbols-outlined">genetics</span>
                <p>INFORMAÇÕES SOBRE O SISTEMA</p>
                <span class="mais">+</span>
            </a>
        </section>
    </main>
    <script src="mobile-navbar.js"></script>
</body>

</html>