<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Trabalho - Galvão</title>
</head>
<style>
    .container {
        border: 2px solid #ccc;
        padding: 10px;
        margin-top: 5%;
    }
    h3 {
        padding: 10px;
    }
    td {
        text-align: center;
    }
    th {
        text-align: center;
    }

</style>
<body>

    <div class="container">
    <h3 class="text-center">Trabalho -- Galvão -- POO</h3>

    <table class='table table-hover'>
        <thead>
            <tr>
                <th scope='col'> ID </th>
                <th scope='col'> Nome </th>
            </tr>
        </thead>
    
        <?php
            require '../src/PosAlfa2019/Pessoa.php';
            $pessoa = new Pessoa();
            $pessoa->buscaBanco();
        ?>
    </table>
   </div>
  </body>
</html>