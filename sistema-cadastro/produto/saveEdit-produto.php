<?php
    // isset -> serve para saber se uma variável está definida
    include_once('../config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $descricao = $_POST['descricao'];
        $quantidade = $_POST['quantidade'];
        
        $sqlInsert = "UPDATE produtos 
        SET nome='$nome',valor='$valor',descricao='$descricao',quantidade='$quantidade'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema-produtos.php');

?>