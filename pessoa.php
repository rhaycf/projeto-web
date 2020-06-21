<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
</head>
<body>
    <?php
        //Pegar os dados do form
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["tel"];
        $celular = $_POST["cel"];
        $estado = $_POST["uf"];
        $cidade = $_POST["city"];
        $endereco = $_POST["endereco"];
        $numero = $_POST["num"];
        $motivo =  $_POST["motivo"];

        //Conectar ao banco
        $db = new PDO("mysql:host=localhost;dbname=adotapet;charset=utf8","root","");

        //Inserir os dados no banco
        $db->query("INSERT INTO pessoa (nome, email, telefone, celular, estado, cidade, endereco, motivo) VALUES ('$nome', '$email', '$telefone', '$celular', '$estado', '$cidade', '$endereco', '$numero', '$motivo');");

        //print "Cadastro Pessoal realizado com sucesso!"

        echo "<script>window.location='doar.html';alert('Cadastrado com Sucesso!!! Agora Siga com o CADASTRO DO PET!');</script>";

    ?>
</body>
</html>