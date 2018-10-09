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
                          <div class="input-field col s12">
                            <input id="name" type="text">
                            <label for="first_name">Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="email" type="email">
                            <label for="email">Email</label>
                          </div>
                        </div>
                        <div class="row">
                        <div class="input-field col s12">
                            <textarea id="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
<!-------------------footer------------------->
<?php

require_once 'footer.php';

?>