<?php
session_start();


if(isset($_SESSION['idusuario'])){
    require_once 'menu-logado.php';
}
else{
    require_once 'menu.php';
}
?>


<section id="perfil-campanha">
    <?php
    $id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 0;
    
		
		if ($id == 0) {
			die('campanha inválida!');
		}
    require 'server/conexao.php';
    try{
        $stmt = $conn->prepare("SELECT * FROM campanhas where $id = idcampanha"); 
        $stmt->execute();
        $resultado = $stmt->fetchAll(); 
    } catch(PDOException $e){
        echo $e->getMessage();
    }

    foreach($resultado as $valor){
    ?> 
    <div class="perfilcamp">
        <h3><?php echo $valor['titulo']; ?></h3>
            <div class="dados-campanha">
                <h5><?php echo $valor['subtitulo']; ?></h5><p><?php echo $valor['descricao']; ?></p>
                <br>
                
                
                
                
                <h5>Encerra em:</h5>
                 
                
    <div class="wrapper">
      <div class="cell">
        <div id="holder">
          <div class="digits"></div>
        </div>
      </div>
    </div>
                           
                
                
                

                
                
                
                <br>
                <h2>Contatos:</h2>
                <p>Contactar: <?php echo $valor['titular']; ?></p>
                <p><?php echo $valor['telefone_titular']; ?></p>
                <p id="emailcont"><?php echo $valor['email_titular']; ?></p>
            </div>
        <div class="fotocamp">
            <img src="upload-fotos-campanhas/<?php echo $valor['foto_campanha']; ?>">
            </div>
    </div>
    <?php
    }
    ?>
    <div class="camp-comentarios">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2&appId=574231669688686&autoLogAppEvents=1';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-comments" data-href="http://solidariuni.org" data-width="80%" data-numposts="30"></div>
    
    
    
    
    </div>
</section>



<?php 

require_once 'footer.php';

?>
        <!--<form action="server/upload.php" method="post" enctype="multipart/form-data">
                Selecionar arquivo:
                <input type="file" name="foto" id="arquivo">
	           <br>
                <input type="submit" value="Enviar" name="submit">
            </form> -->