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
#perfil-campanha{
    width: 80%;
    margin: auto;
}

#perfil-campanha .perfilcamp{
    background-color: #f2f2f2;
    width: 80%;
    height: 500px;
    margin: auto;
    margin-top: 150px;
    margin-bottom: 150px;
}

#perfil-campanha .perfilcamp .fotocamp{
    width: 200px;
    height: 200px;
    background-color: dodgerblue;
    border-radius: 50%;
    position: absolute;
    top: 150px;
    margin-left: 15px;
}

#perfil-campanha .perfilcamp .fotocamp img{
    width: 100%;
    background-image:url(../img/willian.jpg);
    border-radius: 100%;
}

#perfil-campanha .perfilcamp h3{
    font-size: 38px;
    margin-left: 20%;
}

    #perfil-campanha .perfilcamp h2{
        font-size:30px;
    }

@media screen and (max-width: 1200px){
    #perfil-campanha .perfilcamp{
        background-color: #f2f2f2;
        width: 80%;
        height: 1050px;
        margin: auto;
        margin-top: 150px;
        margin-bottom: 150px;
}
    
    #perfil-campanha .perfilcamp h3{
        text-align: center;
        margin-top: 120%;
        margin-right: 25%;
        
    }
    
    #perfil-campanha p{
        text-align: center;
        margin-left: 30px;
    }
    
    #perfil-campanha h5{
        text-align: justify;
    }
}
    
    #perfil-campanha .perfilcamp h3{
        margin-left: 27%;
        padding-top: 40px;
    }
    
    #perfil-campanha .perfilcamp h2{
        margin-left: 27%;
    }
    
    #perfil-campanha .perfilcamp h5{
        margin-left: 27%;
        font-size: 28px;
    }
    
    #perfil-campanha .perfilcamp p{
        margin-left: 27%;
        padding-right: 50px;
        text-align: justify;
    }
    
    
</style>
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
                <h2>Contatos:</h2>
                <p>Contactar: <?php echo $valor['titular']; ?></p>
                <p><?php echo $valor['telefone_titular']; ?></p>
                <p><?php echo $valor['email_titular']; ?></p>
            </div>
        <div class="fotocamp">
            <img src="upload-fotos-campanhas/<?php echo $valor['foto_campanha']; ?>">
            </div>
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