<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--Materialize CSS-->
    <link rel="stylesheet" href="css/materialize.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
    
</head>
    <body id="containerBody">
        
        <div id="loader"></div>

        <script type="text/javascript">
		// Este evendo é acionado após o carregamento da página
		jQuery(window).load(function() {
			//Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
			jQuery("#loader").delay(1000).fadeOut("slow");
		});
	</script>

        
<!------------Menu---------------->
        <header>
            <nav id="menu">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="index.php" class="brand-logo"><img src="img/teste-logo.svg"></a>
                      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        
                        <!--Avatar-->
                        <?php
                        if($_SESSION['foto_perfil'] == null){
                            $foto_user_avatar = "avatar.png";
                        }
                        else{
                            $foto_user_avatar = $_SESSION['foto_perfil'];
                        }
                        
                        
                        ?>
                        <a href="#" data-activates='dropdown1' class="dropdown-button"><img src="upload-fotos-perfiluser/<?php echo $foto_user_avatar; ?>" id="modal-avatar"></a>
                        <ul id='dropdown1' class='dropdown-content'>
                            <li><a href="adicionar-campanha-frontend.php">Nova<br />Campanha</a></li>
                            <li><a href="minhas-campanhas.php">Minha<br/>Campanha</a></li>
                            <li class="divider"></li>
                            <li><a href="perfiluser.php">Meu perfil</a></li>
                            <li><a href="server/logout.php">Sair</a></li>
                        </ul>
 

    
                      <ul class="right hide-on-med-and-down">
                        <li><a href="index.php">Início</a></li>
                        <li><a href="campanhas.php">Campanhas</a></li>
                        <li><a href="duvidas.php">Dúvidas</a></li>
                        
                        
                      </ul>
                        <div id=""></div>
                        
                      <ul class="side-nav" id="mobile-demo">
                        <li><a href="campanhas.php">Campanhas</a></li>
                        <hr width='80%'>
                        <li><a href="sobrenos.php">Sobre nós</a></li>
                        <hr width='80%'>
                        <li><a href="duvidas.php">Dúvidas</a></li>
                        <hr width='80%'>
                        <li><a href="server/logout.php">Sair</a></li>
                        <hr width='80%'>
                      </ul>
                        
                    </div>
                    
                </div>
                
            </nav>
            
        </header>