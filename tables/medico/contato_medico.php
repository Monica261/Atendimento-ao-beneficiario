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
    $data_nasc = $_POST["data_nasc"];
    $crm = $_POST["crm"];

    $sql = "INSERT INTO medico (nome, crm, data_nasc )
            VALUES ('$nome', '$crm', '$data_nasc')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    echo "<script>alert('Médico criado com sucesso!');
            window.location.replace('../../index_medico.php');
         </script>";

    $conn->close();
