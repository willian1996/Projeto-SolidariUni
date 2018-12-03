<?php
session_start();

if(isset($_SESSION['idusuario'])){
    require_once 'menu-logado.php';
}
else{
    require_once 'menu.php';
}
//testando erro de envio de campanhas
if(isset($_GET['ErrorCampanha'])&& $_GET['ErrorCampanha']=='false'){?>
        <div id="sucessoCampanha">
          <script type="text/javascript">
            new Noty({
            type: 'success',
            layout: 'topCenter',
            theme: 'sunset',
            text: 'Sua campanha foi adicionada e já está disponivel para apreciação de nossos colaboradores. Boa Sorte!!!!!!'
            }).show(); 
          
          </script>         
        </div>
<?php } 

if (isset($_GET['ErrorCampanha'])&& $_GET['ErrorCampanha']=='true'){?>
        <div id="erroCampanha">
           <script type="text/javascript">
              new Noty({
            type: 'error',
            layout: 'topCenter',
            theme: 'sunset',
            text: 'Ocorreu um erro no seu envio, tente novamente!!!'
            }).show(); 
        
         </script>            
        </div>
<?php } 

//testando erro de envio de campanhas
if(isset($_GET['ErrorExcluir'])&& $_GET['ErrorExcluir']=='false'){?>
        <div id="sucessoExcluir">
          <script type="text/javascript">
            new Noty({
            type: 'success',
            layout: 'topCenter',
            theme: 'sunset',
            text: 'Sua campanha foi excluída!!!'
            }).show(); 
          
          </script>         
        </div>
<?php } 

if (isset($_GET['ErrorExcluir'])&& $_GET['ErrorExcluir']=='true'){?>
        <div id="erroExcluir">
           <script type="text/javascript">
              new Noty({
            type: 'error',
            layout: 'topCenter',
            theme: 'sunset',
            text: 'Ocorreu um erro na exclusão da campanha!!! tente Novamente!!!'
            }).show(); 
        
         </script>            
        </div>
<?php } 

?>

        <section class="conteudoTexto">
            
            <h1>Todas as campanhas</h1>
                
            
        </section>

       <section class="sessao-campanhas">
              <div class="row">
                  <!-- Lista de campanhas cadastradas no banco de dados-->
                <?php
                    require 'server/conexao.php';
                    try{
                        $stmt = $conn->prepare("SELECT * FROM campanhas"); 
                        $stmt->execute();
                        $resultado = $stmt->fetchAll(); 
                    } catch(PDOException $e){
                        echo $e->getMessage();
                    }

                    foreach($resultado as $valor){
                    ?> 
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                              <img src="upload-fotos-campanhas/<?php echo $valor['foto_campanha']; ?>">
                              <span class="card-title"><?php echo $valor['titulo']; ?></span>
                            </div>
                            <div class="card-content">
                              <p><?php echo $valor['subtitulo']; ?></p>
                            </div>
                            <div class="card-action">
                              <a href="pag-campanha.php?id=<?php echo $valor['idcampanha']; ?>">Ver Campanha</a>
                            </div>
                       </div>
                    </div>
                    <?php
                    }
                    ?>	   
             </div>
                
        </section>
            






<?php
require_once 'footer.php';
?>




