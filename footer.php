<footer class="page-footer">    
              <div class="container">
                <div class="row">
                  <div class="col l6 s12">
                    <h5 class="white-text">SolidariUni</h5>
                    <ul>
                      <li><i class="icon-facebook-squared"></i><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                      <li><i class="icon-instagram"></i><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                      <li><i class="icon-mail"></i><a class="grey-text text-lighten-3" href="#!">Email</a></li>
                      <li><a class="grey-text text-lighten-3" href="termos.php">Termos de uso</a></li>
                      <li><a class="grey-text text-lighten-3" href="contato-frontend.php">Fale conosco</a></li>
                    </ul>
                  </div>
                  <div class="col l4 offset-l2 s12">
                        <div class="widget">
                            <div class="widget_conteudo">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&width=275&height=155&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="275" height="155" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>
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
        <script>
            
            
            
            $( document ).ready(function(){
                
                
            //slidenav
            $(".button-collapse").sideNav();
            // Slideshow
            $('.slider').slider();
            $('.parallax').parallax();
            //modal trigger
            $('.modal').modal();


            });
            
            
        </script>
        
        

        <div class="modal" id="modal-login">
            <div id="loginUsuario" class="col s12 m6">
            <form id="login" method="post">
                <center ><h5>Faça seu login</h5><div id="loginTitulo"></div></center>
                <div class="input-field col s12 ">
                    <label for="email">E-mail:</label><input type="text" required name="email" id="login_email"><br/>
                </div>
                <div class="input-field col s12 ">
                    <label for="senha">Senha:</label><input type="password" required name="senha" id="login_senha"><br/>
                </div>
                <input type="submit" value="login" class=" blue-grey darken-4 btn">
                <a href="#" class="btn">cadastrar</a>
                </form>
                
	       </div>
        </div>
    </body>
</html>
