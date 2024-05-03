<?php   
//configuração de BD     
     $dns = 'mysql:host=localhost;dbname=cadastro';
     $username = 'root';
     $password = '';

     try{
        //conexão com BD usando PDO
        $pdo = new PDO($dns, $username, $password);


        //configura para lançar exceções em caso de erros
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
//verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //obtém dados do formulário
    $nome = $POST['nome'];
    $dataDeNascimento = $_POST['dataDeNascimento'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];

    //prepara a consulta SQL
    $sql = "INSERT INTO lista (nome, dataDeNascimento, cidade, bairro)
     VALUES (:nome, :dataDeNascimento, :cidade, :bairro)";

     //prepara para declaração
     $stmt = $pdo->prepare($sql);

     //associa os parâmetros com os valores
     $stmt->bindValue('nome', $nome, PDO::PARAM_STR);
     $stmt->bindValue('dataDeNascimento', $dataDenascimento, PDO::PARAM_STR);
     $stmt->bindValue('cidade', $cidade, PDO::PARAM_STR);
     $stmt->bindValue('bairro', $bairro, PDO::PARAM_STR);

     //executa a consulta
     $stmt->execute();

     echo "Dados inseridos com sucesso!";
    }
} catch(PDOException $e) {
    //em caso de erro, exibe a mensagem de erro
    echo "Erro: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Formulário PHP PDO com tailwind CSS </title>
<link
     href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
     rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h2 class="text-2x1 font-bold mb-4"> Insira seus dados:</h2>
         <form method="POST" class="max-w-1g">
            <div class="mb-4">
                <label for="nome" class="block text-gray-700"> Nome <label>
                    <input
                    type="text"
                    id="nome"
                    name="nome"
                    required="required"
                    class="form-input mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="dataDeNascimento" class="block text-gray-700">
            Data de Nascimento:
        </label>
        <input
            type="data"
            id="dataDeNascimento"
            name="dataDeNascimento"
            required="required"
            class="form-input mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="cidade" class="block text-gray-700">
            Cidade:
        </label>
        <input
            type="text"
            id="cidade"
            name="cidade"
            required="required"
            class="form-input mt-1 block w-full">
    </div>

    <div class="mb-4">
        <label for="bairro" class="block text-gray-700">
            Bairro:
        </label>
        <input
            type="text"
            id="bairro"
            name="bairro"
            required="required"
            class="form-input mt-1 block w-full">
    </div>

            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> 
                Enviar
            </button>
</form>
</div>


</body>
</html>
