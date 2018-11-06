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
        <h3>Willian Sales</h3>
            <div class="dados1">
                <h5>email:</h5><p>willianviado@gmail.com</p>
                <h5>CPF:</h5><p>1029310293</p>
                <h5>Nascimento:</h5><p>03/04/1950</p>
            </div>
            <div class="dados2">
                <h5>Tipo de pessoa:</h5><p>física</p>
                <h5>Telefone:</h5><p>997236686</p> 
                <h5>Razão social:</h5><p>Bolsonaro presidente</p>
            </div>
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