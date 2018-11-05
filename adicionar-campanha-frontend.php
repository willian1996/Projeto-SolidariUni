<?php
session_start();

if(isset($_SESSION['idusuario'])){
    require_once 'menu-logado.php';
}
else{
    require_once 'menu.php';
}


?>
<script>
		function cadastraCampanha(){
			var formData = new FormData();
			var titulo = $('#titulo').val();
            var subtitulo = $('#subtitulo').val();
            var descricao = $('#descricao').val();
            var data_final_campanha = $('#data_final_campanha').val();
			var foto_campanha = $('#foto_campanha').prop('files')[0];
			
			formData.append("titulo", titulo);
			formData.append("subtitulo", subtitulo);
            formData.append("descricao", descricao);
            formData.append("data_final_campanha", data_final_campanha);
            formData.append("foto_campanha", foto_campanha);
			
			$.ajax({
                  url: "server/adicionar-campanha-frontend.php",
				  method: "POST",
                  dataType: "json",
                  data: formData,
				  cache: false,
				  contentType: false,
				  processData: false,
                  success: function(retorno){
                      if(retorno.deucerto){
							alert(retorno.msg);     
                      }else{
							alert(retorno.msg);
					  }
                  }
              });
		}
</script>



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
                          <button onclick="cadastraCampanha()" class="btn cyan waves-effect waves-light right" type="submit">Cadastrar
                            
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