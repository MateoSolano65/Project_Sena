function validarProducto(){
    //CREAR LAS VARIABLES   

    var descripProducto; 
    var precioProducto; 
    var categoriaProducto; 
    var estadoProducto; 

    //CAPTURAR DATOS DESDE LOS INPUT A LAS VARIABLES CON EL ID
    descripProducto = document.getElementById("descripProducto").value; 
    precioProducto = document.getElementById("precioProducto").value; 
    categoriaProducto = document.getElementById("categoriaProducto").value; 
    estadoProducto = document.getElementById("estadoProducto").value; 


    //VALIDA CAMPOS VACIOS
    if(descripProducto === "" || precioProducto ==="" || categoriaProducto === "" || estadoProducto===""){
        alert("Error, No pueden existir campos vacios");
        return false; 
    }

    //VALIDA NUMERICOS 
    if(isNaN(precioProducto)){
        alert("Error, El precio no puede ser alfabetico"); 
        return false; 
    }
    
    //VALIDAR LONGITUD DE CARACTERES 
    var numLetras = precioProducto.length; 
    if(numLetras < 10){
        alert("Error, El numero de caracteres en el precio es mayor a 10"); 
        return false;
    }
    if(descripProducto.length < 100){
        alert("Error, La descripción del producto es demasiado extensa"); 
        return false;
    }

    if(categoriaProducto.length < 40){
        alert("Error, La categoria del producto es demasiado extensa"); 
        return false;
    }

    if(estadoProducto.length < 30){
        alert("Error, El estado del producto es demasiado extensa"); 
        return false;
    }

    //VALIDAR DATOS DE TEXTO

    if(!isNaN(precioProducto)){
        alert("Error, El precio debe ser numerico"); 
        return false;
    }

    var numeros = /[0-9]/g; 

    if(numeros.test(descripProducto)){
        alert("Error, La descripción no puede contener numeros"); 
        return false;
    }

    if(numeros.test(categoriaProducto)){
        alert("Error, La categoría no puede contener numeros"); 
        return false;
    }

    if(numeros.test(estadoProducto)){
        alert("Error, El estado no puede contener numeros"); 
        return false;
    }

    //VALIDACION DE CORREO ELECTRONICO
    //CREAR UNA EXPRESION REGULAR 

    //var expCorreo = /\w+@+\w+\.+\w/; 
    //if(!expCorreo.test(correoCliente)){
      //  alert("Error, Correo incorrecto"); 
       // return false;
    //}
}