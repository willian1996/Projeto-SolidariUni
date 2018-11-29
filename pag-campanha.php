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
    <div class="perfilcamp" data-id-campanha="<?php echo $valor['idcampanha']; ?>">
        <?php if(isset($_SESSION['nome']) && $_SESSION['nome'] == $valor['titular']){?>
        <i class="icon-excluir" onclick="excluirCampanha(<?php echo $valor['idcampanha']; ?>)"></i>
        <i class="icon-editar" onclick="editarCampanha(<?php echo $valor['idcampanha']; ?>)"></i>
        <?php } ?>
        <h3 class="tituloCampanhaH3"><?php echo $valor['titulo']; ?></h3>
            <div class="dados-campanha">
                <h5 class="subtituloCampanhaH5"><?php echo $valor['subtitulo']; ?></h5>
                <p class="descricaoCampanhaP"><?php echo $valor['descricao']; ?></p>
                
                
                
                
                
                <h5>Encerra em:</h5><p><?php echo date('d/m/Y',strtotime($valor['data_final_campanha'])); ?></p>
   
                
                
                
                <h2>Contatos:</h2>
                <p>Contactar: <?php echo $valor['titular']; ?></p>
                <p><?php echo $valor['telefone_titular']; ?></p>
                <p id="emailcont"><?php echo $valor['email_titular']; ?></p>
            </div>
        <div class="fotocamp">
            <img src="upload-fotos-campanhas/<?php echo $valor['foto_campanha']; ?>">
            </div>
    </div>
<?php if(isset($_SESSION['nome']) && $_SESSION['nome'] == $valor['titular']){?>
    <div class="upload-foto-campanha">
        <p>Atualizar foto de da campanha</p>
         <input type="file" id="foto_perfiluser" accept="image/*">
         <button onclick="uploadFotoPerfiluser()" type="submit">Enviar</button>
    
    </div>
<?php } ?>
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