<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Inserir Local</title>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM medico";
    $result = $conn->query($sql);

    $sql2 = "SELECT * FROM procedimento";
    $result2 = $conn->query($sql2);

    $sql3 = "SELECT * FROM especialidade";
    $result3 = $conn->query($sql3);
    ?>

    <div class="container mt-5 mb-5">
        <div clas="span10 offset1">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center"> Mônica Torres </h3>
                    <h3 class="text-center"> Inserir Local </h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="contato_local.php" method="post">

                        <label>Médico:</label>
                        <select name="medico" class="form-control" required="true">
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <option value="<?php echo "" . $row["nome"] . ""; ?>"><?php echo $row["nome"];
                                                                                    } ?></option>
                        </select><br>

                        <label>Especialidade:</label>
                        <select name="especialidade" class="form-control" required="true">
                            <?php while ($row = $result3->fetch_assoc()) { ?>
                                <option value="<?php echo "" . $row["Especialidade"] . ""; ?>"><?php echo $row["Especialidade"];
                                                                                            } ?></option>
                        </select><br>

                        <label>Procedimento:</label>
                        <select name="procedimento" class="form-control" required="true">
                            <?php while ($row = $result2->fetch_assoc()) { ?>
                                <option value="<?php echo "" . $row["desc_proc"] . ""; ?>"><?php echo $row["desc_proc"];
                                                                                        } ?></option>
                        </select><br>

                        <label>Local:</label>
                        <input type="text" class="form-control" name="local" id="local" placeholder="Local" required="true"><br>
                        <label>Data da consulta:</label>
                        <input type="date" class="form-control" name="data" id="data" placeholder="DD/MM/AAAA" required="true"><br>

                        <div class="form-actions">
                            <br />
                            <button type="submit" class="btn btn-lg btn-primary">Adicionar</button>
                            <a href="../../index_local.php" type="btn" class="btn btn-lg btn-dark">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
<?php include("../../footer.php"); ?>

</html>