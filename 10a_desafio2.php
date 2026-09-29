<!-- Digite sua solução para o desafio (AQUI) -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>

    <form method="post" action="">
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" required><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" step="0.01" required><br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];

  
        if ($nome == '') {
            echo "<p style='color: red;'>Erro: O nome do produto não pode estar vazio.</p>";
        }

        elseif (!is_numeric($preco) || $preco <= 0) {
            echo "<p style='color: red;'>Erro: O preço deve ser um número positivo.</p>";
        }
        else {

        // criei um banco de dados com o seguinte comando no mysql
        //create database exerciciophp;
        //use exerciciophp;
        //create table produtos (
    //id int auto_increment primary key,
    //nome varchar(100) not null,
    //preco decimal(10, 2) not null
    //);
            $servername = "localhost";
            $username = "root";
            $password = "Senai@118";
            $dbname = "exerciciophp";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            }

        
            $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";

            if ($conn->query($sql) === TRUE) {
                echo "<p style='color: green;'>Produto cadastrado com sucesso!</p>";
            } else {
                echo "<p style='color: red;'>Erro ao cadastrar: " . $conn->error . "</p>";
            }

           
            $conn->close();
        }
    }
    ?>

</body>
</html>
