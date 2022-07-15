<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Inserir Médico</title>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div clas="span10 offset1">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center"> Mônica Torres </h3>
                    <h3 class="text-center"> Inserir Médico </h3>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="contato_medico.php" method="post">
                        <label>Nome:</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome de usúario" required="true"><br>
                        <label>CRM:</label>
                        <input type="text" class="form-control" name="crm" id="crm" placeholder="CRM" maxlength="8" required="true"><br>
                        <label>Data de nascimento:</label>
                        <input type="date" class="form-control" name="data_nasc" id="data_nasc" onblur="data()" placeholder="DD/MM/AAAA" required="true"><br>

                        <div class="form-actions">
                            <br />
                            <button type="submit" class="btn btn-lg btn-primary">Adicionar</button>
                            <a href="../../index_medico.php" type="btn" class="btn btn-lg btn-dark">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        function data() {
            var str = document.getElementById('data_nasc').value;
            var data = new Date(str.split('-'));
            var nova = new Date();
            if (data > nova) {
                alert("Data inválida");
                document.getElementById('data_nasc').value = '';
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
<?php include("../../footer.php"); ?>

</html>