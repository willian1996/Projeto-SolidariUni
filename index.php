<?php
session_start();

if(isset($_SESSION['idusuario'])){
    require_once 'menu-logado.php';
}
else{
    require_once 'menu.php';
}


//testando erro de envio de campanhas
if(isset($_GET['ErrorCampanha'])&& $_GET['ErrorInfo']=='false'){?>
        <div id="sucessoCampanha">
          <script type="text/javascript">
          alert("Sua campanha foi adicionada!!! Logo estárá disponivel para apreciação de nossos colaboradores. Boa Sorte!!!");
          </script>         
        </div>
<?php } 

if (isset($_GET['ErrorCampanha'])&& $_GET['ErrorInfo']=='true'){?>
        <div id="erroCampanha">
           <script type="text/javascript">
         alert("Ocorreu um erro no seu envio, tente novamente!!!");
         </script>            
        </div>
<?php } 


//testando erro de cadastro
if(isset($_GET['ErrorCadastro'])&& $_GET['ErrorCadastro']=='false'){?>
        <div id="sucessoCadastro">
          <script type="text/javascript">
          alert("Seu Cadastro foi realizado com sucesso!!! Bem vindo a SolidariUni!!! Agora você já pode realizar seu login!!!");
          </script>         
        </div>
<?php } 
if (isset($_GET['ErrorCadastro'])&& $_GET['ErrorCadastro']=='true'){?>
        <div id="erroCadastro">
           <script type="text/javascript">
         alert("Ocorreu um erro no seu Cadastro, tente novamente!!!");
         </script>            
        </div>
<?php } 
//testando erro de envio de email
if(isset($_GET['ErrorInfo'])&& $_GET['ErrorInfo']=='false'){?>
        <div id="sucessoMail">
          <script type="text/javascript">
          alert("SolidariUni Agradece seu contato, retornaremos em breve sua solicitação!!!");
          </script>         
        </div>
<?php }
if (isset($_GET['ErrorInfo'])&& $_GET['ErrorInfo']=='true'){?>
        <div id="erroMail">
           <script type="text/javascript">
         alert("Ocorreu um erro no seu envio, tente novamente!!!");
         </script>            
        </div>
<?php } 
?>

<style>

</style>

<header>
<!-------------Slider----------------> 
               

            <div class="slider">
                <ul class="slides" style="height: 600px">
                  <li>
                    <img src="img/pexels-photo-433495.jpeg"> <!-- random image -->
                    <div class="caption center-align">
                      <h3>Doar faz bem!</h3>
                    </div>
                  </li>
                  <li>
                    <img src="img/slide-adorable-childhood-children-754769.jpg"> <!-- random image -->
                    <div class="caption center-align">
                      <h3>Ajude o próximo!</h3>
                    </div>
                  </li>
                  <li>
                    <img src="img/slide-adult-black-and-white-close-up-156731.jpg"> <!-- random image -->
                    <div class="caption center-align">
                      <h3>Precisamos da sua colaboração!</h3>
                    </div>
                  </li>
                  <li>
                    <img src="img/slide-animal-cat-cute-46024.jpg"> <!-- random image -->
                    <div class="caption center-align">
                      <h3>Seja solidário!</h3>
                    </div>
                  </li>
                </ul>
            </div>
        </header>
        
<!--------------Conteúdo Textos e frases---------------------->
        <section class="conteudoTexto">
            <div>
                <h1>A SolidariUni</h1>
                <p class="maquinaDeEscrever">A SolidariUni é uma associação fundada em meados de 2018, por um grupo de amigos. Buscamos fazer a união entre colaboradores e recebedores de doações. Nosso principal objetivo é unir institutos que precisam de itens específicos e encontrar pessoas ou empresas que possam cooperar de alguma maneira de maneira efetiva e sem fins lucrativos. Participe você também!</p>
        
            </div>
        </section>
<!------------PARALLAX-------------------------------->
        <section id="parallax">
            <div class="parallax-container">
                <div class="parallax"><img src="img/parallax.jpg"></div>
            </div>
        </section>
<!--------------FIMPARALLAX--------------------------->
        <section class="conteudoTexto">
            <div id="paragrafo2">
            <h1>Campanhas com sucesso</h1>
                <p>Muitas campanhas já obtiveram sucesso! Participe você também e ajude aqueles que precisam. Doar faz bem.</p>
            </div>
        </section>
    
<!-------------cards (Campanhas que deram certo)---------------->
        <section class="sessao-campanhas">
              <div class="row">
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                              <img src="img/roupa.jpg">
                              <span class="card-title">Campanha do Agasalho</span>
                            </div>
                            <div class="card-content">
                              <p>Doação de casacos/roupas de frio para pessoas necessitadas. </p>
                            </div>
                            <div class="card-action">
                              <a href="#">Ver Campanha</a>
                            </div>
                      </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                              <img src="img/alimento.jpg">
                              <span class="card-title">Campanha do Alimento</span>
                            </div>
                            <div class="card-content">
                              <p>Arrecadação de alimentos perecíveis para instituições de caridade. </p>
                            </div>
                            <div class="card-action">
                              <a href="#">Ver Campanha</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                              <img src="img/cao.jpg">
                              <span class="card-title">Campanha de Ração</span>
                            </div>
                            <div class="card-content">
                              <p>Arrecadar pacotes de rações para alimentar diversos animais da comunidade. </p>
                            </div>
                            <div class="card-action">
                              <a href="#">Ver Campanha</a>
                            </div>
                       </div>
                    </div>
             </div>
                
        </section>

            
<!-------------------footer------------------->
<?php 
require_once 'footer.php';

?>
