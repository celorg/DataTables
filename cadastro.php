<?php
    include_once "config.php";
    
    try{
        $nome = filter_var($_POST['nome']);
        $email = filter_var($_POST['email']);
        $ddd = filter_var($_POST['ddd'], FILTER_SANITIZE_NUMBER_INT);
        $telefone = filter_var($_POST['telefone'], FILTER_SANITIZE_NUMBER_INT);

        $insert = $conexao->prepare("INSERT INTO contato(nome,email,DDD,telefone) VALUES(:nome,:email,:ddd,:telefone)");
        $insert->bindParam(':nome',$nome);
        $insert->bindParam(':email',$email);
        $insert->bindParam(':ddd',$ddd);
        $insert->bindParam(':telefone',$telefone);
        $insert->execute();

        header('location: index.php');

    }catch(PDOException $e){
        echo 'Erro: ' . $e->getMessage();
    }
    
?>