<!DOCTYPE html>
<html lang="PT-Br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Filmes</title>

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  
</head>
<?php
include "config.php";

?>

<body>

  <!-- Static navbar -->
  <nav class="navbar navbar-default navbar-static-top" style="background-color: black; color: white;">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php?page=">Filme</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a style="margin-left: 900px;" href="index.php?page=form">Cadastrar</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          </ul>
          
        </div>
      </div>
    </nav>
    <div class="container">

      <font size="verdana">


    <?php
    include "config.php";
    ?>


    <?php
    error_reporting(0);
    $inicial= $_REQUEST['contato'];


    $lista = mysqli_query($con, "select * from lista where nome or id" ) or trigger_error('Erro ao executar consutla. Detalhes = ' . mysqli_error());

   if (mysqli_num_rows($lista)==0) {
    echo "<h3 align='center'>";
    
    echo "Sem Filmes Cadastrados.";
    error_reporting(0);
    echo "</h3>";
   }else{
error_reporting(0);
    ?>
    <table class="table table-striped table-hover" align='center' style="width:800px;">
      <tr>
        <td>Código</td>
        <td>Nome do Filme</td>
        <td>Duração</td>
        <td>Ano</td>
        <td align='center'>Ações</td>
      </tr>
      <?php 
      while ($dados = mysqli_fetch_array($lista)) {
        ?>

        <tr>
          <td><?php echo $dados['id']; ?></td>
          <td><?php echo $dados['nome']; ?></td>
          <td><?php echo $dados['duracao']; ?></td>
          <td><?php echo $dados['ano']; ?></td>
            <td align='center'>
              <div class="btn-group btn-group-sm" role="group" aria-label="Ações para os Contatos!">
                <a href="dao/del.php?contato=<?php echo $dados['id']; ?>" type="button" class="btn btn-default btn-danger" aria-label="Excluir Contato">
                Excluir</a>
              </div>
            </td>
          </tr>
          <?php
        }
        ?>
      </table>
      <?php
    }
    ?>

      <?php 
      $page='';
      if( empty($_REQUEST['page'])){  
        ?>
        
        <?php }else{
          $pagina = $_REQUEST['page'];
          include ($pagina.'.php');
        }
        ?>

      </div>

      <?php
      mysqli_close($con);

      ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>
