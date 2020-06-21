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
        $foto = $_FILES["arquivo"];
        $nome = $_POST["name"];
        $raca = $_POST["raca"];
        $idade = $_POST["idade"];
        $sexo = $_POST["sexo"];
        $descricao = $_POST["descricao"];

        //Conectar ao banco
        $db = new PDO("mysql:host=localhost;dbname=adotapet;charset=utf8","root","");

        //Inserir os dados no banco
        $db->query("INSERT INTO pet (foto, nome, raca, idade, sexo, descricao) VALUES (['arquivo'],'$nome','$raca','$idade','$sexo','$descricao');");


        // $mensagem = "Cadastrado com sucesso";

        // print_r($mensagem);

        echo "<script>window.location='doar.html';alert('Cadastrado com Sucesso!!!');</script>";




    ?>


</body>
</html>