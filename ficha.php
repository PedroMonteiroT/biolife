<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/ficha.css">
    <title>BioLife</title>
</head>

<body>
    <header>
        <a href="index.html"><img src="img/cruz.png" alt=""></a>
        <h2>FICHA DO PACIENTE</h2>
        <a href="gerecias.php">CANCELAR<span class="material-symbols-outlined">cancel</span></a>
    </header>
    <main>
        <form action="gerecias.php">
            <label for="nome">NOME</label>
            <input type="text" name="nome" id="nome">

            <div id="infos">
                <label for="cpf">CPF</label>
                <label for="nasc">DATA DE NASCIMENTO</label>
                <label for="idade">IDADE</label>
                <input type="number" name="cpf" id="cpf">
                <input type="date" name="nasc" id="nasc" placeholder="--/--/----">
                <input type="number" name="idade" id="idade" max="120">
            </div>

            <div id="infos2">
                <label for="endereco">ENDEREÇO</label>
                <label for="genero">GÊNERO</label>
                <input type="text" name="endereco" id="endereco">
                <input type="text" name="genero" id="genero">
            </div>

            <div id="infos3">
                <label for="telefone">NÚMERO DE TELEFONE</label>
                <label for="email">E-MAIL</label>
                <input type="number" name="telefone" id="telefone">
                <input type="email" name="email" id="email">
            </div>

            <div id="emergencia">
                <label for="nomecontato">CONTATO DE EMERGÊNCIA</label>
                <div id="contato">
                    <input type="text" name="nomecontato" id="nomecontato" placeholder="NOME">
                    <input type="text" name="parentesco" id="parentesco" placeholder="PARENTESCO">
                    <input type="number" name="telefonecontato" id="telefonecontato" placeholder="TELEFONE">
                </div>
            </div>

            <h4>CLASSIFICAÇÃO DE RISCO</h4>
            <section>
                <div class="niveis"><input type="radio" name="emer" id="emerg"><label for="emerg">EMERGÊNCIA</label>
                </div>
                <div class="niveis"><input type="radio" name="emer" id="urgen"><label for="urgen">URGÊNCIA</label></div>
                <div class="niveis"><input type="radio" name="emer" id="pouco"><label for="pouco">POUCO URGENTE</label>
                </div>
                <div class="niveis"><input type="radio" name="emer" id="nao"><label for="nao">NÃO URGENTE</label></div>

            </section>
            <h4>OBSERVAÇÕES SOBRE O PACIENTE</h4>
            <article>
                <aside>
                    <input type="checkbox" name="alergia" id="alergzia" onclick="sumir()" ]>
                    <label for="alergia">PACIENTE POSSUI ALERGIAS</label>
                    <textarea name="alergias" id="alergias"
                        placeholder="SUBSTÂNCIA(S) CUJO O PACIENTE POSSUI ALERGIA"></textarea>
                </aside>
                <aside>
                    <input type="checkbox" name="deficiencia" id="deficiencia">
                    <label for="deficiencia">PACIENTE POSSUI DEFICIÊNCIA</label>
                    <textarea name="deficiencias" id="deficiencias"
                        placeholder="DEFICIÊNCIA(S) QUE O PACIENTE POSSUI"></textarea>
                </aside>
            </article>


            <div id="plano">
                <h4>PLANO DE SAÚDE</h4>
                <div id="dadosplano">
                    <input type="text" name="agencia" id="agencia" placeholder="AGÊNCIA">
                    <input type="number" name="numeroplano" id="numeroplano" placeholder="NÚMERO DO PLANO">
                    <div id="juntar">
                        <input type="checkbox" name="semplano" id="semplano">
                        <label for="semplano">NÃO POSSUI</label>
                    </div>
                </div>
            </div>

            <div id="objetivo">
                <label for="objetivo">OBJETIVO DA CONSULTA</label>
                <textarea name="objetivo" id="objetivo" placeholder="CARÁTER DA CONSULTA A SER REALIZADA"></textarea>
            </div>

            <div id="medico">
                <h4>MÉDICO RESPONSÁVEL</h4>
                <div id="infomedico">
                    <input type="text" name="nomemedico" id="nomemedico" placeholder="NOME">
                    <input type="text" name="areaatendimento" id="areaatendimento" placeholder="ÁREA DE ATENDIMENTO">
                    <input type="number" name="crm" id="crm" placeholder="CRM">
                </div>
            </div>

            <hr>
            <div id="infoatendimento">
                <label for="dataatend">DATA DE ATENDIMENTO</label>
                <label for="horario">HORÁRIO</label>
                <label for="assinatura">ASSINATURA</label>
                <input type="date" name="dataatend" id="dataatend" placeholder="--/--/----">
                <input type="time" name="horario" id="horario">
                <input type="text" name="assinatura" id="assinatura">
            </div>
            <hr>
            <input type="submit" value="FINALIZAR FICHA">
        </form>
    </main>
    <script src="index.js"></script>
</body>

</html>