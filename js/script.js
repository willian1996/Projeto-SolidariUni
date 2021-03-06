$(document).ready(function(){
    //slidenav
    $(".button-collapse").sideNav();
    // Slideshow
    $('.slider').slider();
    $('.parallax').parallax();
    //modal trigger
    $('.modal').modal();
    $('select').material_select();
    //dropdown menu usuario
    $('.dropdown-button').dropdown({
          inDuration: 300,
          outDuration: 225,
          constrainWidth: false, // Does not change width of dropdown to that of the activator
          hover: true, // hover ativado
          gutter: 0, // Spacing from edge
          belowOrigin: false, // Displays dropdown below the button
          alignment: 'left', // Displays dropdown with edge aligned to the left of button
          stopPropagation: false // Stops event propagation

    });
    //abrir dropdown menu usuario 
    $('.dropdown-button').dropdown('open');
    //fechar dropdown menu usuario 
    $('.dropdown-button').dropdown('close');
    // Initialize collapse button
    $(".button-collapse").sideNav();
    

    //PLUGIN DO LUAN (JQUERYMASK)//
    $("#first_name").mask("AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA");                               $("#last_name").mask("AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA");
    $("#telefone").mask("(00) 00000-0000");
    $("#CPF").mask("000.000.000-00");
    $("#CNPJ").mask("00.000.000/0000-00");

    //PLUGIN SENHA
    
    $('#password6').keyup(function() {
        $('#result').html(checkStrength($('#password6').val()))
        })
    function checkStrength(password) {
        var strength = 0
        if (password.length < 6) {
        $('#result').removeClass()
        $('#result').addClass('curta')
        return 'Senha muito curta!'
        }
        if (password.length > 7) strength += 1

        if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1


        if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1


        if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1


        if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1


        if (strength < 2) {
            $('#result').removeClass()
            $('#result').addClass('fraca')
            return 'Senha fraca!'
        } else if (strength == 2) {
            $('#result').removeClass()
            $('#result').addClass('boa')
            return 'Senha boa!'
        } else {
            $('#result').removeClass()
            $('#result').addClass('forte')
            return 'Senha forte!'
        }
    }
    //plugin topo
    

    $('a#subirTopo').click(function () {
         $('body,html').animate({
           scrollTop: 0
         }, 800);
        return false;
       });

    $(window).scroll(function () {
         if (jQuery(this).scrollTop() > 1000) {
            jQuery('#subirTopo').fadeIn();
         } else {
            jQuery('#subirTopo').fadeOut();
         }
     });    

});

function optionCheck(){
    var option = document.getElementById("options").value;
    if(option == "pessoa-fisica"){
        $('#hiddenFisica').fadeIn(); 
        $('#hiddenJuridica').fadeOut();   
    }
    else if(option == "pessoa-juridica"){
        $('#hiddenFisica').fadeOut(); 
        $('#hiddenJuridica').fadeIn(); 

    }
}

function login(){
    var email = $('#login_email').val();
    var senha = $('#login_senha').val();

    

    $.ajax({
        url: "server/login.php",
        method: "POST",
        dataType: "json",
        data: {'email': email, 'senha': senha},
        success: function(retorno){
            if(retorno.deucerto){
                location.reload();
            }else{
                alert(retorno.mensagem);
            }
        }
    });
}
function cadastrarCampanha(){
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
    formData.append("foto", foto_campanha);

    $('#titulo, #subtitulo, #descricao, #data_final_campanha, #foto_campanha').val('');

    $.ajax({
          url: "server/adicionar-campanha-backend.php",
          method: "POST",
          dataType: "json",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: function(retorno){
              if(retorno.deucerto){
                   window.location.href="campanhas.php?ErrorCampanha=false";
              }else{
                    window.location.href="campanhas.php?ErrorCampanha=true";
              }
          }
    });
}
function uploadFotoPerfiluser(){
    var formData = new FormData();
    var foto_perfiluser = $('#foto_perfiluser').prop('files')[0];

    
    formData.append("foto", foto_perfiluser);

    $('#foto_perfiluser').val('');

    $.ajax({
          url: "server/upload-foto-perfiluser.php",
          method: "POST",
          dataType: "json",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: function(retorno){
              if(retorno.deucerto){
                alert(retorno.msg);
                    location.reload();
              }else{
                    alert(retorno.msg);
              }
          }
    });
}

function uploadFotoCampanha(idcamp){
    var formData = new FormData();
    var foto_perfilcamp = $('#foto_perfilcamp').prop('files')[0];

    
    formData.append("foto", foto_perfilcamp);
    formData.append("idcampanha", idcamp);

    $('#foto_perfilcamp').val('');

    $.ajax({
          url: "server/upload-foto-camp.php",
          method: "POST",
          dataType: "json",
          data: formData,
          cache: false,
          contentType: false,
          processData: false,
          success: function(retorno){
              if(retorno.deucerto){
                    alert(retorno.msg);
                    location.reload();
              }else{
                    alert(retorno.msg);
              }
          }
    });
}



//Efeito maquina de escrever
function typeWriter(elemento){
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = '';
    textoArray.forEach((letra, i) => {
    setTimeout(function(){
        elemento.innerHTML += letra;
    }, 50 * i);

    })
}

const titulo = document.querySelector('.maquinaDeEscrever');

typeWriter(titulo);


//Editar Camapanha

function editarCampanha(id){
    if(!$('[data-id-campanha='+id+'] .tituloCampanhaH3').hasClass('editavel')){
       $('[data-id-campanha='+id+'] .descricaoCampanhaP').after('<a class="salvar" href="javascript:;" onclick="salvar('+id+')">Salvar edição</a>');
       }
    $('[data-id-campanha='+id+'] .tituloCampanhaH3').attr('contenteditable','true');
    $('[data-id-campanha='+id+'] .tituloCampanhaH3').addClass('editavel');
    $('[data-id-campanha='+id+'] .tituloCampanhaH3').focus();
    
    $('[data-id-campanha='+id+'] .subtituloCampanhaH5').attr('contenteditable','true');
    $('[data-id-campanha='+id+'] .subtituloCampanhaH5').addClass('editavel');
    
    $('[data-id-campanha='+id+'] .descricaoCampanhaP').attr('contenteditable','true');
    $('[data-id-campanha='+id+'] .descricaoCampanhaP').addClass('editavel');
    
    
}

function salvar(id){
    var titulo = $('[data-id-campanha='+id+'] .tituloCampanhaH3').text();
    var subtitulo = $('[data-id-campanha='+id+'] .subtituloCampanhaH5').text();
    var descricao = $('[data-id-campanha='+id+'] .descricaoCampanhaP').text();
    
    $.ajax({
          url: "server/editar-campanha.php",
          method: "POST",
          dataType: "json", //tipo de retorno.
          data: {'idcampanha':id, 'novotitulo':titulo, 'novosubtitulo':subtitulo, 'novadescricao':descricao},
          success: function(retorno){
              if(retorno.deucerto){
                $('[data-id-campanha='+id+'] .tituloCampanhaH3').removeAttr('contenteditable');     
                $('[data-id-campanha='+id+'] .tituloCampanhaH3').removeClass('editavel');
                  
                $('[data-id-campanha='+id+'] .subtituloCampanhaH5').removeAttr('contenteditable');     
                $('[data-id-campanha='+id+'] .subtituloCampanhaH5').removeClass('editavel');
            
                  
                $('[data-id-campanha='+id+'] .descricaoCampanhaP').removeAttr('contenteditable');     
                $('[data-id-campanha='+id+'] .descricaoCampanhaP').removeClass('editavel');
                  
                $('[data-id-campanha='+id+'] .salvar').remove();
                console.log(retorno.mensagem);
               window.location.href="campanhas.php?ErrorEditar=false"; 
              }else{
                window.location.href="editar-campanha.php?ErrorEditar=true";
              }
          }
    });
    
}



// Excluir campanha
function excluirCampanha(id){
			$.ajax({
                  url: "server/excluir-campanha.php",
				  method: "POST",
                  dataType: "json", //tipo de retorno.
                  data: {"idcampanha":id},
                  success: function(retorno){
                      if(retorno.deucerto){
                        window.location.href="campanhas.php?ErrorExcluir=false";    
                      }else{
                        window.location.href="campanhas.php?ErrorExcluir=true"; 
                      }
                  }
              });
}











        

        


        






        



