
function validar(){
var nombre, apellido, usuario, email, pss;

     nombre = document.getElementById("nombre").value;
     apellido = document.getElementById("apellido").value;
     usuario = document.getElementById("usuario").value;
     email = document.getElementById("email").value;
     pss = document.getElementById("pss").value
     correo =/\w+@\w+\.+[a-z]/;

     if(nombre === ""){
         alert("El campo nombre está vacío");
         return false;
     }
     if(apellido == ""){
         alert("El campo apellido está vacío");
         return false;
     }
     if(usuario == ""){
         alert("El campo usuario está vacío");
         return false;
     }
     if(email === ""){
        alert("El campo email está vacío");
        return false;
    }
    if(pss === ""){
        alert("El campo contraseña está vacío");
        return false;
    }

//requerimientos abajo//
    else if(usuario.length<4){
        alert("El nombre de usuario es muy corto debe tener un minimo de 4 caracteres");
        return false;
    }

    else if(usuario.length>30){
        alert("El nombre es muy largo");
        return false;
    }

    else if(email.length>100){
        alert("El correo es muy largo");
        return false;
    }

    else if(!correo.test(email)){
        alert("El correo no es válido");
        return false;
    }

    else if(pss.length<8){
        alert("La contraseña debe tener mínimo 8 caracteres");
        return false;
    }
    else if(pss.length>50){
        alert("La contraseña es muy larga");
        return false;
    }
}	