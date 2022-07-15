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

  $sql = "DELETE FROM procedimento WHERE ProcedimentoID =" . $id;

  if (mysqli_query($conn, $sql)) {
    echo "";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }

  echo "<script>alert('Procedimento excluído com sucesso!');
            window.location.replace('../../index_procedimento.php');
         </script>";

  mysqli_close($conn);
  ?>