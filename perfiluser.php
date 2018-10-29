<?php
session_start();

if(isset($_SESSION['idusuario'])){
    require_once 'menu-logado.php';
}
else{
    require_once 'menu.php';
}

?> 
<section id="perfil">
    <div class="perfiluser">
        <div class="fotouser">
            <img src="img/willian.jpg">
        </div>
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