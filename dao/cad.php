<?php
include "../config.php";

$sql = "INSERT INTO lista(
nome,
duracao,
ano
)
VALUES (
'".$_POST["nome"]."',
'".$_POST["duracao"]."',
'".$_POST['ano']."'
)";

$query = mysqli_query($con, $sql);

if ($query == true) {
  echo "<script>alert('Filme Cadastrado!');</script>";
  echo "<META http-equiv='refresh' content='1;URL=http://".$site."index.php?page='> ";


}
else {
  echo "Não foi possivel inserir o registro - entre em contato com o webmaster <br><br>".mysqli_error();
}
?>