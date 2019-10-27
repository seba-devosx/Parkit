$ (document).ready(function(){
    
    $("#Registro-form").bind("submit",function(){
        $.ajax({
            type: $(this).attr("method"),
            url:  $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend:function(){
                $("·Login-form buttom[type=submit]").html("enviando...");
                $("·Login-form buttom[type=submit]").attr("disabled","disabled");
                
            },
            success: function(response){
               
                if(response.estado == "true"){
                    $("body").overhang({
                        type: "success",
                        message: "Te Estamos Registrando En Nuestro Sietema",
                         
                        callback:function(){
                            window.location.href ="Location:http://localhost/parkit/";
                            $("body").overhang({
                                type: "success",
                                message: "!!Listo Ahora Puedes Ingresar",
                                
                                //./view/cliente/Exito.php
                                
                            });
                        }
                        //./view/cliente/Exito.php
                        
                    });
                    

                }
                else{
                    $("body").overhang({
                        
                        type: "error",
                        message: "Este usuario ya esta registrado, si olvido sus datos pongase en contacto con los administradores"
                        // 3000ms = 3s
                    });
                    $("·Login-form buttom[type=submit]").html("enviando...");
                    $("·Login-form buttom[type=submit]").removeAttr("disabled","disabled");
                }
                
                
                
            },
            error: function(){
                $("body").overhang({
                    type: "error",
                    message: "Usuario incorrecto"
                });
                $("·Login-form buttom[type=submit]").html("enviando...");
                $("·Login-form buttom[type=submit]").removeAttr("disabled","disabled");
            }

        });
        return false;
    });
});