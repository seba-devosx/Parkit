Push.create("prueba",{
    body:"Mensaje de prueba",
    icon:"https://www.definicionabc.com/wp-content/uploads/social/Prueba-Psicometrica-2.jpg",
    timeout: 4000,
    onClick: function(){
        window.location.href ="./view/cliente/IndexLogeado.php";
      
        this.close();
    }

});