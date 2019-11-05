$ (document).ready(function(){
    $("#Login-form").bind("submit",function(){
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
                        message: "Usuario encontrado te estamos redirigiendo ...",
                        callback:function(){
                            window.location.href ="./view/cliente/Administrador.php";
                          //si el indexlogeado no funciona cambilo por el del administrador 
                        }
                        //./view/cliente/Exito.php
                    });

                }
                else{
                    $("body").overhang({
                        type: "error",
                        message: "Usuario incorrecto"
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