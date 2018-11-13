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




       <section class="cadastro-campanhas">
           <h1>Adicionar campanha</h1>
           <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                  
                  
                
                <div class="row">
                  
                    <div class="row">
                      <div class="input-field col s6">
                        <!-- id="titulo"  -->
                        <input id="titulo" type="text" required>
                        <label for="titulo">Título</label>
                      </div>
                    
                      <div class="input-field col s6">
                          <!-- id="subtitulo"  -->
                        <input id="subtitulo" type="text" required>
                        <label for="subtitulo">Subtítulo</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        Descrição da campanha
                          <!-- id="descricao"  -->
                        <textarea id="descricao"></textarea><br/>
                        
                      </div>
                    </div>
                    <div class="row">
            
                      <div class="input-field col s6">
                        Encerra em:
                          <!-- id="data_final_campanha"  -->
                        <input id="data_final_campanha" type="date" required>
                        
                      </div>
                    </div>
                    <div class="row">
                        <!-- id="foto_campanha"  -->
                        <input type="file" id="foto_campanha" accept="image/*">
                        <br>
                    </div>
                      
        
                      <div class="row">
                        <div class="input-field col s12">
                          <button onclick="cadastrarCampanha()" class="btn cyan waves-effect waves-light right" type="submit">Cadastrar
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