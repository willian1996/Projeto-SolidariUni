<footer class="page-footer">    
              <div class="container">
                <div class="row">
                  <div class="col l6 s12">
                  			<!--Frase footer -->
                   <a href="index.php"><img	src="img/frase.png"></a>
                    <ul>
                      <li><i class="icon-facebook-squared"></i><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                      <li><i class="icon-instagram"></i><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                      <li><i class="icon-mail"></i><a class="grey-text text-lighten-3" href="#!">Email</a></li>
                      <li><a class="grey-text text-lighten-3" href="termos.php">Termos de uso</a></li>
                      <li><a class="grey-text text-lighten-3" href="contato-frontend.php">Fale conosco</a></li>
                    </ul>
                  </div>
                  <div class="col l4 offset-l2 s12">
                                                      <!-- PLUGIN -->
                      <div class="fb-page fb_iframe_widget" 
                        data-href="https://www.facebook.com/SOLIDARIUNI" 
                        data-width="340" data-height="222" 
                        data-small-header="false" 
                        data-adapt-container-width="true"
                        data-hide-cover="false"
                        data-show-facepile="true" 
                        data-show-posts="false" 
                        fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=129832987086208&amp;container_width=498&amp;height=222&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FSOLIDARIUNI&amp;locale=pt_BR&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false&amp;width=498"><span style="vertical-align: bottom; width: 498px; height: 181px;"><iframe name="f23eec2c5cec78" width="340px" 
                        height="200px" 
                        frameborder="0" 
                        allowtransparency="true"
                        allowfullscreen="true" 
                        scrolling="no"
                        allow="encrypted-media" 
                        title="fb:page Facebook Social Plugin" src="https:/www.facebook.com/v2.8/plugins/page.php?adapt_container_width=true&amp;app_id=129832987086208&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FtrnHszv6jVd.js%3Fversion%3D42%23cb%3Df21d1461ab0296%26domain%3Dwww.facebook.com.br%26origin%3Dhttps%253A%252F%252Fwww.facebook.com.br%252Ff21f2149554e6a%26relation%3Dparent.parent&amp;container_width=498&amp;height=222&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com/SolidariUnibrasil/?modal=admin_todo_tour%2FSOLIDARIUNI&amp;locale=pt_BR&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false&amp;width=340" style="border: none; visibility: visible; max-width: 340px; width: 100%; height: 200px; border:red;"></iframe></span>
                  </div>
               
                  </div>
                </div>
              </div>
              <div class="footer-copyright">
                <div class="container">
                  Copyright © 2018 SolidariUni - Todos os direitos reservados. 
                </div>
              </div>
        </footer>
                    
    
        <!--Jquery-->
        <script src="js/jquery.min.js"></script>
        <!--Materilize JS-->
        <script src="js/materialize.js"></script>
        <script src="js/script.js"></script>
        
        

        <div class="modal" id="modal-login">
            <div id="loginUsuario" class="col s12 m6">
            
                <center ><h5>Faça seu login</h5><div id="loginTitulo"></div></center>
                <div class="input-field col s12 ">
                    <label for="email">E-mail:</label><input type="text" required name="email" id="login_email"><br/>
                </div>
                <div class="input-field col s12 ">
                    <label for="senha">Senha:</label><input type="password" required name="senha" id="login_senha"><br/>
                </div>
                <input type="submit" onclick="login()" value="login" class=" blue-grey darken-4 btn">
                <a href="cadastro-frontend.php" class="btn">cadastrar</a>
                
                
	       </div>
        </div>
    </body>
</html>
