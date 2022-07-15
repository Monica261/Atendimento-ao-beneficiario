<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];

    $sql = "INSERT INTO atendimentomedico (nome, endereco, telefone, email, sexo)
            VALUES ('$nome', '$endereco', '$telefone', '$email', '$sexo')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    echo "<script>alert('Atendimento criado com sucesso!');
            window.location.replace('../../index_atendimento.php');
         </script>";

    $conn->close();
?>