<?php
session_start();

if(isset($_SESSION['idusuario'])){
    require_once 'menu-logado.php';
}
else{
    require_once 'menu.php';
}


?>
<!--------------Conteúdo Textos e frases---------------------->
        <section id="conteudosobrenos">
            <div class="sobre">
                <h1>Sobre Nós</h1>
                <p>A SolidariUni é uma associação fundada em meados de 2018, por um grupo de amigos. Buscamos fazer a união entre colaboradores e recebedores de doações. Nosso principal objetivo é unir institutos que precisam de itens específicos e encontrar pessoas ou empresas que possam cooperar de alguma maneira de maneira efetiva e sem fins lucrativos. Participe você também!</p>
            </div>
            <div class="comentario">
                <div class="membros">
                    <div class="sobrealessandra">
                        <div id="imgalessandra">
				        <img src="img/alessandra.jpg" alt="Alessandra">
                        </div>
						<h4>Alessandra Teixeira</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dignissim lectus eget lacinia fermentum. Maecenas finibus maximus massa, dignissim mollis orci vehicula vel. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ornare interdum blandit. Ut non nulla augue.</p>
                    </div>
                    
                    <div class="sobrecristina">
                    <img src="img/cristina.jpg" alt="Cristina">
						<h4>Cristina Moreira</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dignissim lectus eget lacinia fermentum. Maecenas finibus maximus massa, dignissim mollis orci vehicula vel. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed ornare interdum blandit. Ut non nulla augue.</p>
                    </div>
                    
                    <div class="sobreliandra">
                    <img src="img/liandra.jpg" alt="Liandra">
						<h4>Liandra Ellen</h4>
						<p>Liandra Ellen de Oliveira Silva (07/07/2001). Nasceu em Caraguatatuba, litoral norte de São Paulo. Liandra sempre foi bem estudiosa e sempre estudou em escola pública. Liandra sentiu vontade de fazer um curso para complementar seus estudos, então sentiu interesse no curso de Técnico em Informática para Internet. Liandra quer ser fonoaudiologa no futuro.</p>
                    </div>
               
                    <div class="sobreluan">
                    <img src="img/luan.jpg" alt="Luan">
						<h4>Luan de Paula</h4>
						<p>Luan Gustavo Oliveira de Paula (03/04/2001). Nasceu em São Sebastião, no litoral norte de São Paulo. Luan sempre estudou em escola pública e se interessou por um curso de informática no IFSP aos 16 anos. Teve a ideia de criar um site para doações durante o projeto e então a SolidariUni foi ganhando forma.</p>
                    </div>
                    
                    <div class="sobrewillian">    
                    <img src="img/willian.jpg" alt="Willian">
						<h4>Willian Sales</h4>
						<p>Willian Sales Gabriel (01/01/1996). Nasceu em São Sebastião, litoral norte de São Paulo. Willian começou sua vida profissional com 16 anos no ramo hotelaria como Garçom. Aos 18 anos, subiu de cargo para recepcionista no mesmo hotel, onde trabalha até hoje. Willian deseja ser um programador no futuro, pois gosta muito da área programação de sistemas e paginas web.</p>
                    </div>
                </div>
            </div>
        </section>
<!-------------------footer------------------->
<?php

require_once 'footer.php';

?>
