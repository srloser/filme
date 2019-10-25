  <?php
  include "../config.php";

  $sql = "DELETE FROM lista WHERE id = $_REQUEST[contato];";


  if (mysqli_query($con, $sql) === TRUE) {
    echo "<script>alert('Filme Excluído com sucesso');</script>";
    echo "<META http-equiv='refresh' content='1;URL=http://".$site."index.php?page='> ";
  } else {
    echo "DELETE ERRO" . error;
    echo "<script>alert('Erro ao Excluir Filme!');</script>";
    echo "<META http-equiv='refresh' content='1;URL=http://".$site."index.php?page='> ";

  }
  ?>