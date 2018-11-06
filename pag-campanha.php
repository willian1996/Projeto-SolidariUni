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
    <div class="perfilcamp">
        <h3>TITULO</h3>
            <div class="dados-campanha">
                <h5>Sub-titulo</h5><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel erat pellentesque, mollis ex vitae, finibus leo. Suspendisse potenti. Proin eget erat pellentesque, ornare purus non, consectetur augue. Nullam non laoreet nibh, ut lacinia leo. Nulla accumsan vel leo sed venenatis. Morbi ut tortor lacus. Donec ipsum quam, lobortis nec egestas at, dapibus a nisi. Ut ut enim ut enim auctor malesuada pellentesque sed nisl. Suspendisse lacinia dui risus, a faucibus justo dignissim et. Sed eget velit interdum, laoreet lorem in, eleifend dui. </p>
                <h2>Contatos:</h2>
                <p>(12)99723-6686</p>
                <p>email@gmail.com</p>
            </div>
        <div class="fotocamp">
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