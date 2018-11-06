<?php
session_start();

if(isset($_SESSION['idusuario'])){
    require_once 'menu-logado.php';
}
else{
    require_once 'menu.php';
}
?>

<style>
#perfil{
    width: 80%;
    margin: auto;
}

#perfil .perfiluser{
    background-color: #f2f2f2;
    width: 80%;
    height: 400px;;
    margin: auto;
    margin-top: 150px;
    margin-bottom: 150px;
}

#perfil .perfiluser .fotouser{
    width: 200px;
    height: 200px;
    background-color: dodgerblue;
    border-radius: 50%;
    position: absolute;
    top: 150px;
    margin-left: 15px;
}

#perfil .perfiluser .fotouser img{
    width: 100%;
    background-image:url(../img/willian.jpg);
    border-radius: 100%;
}

#perfil .perfiluser h3{
    font-size: 38px;
    margin-left: 20%;
}

@media screen and (max-width: 1200px){
    #perfil .perfiluser{
    background-color: #f2f2f2;
    width: 80%;
    height: 700px;
    margin: auto;
    margin-top: 150px;
    margin-bottom: 150px;
}
    #perfil .perfiluser .dados2{
        margin-left: 25%;
    }
    
   
    
    #perfil .perfiluser h3{
        text-align: center;
        margin-top: 120%;
        margin-right: 25%;
    }
}
    
    
    
    #perfil .perfiluser .dados{
    width: 80%;
    margin: auto;
}

    #perfil .perfiluser h3{
        margin-left: 26%;
        padding-top: 5%;
    }

    
    #perfil .perfiluser .dados1{
        float: left;
        margin-left: 26%;
    }
    
    #perfil .perfiluser .dados2{
        float: right;
        margin-right: 20%;
    }
    
    #perfil .perfiluser .dados1 h5{
        color: #4a4a4a;
    }
    
    #perfil .perfiluser .dados2 h5{
        color: #4a4a4a;
    }
    
    #perfil .perfiluser .dados1 p{
        color: #888888;
    }
    
    #perfil .perfiluser .dados2 p{
        color: #888888;
    }
</style>
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
 <form action="#">
    <div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
  </form>

<?php 

require_once 'footer.php';

?>
        <!--<form action="server/upload.php" method="post" enctype="multipart/form-data">
                Selecionar arquivo:
                <input type="file" name="foto" id="arquivo">
	           <br>
                <input type="submit" value="Enviar" name="submit">
            </form> -->