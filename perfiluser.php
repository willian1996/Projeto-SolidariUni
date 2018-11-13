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



<section id="perfil">
    <?php
    $id = $_SESSION['idusuario'];
    require 'server/conexao.php';
    try{
        $stmt = $conn->prepare("SELECT * FROM usuarios where $id = idusuario"); 
        $stmt->execute();
        $resultado = $stmt->fetchAll(); 
    } catch(PDOException $e){
        echo $e->getMessage();
    }

    foreach($resultado as $valor){
        $fotoPerfil = $_SESSION['foto_perfil'];
        if($fotoPerfil == null){
            $fotoPerfil = "avatar.png";
        }
    ?> 
    
    <div class="perfiluser">
        <h3><?php echo $valor['primeiro_nome'];?>&#160<?php echo $valor['sobrenome']; ?></h3>
            <div class="dados1">
                <h5>Email:</h5><p><?php echo $valor['email']; ?></p>
                <h5>CPF:</h5><p><?php echo $valor['CPF']; ?></p>
                <h5>Nascimento:</h5><p><?php echo $valor['data_nascimento']; ?></p>
            </div>
            <div class="dados2">
                <h5>Tipo de pessoa:</h5><p><?php echo $valor['tipo_pessoa']; ?></p>
                <h5>Telefone:</h5><p><?php echo $valor['telefone']; ?></p> 
                <h5>Razão social:</h5><p><?php echo $valor['razao_social']; ?></p>
                
            </div>
        <div class="fotouser">
            <img src="upload-fotos-perfiluser/<?php echo $fotoPerfil ;?>">
        </div>
        
    </div>
    
    
    <div class="upload-perfiluser">
        <p>Atualizar foto de perfil</p>
         <input type="file" id="foto_perfiluser" accept="image/*">
         <button onclick="uploadFotoPerfiluser()" type="submit">Enviar</button>
        
        
        
        
        
        
    
    </div>
    <?php
    }
    ?>
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