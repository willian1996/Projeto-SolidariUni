<?php

if(!true){
    require_once 'menu-logado.php';
}
else{
    require_once 'menu.php';
}


?>
 <!-------------Slider---------------->  



           <!--Form Advance-->
        
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">Cadastre-se</h4>
                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <div class="input-field col s6">
                        <input id="first_name" type="text">
                        <label for="first_name">Nome</label>
                      </div>
                    
                      <div class="input-field col s6">
                        <input id="last_name" type="text">
                        <label for="last_name">Sobrenome</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email5" type="email">
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="telefone" type="tel">
                        <label for="telefone">Telefone</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="password6" type="password">
                        <label for="password">Senha</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <select id="options" onchange="optionCheck()">
                          <option value="pessoa-fisica">Pessoa Fisica</option>
                          <option value="pessoa-juridica">Pessoa Juridica</option>
                          
                        </select>
                        <label>Selecione Perfil</label>
                      </div> 
                        
                        
                      <div id="hiddenFisica" style="height:100px;width:300px;border:1px;visibility:hidden;">
                         <div class="row">
                          <div class="input-field col s12">
                            <input id="CPF" type="text">
                            <label for="CPF">CPF</label>
                          </div>
                        </div>
                         <div class="row">
                          <div class=" col s12">
                            <input id="nascimento" type="date">
                            <label for="nascimento">Data nascimento</label>
                          </div>
                        </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        <div id="hiddenJuridica" style="height:100px;width:300px;border:1px;visibility:hidden;">
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="CNPJ" type="text">
                            <label for="CNPJ">CNPJ</label>
                          </div>
                        </div>
                         <div class="row">
                          <div class=" col s12">
                            <input id="razao-social" type="text">
                            <label for="razao-social">Razão Social</label>
                          </div>
                        </div>
                        </div>
                        
                        
                     
                      
                    </div>
                    
                    
                    <div class="row">
                      
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Cadastrar
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
       
  


















<?php

require_once 'footer.php';

?>