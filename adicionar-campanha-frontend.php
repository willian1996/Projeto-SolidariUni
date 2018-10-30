<?php
session_start();

if(isset($_SESSION['idusuario'])){
    require_once 'menu-logado.php';
}
else{
    require_once 'menu.php';
}


?>

        

       <section class="cadastro-campanhas">
           <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                
                <div class="row">
                  <form class="col s12" method="post" action="server/cadastro-backend.php">
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="first_name" name="primeiro_nome" type="text" required>
                        <label for="first_name">Título</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="last_name" name="sobrenome" type="text" required>
                        <label for="last_name">Subtítulo</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email5" name="email" type="text" required>
                        <label for="email">Descrição da campanha</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="telefone" name="telefone" type="tel" required>
                        <label for="telefone">Telefone</label>
                      </div>
                    </div>
                   
                    
                    
                    
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Cadastrar
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
                      </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
           
              
        </section>
            






<?php
require_once 'footer.php';
?>