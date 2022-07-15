<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $Especialidade = $_POST["Especialidade"];
    $CBOS = $_POST["CBOS"];

    $sql = "INSERT INTO especialidade (Especialidade, CBOS)
            VALUES ('$Especialidade', '$CBOS')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    echo "<script>alert('Especialidade criada com sucesso!');
            window.location.replace('../../index_especialidade.php');
         </script>";

    $conn->close();
