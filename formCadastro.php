<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cadastro</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        <legend>Novo Casdastro</legend>
        <label for="nome">Nome: 
            <input type="text" name="nome" id="nome">
        </label>Email: 
        <label for="email">
            <input type="email" name="email" id="email">
        </label>
        <label for="ddd">DDD:
            <input type="number" name="ddd" id="ddd">
        </label>
        <label for="telefone">Telefone
            <input type="tel" name="telefone" id="telefone">
        </label>
        <input type="submit" value="cadastrar" id="cadastro">
        
    </form>
</body>
</html>