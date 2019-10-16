<?php
include './bd/conexao.php';
$sql = "select * from atletas";
if(isset($_GET['s'])){
  $sql.= " where nome like '%".$_GET['s'] ."%' OR sobrenome like '%".$_GET['s']."%'";
}
echo $sql;
$resultado = $conexao->query($sql);
?>
<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ramon Domingos, Matheus Paulo, Bootstrap contribuitors">
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

    <title>Federação de Taekwondo</title>
    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
 
    <!-- Estilos customizados para esse template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Federação de Taekwondo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.html">Home </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="atletas.php">Atletas <span class="sr-only">(atual)</span></a>
            </li>
           
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" name='s' placeholder="Buscar Atleta" aria-label="Buscar Atleta" value='<?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?>' >
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
          <button class="btn btn-success "  data-toggle="modal" data-target="#modalAdd" >Adicionar</button>

        </div>
      </nav>
    </header>

    <main role="main">

      
    <script type="text/javascript" class="init">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<div></div> 
      <div class="container marketing">

      <h1>Nossos Atletas</h1>
      <?php
            if ($resultado->num_rows > 0) {

            ?>
      <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#Id</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data de cadastro</th>
                <th>Status</th>
                <th>UF</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($atleta = $resultado->fetch_assoc() ){
            ?>
                        <tr>

                <td><?php echo $atleta['id'] ; ?></td>
                <td><?php echo $atleta['nome'] ; ?></td>
                <td><?php echo $atleta['sobrenome'] ; ?></td>
                <td><?php echo $atleta['dataCadastro'] ; ?></td>
                <td><?php echo $atleta['ativo'] ==1 ? 'Ativo' : 'Inativo' ; ?></td>
                <td><?php echo $atleta['uf'] ; ?></td>
                </tr>
                <?php
            }
          
                ?>
           
            
      


        </tbody>
        <tfoot>
            <tr>
                <th>#Id</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data de cadastro</th>
                <th>Status</th>
                <th>UF</th>
            </tr>
        </tfoot>
    </table>
          <?php 
          } else {
            echo  "<h3>Ainda nao temos cadastros...</h3><h5>Adicione o primeiro!</h5>"; 
          } ?>


     

  

        <hr class="featurette-divider">

        <!-- /FIM DAS FEATUREZINHAS *-* -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Voltar ao topo</a></p>
        <p>&copy; Federação de Taekwondo  - UNP, 2019 &middot; <a href="atletas.php">atletas</a> &middot; </p>
      </footer>
    </main>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
    <script src="js/holder.min.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!--modal-->
<!-- Modal -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Novo Atleta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="add.php">
      <div class="modal-body">
      <div class="form-group">
    <label for="exampleInputEmail1">Seu nome</label>
    <input type="text" class="form-control" name="nome"  placeholder="Nome">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Seu sobrenome</label>
    <input type="text" class="form-control" name="sobrenome"  placeholder="Sobrenome">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Estado que o Atleta representa</label>
    <select class="form-control" name="uf">
    <option value="">Selecione ...</option>
 <option value="AC">Acre</option>
 <option value="AL">Alagoas</option>
 <option value="AP">Amapá</option>
 <option value="AM">Amazonas</option>
 <option value="BA">Bahia</option>
 <option value="CE">Ceará</option>
 <option value="DF">Distrito Federal</option>
 <option value="GO">Goiás</option>
 <option value="ES">Espírito Santo</option>
 <option value="MA">Maranhão</option>
 <option value="MT">Mato Grosso</option>
 <option value="MS">Mato Grosso do Sul</option>
 <option value="MG">Minas Gerais</option>
 <option value="PA">Pará</option>
 <option value="PB">Paraiba</option>
 <option value="PR">Paraná</option>
 <option value="PE">Pernambuco</option>
 <option value="PI">Piauí­</option>
 <option value="RJ">Rio de Janeiro</option>
 <option value="RN">Rio Grande do Norte</option>
 <option value="RS">Rio Grande do Sul</option>
 <option value="RO">Rondônia</option>
 <option value="RR">Roraima</option>
 <option value="SP">São Paulo</option>
 <option value="SC">Santa Catarina</option>
 <option value="SE">Sergipe</option>
 <option value="TO">Tocantins</option>
    </select>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar mudanças</button>
</form>
      </div>
    </div>
  </div>
</div>
  </body>

</html>
