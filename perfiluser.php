<?php
session_start();

if(isset($_SESSION['idusuario'])){
    require_once 'menu-logado.php';
}
else{
    require_once 'menu.php';
}
?>

<?php
			require 'server/conexao.php';
			try{
				$stmt = $conn->prepare("SELECT u.foto_user FROM usuarios WHERE $_SESSION = ['idusuario']"); 
				$stmt->execute();
				$resultado = $stmt->fetchAll(); 
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			foreach($resultado as $valor){
			?>
<section id="perfil">
    <div class="perfiluser">
        <div class="fotouser">
            <img src="img/<?php echo $valor['foto_perfil']; ?>">
                <h3>Willian Sales</h3>
        </div>
        <?php
			}
        ?>
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