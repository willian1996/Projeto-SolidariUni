<?php

if(!true){
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
            <form class="col s12">
              <div class="row">
                <div class="input-field col s8">
                    
                  <input id="name" type="text" class="validate">
                  <label for="name">Nome</label>
                </div>
              </div>
                <div class="row">
                <div class="input-field col s8">
                
                  <input id="telefone" type="tel" class="validate">
                  <label for="telefone">Telefone</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s8">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
                
              <div class="row">
                <div class="input-field col s8">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Mensagem</label>
                </div>
              </div>
            </form>
          </div>
        </div> 
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
 
            
<!-------------------footer------------------->
<?php

require_once 'footer.php';

?>
