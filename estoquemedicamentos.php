<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/estoquemedicamentos.css">
    <link rel="stylesheet" href="styles/menu.css">
    <title>BioLife</title>
</head>

<body>
    <?php 
        include_once 'header.php';
    ?>
    <main>
        <h1>medicamentos</h1>
        <div class="pesquisa">
            <input type="search" name="list" id="list" placeholder="Pesquisar medicamento:">
        </div>
        <a href="adcionarmedicamento.php">Adcionar medicamento</a>
        <div class="conteudo">
            <div class="medicamento">
                <div class="caixas">
                    <img src="img/cruz.png" alt="">
                </div>
                <div class="caixas">
                    <h6>NOME</h6>
                    <span>benzetacil</span>
                </div>
                <div class="caixas">
                    <h6>DATA DE FABRICAÇÃO</h6>
                    <span>28/03/2024</span>
                </div>
                <div class="caixas">
                    <h6>VALIDADE</h6>
                    <span>24 MESES <br> 28/03/2026</span>
                </div>
                <div class="caixas">
                    <h6>QUANTIDADE EM ESTOQUE</h6>
                    <span>50 UNIDADES</span>
                </div>
            </div>
            <div class="opcoes">
                <span class="material-symbols-outlined" onclick="mostraropcoes(this)">more_vert</span>
                <div class="opcoesmesmo">
                    <a href="Editarmedicamento.php">Editar</a>
                    <a href="adcionarmedicamento.php">Adcionar quantidade</a>
                    <a href="removermedicamento.php">remover</a>
                </div>
            </div>
        </div>
        <div class="hr">
            <hr>
        </div>
        <div class="conteudo">
            <div class="medicamento">
                <div class="caixas">
                    <img src="img/cruz.png" alt="">
                </div>
                <div class="caixas">
                    <h6>NOME</h6>
                    <span>benzetacil</span>
                </div>
                <div class="caixas">
                    <h6>DATA DE FABRICAÇÃO</h6>
                    <span>28/03/2024</span>
                </div>
                <div class="caixas">
                    <h6>VALIDADE</h6>
                    <span>24 MESES <br> 28/03/2026</span>
                </div>
                <div class="caixas">
                    <h6>QUANTIDADE EM ESTOQUE</h6>
                    <span>50 UNIDADES</span>
                </div>
            </div>
            <div class="opcoes">
                <span class="material-symbols-outlined" onclick="mostraropcoes(this)">more_vert</span>
                <div class="opcoesmesmo">
                    <a href="Editarmedicamento.php">Editar</a>
                    <a href="adcionarmedicamento.php">Adcionar</a>
                    <a href="removermedicamento.php">remover</a>
                </div>
            </div>
        </div>
        <div class="hr">
            <hr>
        </div>
        <div class="conteudo">
            <div class="medicamento">
                <div class="caixas">
                    <img src="img/cruz.png" alt="">
                </div>
                <div class="caixas">
                    <h6>NOME</h6>
                    <span>benzetacil</span>
                </div>
                <div class="caixas">
                    <h6>DATA DE FABRICAÇÃO</h6>
                    <span>28/03/2024</span>
                </div>
                <div class="caixas">
                    <h6>VALIDADE</h6>
                    <span>24 MESES <br> 28/03/2026</span>
                </div>
                <div class="caixas">
                    <h6>QUANTIDADE EM ESTOQUE</h6>
                    <span>50 UNIDADES</span>
                </div>
            </div>
            <div class="opcoes">
                <span class="material-symbols-outlined" onclick="mostraropcoes(this)">more_vert</span>
                <div class="opcoesmesmo">
                    <a href="Editarmedicamento.php">Editar</a>
                    <a href="adcionarmedicamento.php">Adcionar</a>
                    <a href="removermedicamento.php">remover</a>
                </div>
            </div>
        </div>
        <div class="hr">
            <hr>
        </div>
        <div class="conteudo">
            <div class="medicamento">
                <div class="caixas">
                    <img src="img/cruz.png" alt="">
                </div>
                <div class="caixas">
                    <h6>NOME</h6>
                    <span>benzetacil</span>
                </div>
                <div class="caixas">
                    <h6>DATA DE FABRICAÇÃO</h6>
                    <span>28/03/2024</span>
                </div>
                <div class="caixas">
                    <h6>VALIDADE</h6>
                    <span>24 MESES <br> 28/03/2026</span>
                </div>
                <div class="caixas">
                    <h6>QUANTIDADE EM ESTOQUE</h6>
                    <span>50 UNIDADES</span>
                </div>
            </div>
            <div class="opcoes">
                <span class="material-symbols-outlined" onclick="mostraropcoes(this)">more_vert</span>
                <div class="opcoesmesmo">
                    <a href="Editarmedicamento.php">Editar</a>
                    <a href="adcionarmedicamento.php">Adcionar</a>
                    <a href="removermedicamento.php">remover</a>
                </div>
            </div>
        </div>
        <div class="hr">
            <hr>
        </div>
        <!-- Repetir o bloco .conteudo conforme necessário -->
    </main>

    <script src="mobile-navbar.js"></script>
    <script src="opcoesdeadm.js"></script>
</body>

</html>