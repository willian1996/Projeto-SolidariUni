<?php
session_start();

if(isset($_SESSION['idusuario'])){
    require_once 'menu-logado.php';
}
else{
    require_once 'menu.php';
}


?>
<!-------------------------------------------->
       <div id="form-contato">

         <div id="form-contato-interno" class="row">
             <h4>Fale Conosco</h4>


            <form action="server/contato-backend.php" method="POST" class="col s12">

              <div class="row">
                <div class="input-field col s8">                    
                  <input id="name" name="name" type="text" class="validate">
                  <label for="name">Nome</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s8">                
                  <input id="telefone" name="telefone" type="tel" class="validate">
                  <label for="telefone">Telefone</label>
                </div>
              </div>

               <div class="row">
                <div class="input-field col s8">
                  <input id="assunto" name="assunto" type="text" class="validate">
                  <label for="assunto">Assunto</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s8">
                  <input id="emailUsu"  name="emailUsu" type="email" class="validate">
                  <label for="emailUsu">Email</label>
                </div>
              </div>
                
              <div class="row">
                <div class="input-field col s8">
                    <textarea id="textarea1" name="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Mensagem</label>

                    <button class="btn cyan waves-effect waves-light right" type="submit">Enviar</button>

                    
                    
         </form> 
                   
                </div>
              </div>
            </form>
          </div>
        </div> 
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
 
            
<!-------------------footer------------------->
<?php

require_once 'footer.php';

?>
