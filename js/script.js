    $( document ).ready(function(){
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

            console.log("Email: "+email+" senha: "+senha);

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
                                    alert(retorno.msg);     
                              }else{
                                    alert(retorno.msg);
                              }
                          }
                      });
        }

        






        



