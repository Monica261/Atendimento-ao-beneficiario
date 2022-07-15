 <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "teste";

  $id = $_GET["id"];

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // sql to delete a record
  $sql = "DELETE FROM beneficiario WHERE beneficiarioID=" . $id;

  if (mysqli_query($conn, $sql)) {
    echo "";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  echo "<script>alert('Beneficiário deletado com sucesso!');
            window.location.replace('../../index_beneficiario.php');
         </script>";

  mysqli_close($conn);
  ?>