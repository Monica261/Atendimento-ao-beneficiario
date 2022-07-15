 <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "teste";

  $id = $_GET["id"];


  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "DELETE FROM medico WHERE MedicoID=" . $id;

  if (mysqli_query($conn, $sql)) {
    echo "";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  echo "<script>alert('Médico deletado com sucesso!');
            window.location.replace('../../index_medico.php');
         </script>";

  mysqli_close($conn);
  ?>