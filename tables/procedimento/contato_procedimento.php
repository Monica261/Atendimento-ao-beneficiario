<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teste";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $desc_proc = $_POST["desc_proc"];
    $tipo_proc = $_POST["tipo_proc"];

    $sql = "INSERT INTO procedimento (desc_proc, tipo_proc)
            VALUES ('$desc_proc', '$tipo_proc')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    echo "<script>alert('Procedimento criado com sucesso!');
            window.location.replace('../../index_procedimento.php');
         </script>";

    $conn->close();
