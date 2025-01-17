<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/estoqueequipamentos.css">
    <title>BioLife</title>
</head>

<body>
    <?php 
        include_once 'header.php';
    ?>
    <main>
        <h1>equipamentos</h1>
        <div class="pesquisa">
            <input type="search" name="list" id="list" placeholder="Pesquisar equipamento:">
        </div>
        <div class="conteudo">
            <div class="equipamento">
                <div class="caixas">
                    <img src="img/cruz.png" alt="">
                </div>
                <div class="caixas">
                    <h6>NOME</h6>
                    <span>LUVA DO VASCO</span>
                </div>
                <div class="caixas">
                    <h6>QUANTIDADE EM ESTOQUE</h6>
                    <span>AMANHÃ</span>
                </div>
            </div>
            <div class="opcoes">
                <span class="material-symbols-outlined" onclick="mostraropcoes(this)">more_vert</span>
                <div class="opcoesmesmo">
                    <p>Atualizar dados do equipamento</p>
                    <p>Adcionar unidade ao estoque</p>
                    <p>Remover</p>
                </div>
            </div>
        </div>
        <div class="hr">
            <hr>
        </div>
        <div class="conteudo">
            <div class="equipamento">
                <div class="caixas">
                    <img src="img/cruz.png" alt="">
                </div>
                <div class="caixas">
                    <h6>NOME</h6>
                    <span>LUVA DO VASCO</span>
                </div>
                <div class="caixas">
                    <h6>QUANTIDADE EM ESTOQUE</h6>
                    <span>AMANHÃ</span>
                </div>
            </div>
            <div class="opcoes">
                <span class="material-symbols-outlined" onclick="mostraropcoes(this)">more_vert</span>
                <div class="opcoesmesmo">
                    <p>Atualizar dados do equipamento</p>
                    <p>Adcionar unidade ao estoque</p>
                    <p>Remover</p>
                </div>
            </div>
        </div>
        <div class="hr">
            <hr>
        </div>
        <div class="conteudo">
            <div class="equipamento">
                <div class="caixas">
                    <img src="img/cruz.png" alt="">
                </div>
                <div class="caixas">
                    <h6>NOME</h6>
                    <span>LUVA DO VASCO</span>
                </div>
                <div class="caixas">
                    <h6>QUANTIDADE EM ESTOQUE</h6>
                    <span>AMANHÃ</span>
                </div>
            </div>
            <div class="opcoes">
                <span class="material-symbols-outlined" onclick="mostraropcoes(this)">more_vert</span>
                <div class="opcoesmesmo">
                    <p>Atualizar dados do equipamento</p>
                    <p>Adcionar unidade ao estoque</p>
                    <p>Remover</p>
                </div>
            </div>
        </div>
        <div class="hr">
            <hr>
        </div>
        <div class="conteudo">
            <div class="equipamento">
                <div class="caixas">
                    <img src="img/cruz.png" alt="">
                </div>
                <div class="caixas">
                    <h6>NOME</h6>
                    <span>LUVA DO VASCO</span>
                </div>
                <div class="caixas">
                    <h6>QUANTIDADE EM ESTOQUE</h6>
                    <span>AMANHÃ</span>
                </div>
            </div>
            <div class="opcoes">
                <span class="material-symbols-outlined" onclick="mostraropcoes(this)">more_vert</span>
                <div class="opcoesmesmo">
                    <p>Atualizar dados do equipamento</p>
                    <p>Adcionar unidade ao estoque</p>
                    <p>Remover</p>
                </div>
            </div>
        </div>
        <div class="hr">
            <hr>
        </div>
    </main>
    <script src="mobile-navbar.js"></script>
    <script src="opcoesdeadm.js"></script>
</body>

</html>