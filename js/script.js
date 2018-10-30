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

        






        



