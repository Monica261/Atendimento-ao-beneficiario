<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Atendimento</title>
</head>

<body>
    <section class="home-aten">
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <h2>Atendimento</h2>
                </div>
            </div>
            </br>
            <div class="row">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">email</th>
                            <th scope="col">sexo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'banco.php';
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM atendimentomedico ORDER BY id ASC';
                        date_default_timezone_set('UTC');

                        foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<th scope="row">' . $row['id'] . '</th>';
                            echo '<td>' . $row['nome'] . '</td>';
                            echo '<td>' . $row['endereco'] . '</td>';
                            echo '<td>' . $row['telefone'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td>' . $row['sexo'] . '</td>';
                            echo '<td width=10>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="tables/atendimento/delete_atendimento.php?id=' . $row['id'] . '">Excluir</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        Banco::desconectar();
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="row mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        <a href="index.php" class="btn btn-lg btn-primary">Início</a>
                        <a href="tables/atendimento/create_atendimento.php" class="btn btn-lg btn-dark">Adicionar</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>