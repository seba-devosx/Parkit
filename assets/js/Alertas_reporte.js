$ (document).ready(function(){
    
    $("#Registro-form").bind("submit",function(){
        $.ajax({
            type: $(this).attr("method"),
            url:  $(this).attr("action"),
            data: $(this).serialize(),
            beforeSend:function(){
                $("·Registro-form buttom[type=submit]").html("enviando...");
                $("·Registro-form buttom[type=submit]").attr("disabled","disabled");
                
            },
            success: function(response){
               
                if(response.estado == "true"){
                    $("body").overhang({
                        type: "warn",
                        message: "Enviando reporte....",
                        duration: 2,
                        overlay: true,
                         
                        callback:function(){
                            $("body").overhang({
                                type: "success",
                                timeout: 100000,
                                message: "Tu Reporte ha sido enviado a los administradores ",
                                
                                //./view/cliente/Exito.php
                                
                            });
                        }
                        //./view/cliente/Exito.php
                        
                    });
                    

                }
                else{
                    $("body").overhang({
                        
                        type: "error",
                        message: "Este reporte no se a podido almacenar excede el numero de caracteres "
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