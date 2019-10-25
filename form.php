<div class="row"> 
  <form class="form-horizontal" name="agenda" action="dao/cad.php" method="post" >
    <div class="form-group">
      <label>Nome do Filme:</label>
      <input type="text" class="form-control" name="nome" required placeholder="Ex.: As Aventuras...">
    </div>
    <div class="form-group">
      <label>Duração:</label>
      <input type="text" class="form-control" name="duracao" placeholder="Ex.: 01:10:10" required>
    </div>
    <div class="form-group">
      <label>Ano:</label>
      <input type="tel" class="form-control" data-mask="00/00/0000" name="ano" placeholder="Ex.: 00/00/0000">
    </div>
                      
  <button type="submit" class="btn btn-sucess">Cadastrar</button>

</form>
</div>