<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="logoUni.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Formulário de Cadastro</h1>
        <form action="processa_cadastro.php" method="POST">
            <h2>Dados do Aluno</h2>
            <label for="nome_aluno">Nome do Aluno:</label>
            <input type="text" id="nome_aluno" name="nome_aluno" required>
            
            <label for="data_nascimento_aluno">Data de Nascimento:</label>
            <input type="date" id="data_nascimento_aluno" name="data_nascimento_aluno" required>
            
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>
            
            <label for="numero">Número:</label>
            <input type="number" id="numero" name="numero" required>
            
            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" required onblur="buscarEndereco()">
            
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>
            
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required>
            
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" required>

            <h2>Dados dos Pais</h2>
            <label for="nome_mae">Nome da Mãe:</label>
            <input type="text" id="nome_mae" name="nome_mae" required>
            
            <label for="data_nascimento_mae">Data de Nascimento:</label>
            <input type="date" id="data_nascimento_mae" name="data_nascimento_mae">
            
            <label for="profissao_mae">Profissão:</label>
            <input type="text" id="profissao_mae" name="profissao_mae">
            
            <label for="telefone_trabalho_mae">Telefone do Trabalho:</label>
            <input type="text" id="telefone_trabalho_mae" name="telefone_trabalho_mae">
            
            <label for="celular_mae">Celular:</label>
            <input type="text" id="celular_mae" name="celular_mae">
            
            <label for="nome_pai">Nome do Pai:</label>
            <input type="text" id="nome_pai" name="nome_pai">
            
            <label for="data_nascimento_pai">Data de Nascimento:</label>
            <input type="date" id="data_nascimento_pai" name="data_nascimento_pai">
            
            <label for="profissao_pai">Profissão:</label>
            <input type="text" id="profissao_pai" name="profissao_pai">
            
            <label for="telefone_trabalho_pai">Telefone do Trabalho:</label>
            <input type="text" id="telefone_trabalho_pai" name="telefone_trabalho_pai">
            
            <label for="celular_pai">Celular:</label>
            <input type="text" id="celular_pai" name="celular_pai">

            <h2>Dados do Responsável Financeiro</h2>
            <label for="responsavel_financeiro">Responsável Financeiro:</label>
            <input type="text" id="responsavel_financeiro" name="responsavel_financeiro" required>
            
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>
            
            <label for="rg">RG:</label>
            <input type="text" id="rg" name="rg" required>
            
            <label for="celular_responsavel">Celular:</label>
            <input type="text" id="celular_responsavel" name="celular_responsavel" required>
            
            <label for="data_previsao_pagamento">Data de Previsão para Pagamento:</label>
            <input type="date" id="data_previsao_pagamento" name="data_previsao_pagamento" required>

            <h2>Dados Clínicos</h2>
            <div class="question">
                <label for="alergia">A criança possui alguma alergia? Se sim, especificar:</label>
                <input type="text" id="alergia" name="alergia">
            </div>
            <div class="question">
                <label for="alergia_medicamento">A criança possui alergia a algum medicamento? Se sim, especificar:</label>
                <input type="text" id="alergia_medicamento" name="alergia_medicamento">
            </div>
            <div class="question">
                <label>Já teve algum problema de saúde que requer cuidados especiais?</label>
                <label><input type="radio" name="problema_saude" value="sim"> Sim </label>
                <label><input type="radio" name="problema_saude" value="nao"> Não </label>
                <br>
                <label for="problema_saude_especificar">Se sim, qual e com que idade:</label>
                <input type="text" id="problema_saude_especificar" name="problema_saude_especificar">
            </div>
            <div class="question">
                <label>Atualmente a criança tem algum problema de saúde?</label>
                <label><input type="radio" name="problema_saude_atual" value="sim"> Sim </label>
                <label><input type="radio" name="problema_saude_atual" value="nao"> Não </label>
                <br>
                <label for="problema_saude_atual_especificar">Se sim, especificar:</label>
                <input type="text" id="problema_saude_atual_especificar" name="problema_saude_atual_especificar">
            </div>
            <div class="question">
                <label>Faz acompanhamento psicológico?</label>
                <label><input type="radio" name="acompanhamento_psicologico" value="sim"> Sim </label>
                <label><input type="radio" name="acompanhamento_psicologico" value="nao"> Não </label>
                <br>
                <label for="acompanhamento_psicologico_especificar">Se sim, especificar:</label>
                <input type="text" id="acompanhamento_psicologico_especificar" name="acompanhamento_psicologico_especificar">
            </div>
            <div class="question">
                <label>Em caso de febre alta, está autorizado dar medicamento antitérmico?</label>
                <label><input type="radio" name="medicamento_antitermico" value="sim"> Sim </label>
                <label><input type="radio" name="medicamento_antitermico" value="nao"> Não </label>
                <br>
                <label for="medicamento_antitermico_especificar">Se sim, especificar o medicamento e a dosagem:</label>
                <input type="text" id="medicamento_antitermico_especificar" name="medicamento_antitermico_especificar">
            </div>
            <div class="question">
                <label for="informacoes_adicionais">Informações adicionais sobre a criança:</label>
                <textarea id="informacoes_adicionais" name="informacoes_adicionais" rows="4"></textarea>
            </div>

            <h3>Dados do Responsável</h3>
            <p>Indique 02 (dois) portadores maior de idade responsável por buscar a criança:</p>
            <label for="nome_resp1">Nome:</label>
            <input type="text" id="nome_resp1" name="nome_resp1">
            <label for="fone_resp1">Fone:</label>
            <input type="text" id="fone_resp1" name="fone_resp1">
    
            <label for="nome_resp2">Nome:</label>
            <input type="text" id="nome_resp2" name="nome_resp2">
            <label for="fone_resp2">Fone:</label>
            <input type="text" id="fone_resp2" name="fone_resp2">
    
            <label for="assinatura">Assinatura do Responsável:</label>
            <input type="text" id="assinatura" name="assinatura" placeholder="Assine aqui">
    
            <label for="data_assinatura">Data de Assinatura:</label>
            <input type="date" id="data_assinatura" name="data_assinatura">
    
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
