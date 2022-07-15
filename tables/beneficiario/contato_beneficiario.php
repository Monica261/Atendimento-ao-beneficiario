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
$sexo = $_POST["sexo"];

$sql = "INSERT INTO beneficiario (nome, data_nasc, sexo)
            VALUES ('$nome', '$data_nasc', '$sexo')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<script>alert('Beneficiário criado com sucesso!');
            window.location.replace('../../index_beneficiario.php');
         </script>";

$conn->close();
