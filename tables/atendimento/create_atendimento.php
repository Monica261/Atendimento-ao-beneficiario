<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Adicionar Atendimento</title>
</head>

<body>
    <div class="container mt-5 mb-5">
        <div clas="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center"> Mônica Torres </h3>
                        <h2 class="text-center"> Insira o Atendimento </h2>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="contato_atendimento.php" method="post">
                            <label>Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome de usúario" required="true"><br>
                            <label>Endereço:</label>
                            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="endereco" required="true"><br>
                            <label>Telefone:</label>
                            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone: (XX) XXXXX-XXXX" maxlength="15"><br>
                            <label>Email:</label>
                            <input type="email" class="form-control" name="email" id="email"><br>
                            <label>Sexo:</label>
                            <select name="sexo" class="form-control" required="true">
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                            </select>

                            <div class="form-actions">
                                <br />
                                <button type="submit" class="btn btn-lg btn-primary">Adicionar</button>
                                <a href="../../index_atendimento.php" type="btn" class="btn btn-lg btn-dark">Voltar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        function mascara(o, f) {
            v_obj = o
            v_fun = f
            setTimeout("execmascara()", 1)
        }

        function execmascara() {
            v_obj.value = v_fun(v_obj.value)
        }

        function mtel(v) {
            v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }

        function id(el) {
            return document.getElementById(el);
        }
        window.onload = function() {
            id('telefone').onkeypress = function() {
                mascara(this, mtel);
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