<?php include_once "config.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatables </title>
    <link rel="stylesheet" href="./css/jquery.dataTables.min.css">
</head>
<body>

    <h1>DataTables com dados</h1>    
    <hr>
    <?php echo "<a href='formCadastro.php'>Novo Cadastro</a>"; ?>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>DDD</th>
                <th>Telelfone</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $consulta = $conexao->query("SELECT * FROM contato");
                while($row = $consulta->fetch()){ ?>
            
                <?php echo "<a href='formEditar?id=$row[id]' > " ?>
                    <tr>
                        <td> <?php echo $row['nome']?> </td>
                        <td> <?php echo $row['email']?> </td>
                        <td> <?php echo $row['DDD']?> </td>
                        <td> <?php echo $row['telefone']?> </td>
                    </tr>
                <?php echo "</a>" ?>
                
                <?php } ?>
        </tbody>
    </table>

    
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#example').DataTable({
                "oLanguage": {
                    "sLengthMenu": "Mostrar _MENU_ registros por páginas",
                    "sZeroRecords": "Nenhum registro encontrado",
                    "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "sInfoEmpty": "Motrando 0 a 0 de registros",
                    "sInfoFiltered": "(filtrado de _MAX_ registros)",
                    "sSearch": "Pesquisar",
                    // "sProcessing": "Processando",
                    "oPaginate" : {
                        "sFirst": "Início",
                        "sPrevious": "Ant",
                        "sNext": "Próx",
                        "sLast": "Últ"
                    }
                }
            }
        );
    });
    </script>
</body>
</html>