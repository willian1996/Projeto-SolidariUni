<?php
session_start();
if(!isset($_SESSION['idusuario'])){
    header("Location: index.php");
}
if(isset($_SESSION['idusuario'])){
    require_once 'menu-logado.php';
}
else{
    require_once 'menu.php';
}
?>
<style>
    .sessao-campanhas{
        min-height: 500px;
    }




</style>

<section class="sessao-campanhas">
              <div class="row">
                  <!-- Lista de campanhas cadastradas no banco de dados-->
                <?php
                  $nome = $_SESSION['nome'];
                    require 'server/conexao.php';
                    try{
                        $stmt = $conn->prepare("SELECT * FROM campanhas WHERE titular = '$nome'"); 
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