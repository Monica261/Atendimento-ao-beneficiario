<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teste";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$medico = $_POST["medico"];
$especialidade = $_POST["especialidade"];
$procedimento = $_POST["procedimento"];
$local = $_POST["local"];
$data = $_POST["data"];

$sql = "INSERT INTO localatendimento (especialidade, medico, local, procedimento, data)
            VALUES ('$especialidade', '$medico', '$local', '$procedimento', '$data')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

echo "<script>alert('Local criado com sucesso!');
            window.location.replace('../../index_local.php');
         </script>";

$conn->close();
