<?php

if(!true){
    require_once 'menu-logado.php';
}
else{
    require_once 'menu.php';
}

?>

<!-- FAQ/DUVIDAS FREQUENTES!-->
<section id="faq">
    <div class="h1duvidas">
        <h1>Dúvidas frequentes</h1>
        <div class="duvidas">
            <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header">
                  Eu vou doar de que forma? Dinheiro?
                </div>
                <div class="collapsible-body"><p>Não! Nós apenas criamos campanhas para ONgs, campanhas etc se ajudarem.</p></div>
              </li>
            </ul>
            <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header">
                  Como faço para ajudar?
                </div>
                <div class="collapsible-body"><p>Você verá várias campanhas no site. Clicando em uma delas, você terá acesso ao contato, endereço e outros informações do criador da camapnha. Crie uma conta, no seu nome ou de sua empresa e entre em contato.</p></div>
              </li>
            </ul>
            <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header">
                  Como o site se sustenta?
                </div>
                <div class="collapsible-body"><p>Com propaganda e com a sua doação!</p></div>
              </li>
            </ul>
            <ul class="collapsible" data-collapsible="accordion">
              <li>
                <div class="collapsible-header">
                    Vocês possuem um local físico?
                </div>
                <div class="collapsible-body"><p>Não possuímos nenhum local físico.</p></div>
              </li>
            </ul>
        </div>
    </div>
</section>



<?php
require_once 'footer.php';
?>