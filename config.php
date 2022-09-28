<?php

    try {
        $conexao = new PDO("mysql:host=localhost;port=3306;dbname=datatables_pdo","root","");
        $conexao->setAttribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION);
        $conexao->exec("SET NAMES UTF8");

    }catch(PDOException $e){
        echo "Falha ao conectar ao o banco de dados:" . $e->getMessage(); 
    }
?>