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
           <h1>Adicionar campanha</h1>
           <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                  
                  
                
                <div class="row">
                  
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="titulo" type="text" required>
                        <label for="titulo">Título</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="subtitulo" type="text" required>
                        <label for="subtitulo">Subtítulo</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        Descrição da campanha
                        <textarea id="descricao"></textarea><br/>
                        
                      </div>
                    </div>
                    <div class="row">
            
                      <div class="input-field col s6">
                        Encerra em:
                        <input id="data_final_campanha" type="date" required>
                        
                      </div>
                    </div>
                    <div class="row">
            
                        <div class="file-field input-field">
                          <div class="btn">
                            <span>Adicionar imagem da campanha</span>
                            <input type="file" multiple>
                          </div>
                          <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Procurar">
                          </div>
                        </div>
                    </div>
                      
                    
                   
                    
                    
                    
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit">Cadastrar
                            
                          </button>
                        </div>
                      </div>
                    
                  
                </div>
              </div>
            </div>
          </div>
           
              
        </section>
            






<?php
require_once 'footer.php';
?>