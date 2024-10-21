<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="date"], input[type="tel"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .message {
            text-align: center;
            margin: 20px 0;
            color: #333;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Cadastro de Alunos</h1>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Captura os dados do formulário
        $nome_aluno = $_POST['nome_aluno'] ?? '';
        $data_nascimento_aluno = $_POST['data_nascimento_aluno'] ?? '';
        $cep = $_POST['cep'] ?? '';
        $endereco = $_POST['endereco'] ?? '';
        $bairro = $_POST['bairro'] ?? '';
        $cidade = $_POST['cidade'] ?? '';
        $estado = $_POST['estado'] ?? '';
        $telefone = $_POST['telefone'] ?? '';

        // Valida campos obrigatórios
        if (empty($nome_aluno) || empty($cep)) {
            echo "<div class='message error'>Por favor, preencha todos os campos obrigatórios.</div>";
            exit(); // Interrompe a execução se faltar algum campo obrigatório
        } else {
            echo "<div class='message'>Cadastro realizado com sucesso para: $nome_aluno.</div>";
        }

        // Dados de conexão com o MySQL
        $server_sql = 'localhost'; // Ajuste se necessário
        $dbname_sql = 'escola'; // Nome do banco de dados
        $user_sql = 'root'; // Usuário padrão do MySQL no XAMPP
        $password_sql = ''; // Senha padrão (deixe vazia)

        try {
            // Conectar ao MySQL com PDO
            $conn_sql = new PDO("mysql:host=$server_sql;dbname=$dbname_sql;charset=utf8", $user_sql, $password_sql);
            $conn_sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Preparar a query de inserção
            $stmt_sql = $conn_sql->prepare("
                INSERT INTO alunos (
                    nome, data_nascimento, endereco, numero, cep, telefone,
                    cidade, estado, nome_mae, data_nascimento_mae, profissao_mae, 
                    telefone_trabalho_mae, celular_mae, nome_pai, data_nascimento_pai, 
                    profissao_pai, telefone_trabalho_pai, celular_pai, 
                    responsavel_financeiro, cpf, rg, celular_responsavel, 
                    data_previsao_pagamento, alergia, alergia_medicamento, 
                    problema_saude, problema_saude_especificar, 
                    problema_saude_atual, problema_saude_atual_especificar, 
                    acompanhamento_psicologico, acompanhamento_psicologico_especificar, 
                    medicamento_antitermico, medicamento_antitermico_especificar, 
                    informacoes_adicionais, nome_resp1, fone_resp1, 
                    nome_resp2, fone_resp2, assinatura, data_assinatura
                ) VALUES (
                    :nome, :data_nascimento, :endereco, :numero, :cep, :telefone,
                    :cidade, :estado, :nome_mae, :data_nascimento_mae, :profissao_mae, 
                    :telefone_trabalho_mae, :celular_mae, :nome_pai, :data_nascimento_pai, 
                    :profissao_pai, :telefone_trabalho_pai, :celular_pai, 
                    :responsavel_financeiro, :cpf, :rg, :celular_responsavel, 
                    :data_previsao_pagamento, :alergia, :alergia_medicamento, 
                    :problema_saude, :problema_saude_especificar, 
                    :problema_saude_atual, :problema_saude_atual_especificar, 
                    :acompanhamento_psicologico, :acompanhamento_psicologico_especificar, 
                    :medicamento_antitermico, :medicamento_antitermico_especificar, 
                    :informacoes_adicionais, :nome_resp1, :fone_resp1, 
                    :nome_resp2, :fone_resp2, :assinatura, :data_assinatura
                )
            ");

            // Executar a query com os dados enviados pelo formulário
            $stmt_sql->execute([
                ':nome' => $nome_aluno,
                ':data_nascimento' => $data_nascimento_aluno,
                ':endereco' => $endereco,
                ':numero' => $_POST['numero'],
                ':cep' => $cep,
                ':telefone' => $telefone,
                ':cidade' => $cidade,
                ':estado' => $estado,
                ':nome_mae' => $_POST['nome_mae'],
                ':data_nascimento_mae' => $_POST['data_nascimento_mae'],
                ':profissao_mae' => $_POST['profissao_mae'],
                ':telefone_trabalho_mae' => $_POST['telefone_trabalho_mae'],
                ':celular_mae' => $_POST['celular_mae'],
                ':nome_pai' => $_POST['nome_pai'],
                ':data_nascimento_pai' => $_POST['data_nascimento_pai'],
                ':profissao_pai' => $_POST['profissao_pai'],
                ':telefone_trabalho_pai' => $_POST['telefone_trabalho_pai'],
                ':celular_pai' => $_POST['celular_pai'],
                ':responsavel_financeiro' => $_POST['responsavel_financeiro'],
                ':cpf' => $_POST['cpf'],
                ':rg' => $_POST['rg'],
                ':celular_responsavel' => $_POST['celular_responsavel'],
                ':data_previsao_pagamento' => $_POST['data_previsao_pagamento'],
                ':alergia' => $_POST['alergia'],
                ':alergia_medicamento' => $_POST['alergia_medicamento'],
                ':problema_saude' => $_POST['problema_saude'] ?? null,
                ':problema_saude_especificar' => $_POST['problema_saude_especificar'] ?? null,
                ':problema_saude_atual' => $_POST['problema_saude_atual'] ?? null,
                ':problema_saude_atual_especificar' => $_POST['problema_saude_atual_especificar'] ?? null,
                ':acompanhamento_psicologico' => $_POST['acompanhamento_psicologico'] ?? null,
                ':acompanhamento_psicologico_especificar' => $_POST['acompanhamento_psicologico_especificar'] ?? null,
                ':medicamento_antitermico' => $_POST['medicamento_antitermico'] ?? null,
                ':medicamento_antitermico_especificar' => $_POST['medicamento_antitermico_especificar'] ?? null,
                ':informacoes_adicionais' => $_POST['informacoes_adicionais'],
                ':nome_resp1' => $_POST['nome_resp1'],
                ':fone_resp1' => $_POST['fone_resp1'],
                ':nome_resp2' => $_POST['nome_resp2'],
                ':fone_resp2' => $_POST['fone_resp2'],
                ':assinatura' => $_POST['assinatura'],
                ':data_assinatura' => $_POST['data_assinatura']
            ]);

            echo "<div class='message'>Dados inseridos com sucesso no banco de dados.</div>";
        } catch (PDOException $e) {
            echo "<div class='message error'>Erro ao inserir dados: " . $e->getMessage() . "</div>";
        }
    } else {
        echo "<div class='message error'>Método inválido.</div>";
    }
    ?>

</div>
</body>
</html>