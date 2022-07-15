<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Especialidade</title>
</head>

<body>
    <section class="home-espe">
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <h2>Especialidades</h2>
                </div>
            </div>
            </br>
            <div class="row">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Especialidade</th>
                            <th scope="col">CBOS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'banco.php';
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM especialidade ORDER BY EspecialidadeID ASC';
                        date_default_timezone_set('UTC');

                        foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<th scope="row">' . $row['EspecialidadeID'] . '</th>';
                            echo '<td>' . $row['Especialidade'] . '</td>';
                            echo '<td>' . $row['CBOS'] . '</td>';
                            echo '<td width=10>';
                            echo ' ';
                            echo '<a class="btn btn-danger" href="tables/especialidade/delete_especialidade.php?id=' . $row['EspecialidadeID'] . '">Excluir</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        Banco::desconectar();
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p>
                        <a href="index.php" class="btn btn-lg btn-primary">Início</a>
                        <a href="tables/especialidade/create_especialidade.php" class="btn btn-lg btn-dark">Adicionar</a>
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