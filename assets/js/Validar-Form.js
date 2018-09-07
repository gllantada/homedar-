function validarFormulario(){

		var txtNombre = document.getElementById('name').value;
		var txtEdad = document.getElementById('cel').value;
		var txtCorreo = document.getElementById('email').value;
    var mje=document.getElementById("comments").value;
    var mensaje=document.getElementById("comments");
  var nombre = document.getElementById('name');
  var mail = document.getElementById('email');
  var tel = document.getElementById('cel');


		var banderaRBTN = false;

		//Test campo obligatorio
		if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){

		// mail.style.background="red";
    nombre.style="border-bottom:solid 1px red;";
// mail.placeholder.style="color:red";
nombre.value=null;
    nombre.placeholder="Ingrese un nonbre válido...";
    nombre.focus();
			return false;
		}
      nombre.style="border-bottom:solid 1px black;";

		//Test edad

		//Test correo
		if(!(/\S+@\S+\.\S+/.test(txtCorreo))){

		// mail.style.background="red";
    mail.style="border-bottom:solid 1px red;";
    mail.focus();
// mail.placeholder.style="color:red";
mail.value=null;
    mail.placeholder="Ingrese un correo válido...";


    return false;
		}
  mail.style="border-bottom:solid 1px black;";
    if(txtEdad == null || txtEdad.length <= 6 || isNaN(txtEdad)){

		// mail.style.background="red";
    tel.style="border-bottom:solid 1px red;";
// mail.placeholder.style="color:red";
tel.value=null;
    tel.placeholder="Ingrese un teléfono válido...";
    tel.focus();
			return false;
    }
    if (mje.length==0) {
      // mail.style.background="red";
      mensaje.style="border-bottom:solid 1px red;";
  // mail.placeholder.style="color:red";
  mensaje.value=null;
      mensaje.placeholder="Ingrese un mensaje..";
      mensaje.focus();
        return false;
    }

      tel.style="border-bottom:solid 1px black;";
		return true;
	}
