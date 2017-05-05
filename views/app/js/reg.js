function goReg() {
  var connect, form, response, result, nombre, apellido, dni, direccion, telefono, sexo, user, pass, email;
  nombre = __('nom_reg').value;
  apellido = __('ape_reg').value;
  dni = __('dni_reg').value;
  direccion = __('dir_reg').value;
  telefono = __('tel_reg').value;
  email = __('email_reg').value;
  //sexo = __('user_reg').value;
  user = __('user_reg').value;
  pass = __('pass_reg').value;
 
  if(nombre != '' && apellido != '' && dni != '' && direccion != '' && telefono !='' && email != '' && user != '' && pass != '' ) {  
      form = 'nombre=' + nombre + '&apellido=' + apellido + '&dni=' + dni + '&direccion=' + direccion + '&telefono=' + telefono + '&email=' + email + '&user=' + user + '&pass=' + pass;
      connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
      connect.onreadystatechange = function() {
        if(connect.readyState == 4 && connect.status == 200) {
            if(connect.responseText == 1) {
                result = '<div class="alert alert-dismissible alert-success">';
                result += '<h4>Registro completado!</h4>';
                result += '<p><strong>Estamos redireccionandote...</strong></p>';
                result += '</div>';
                __('nom_reg').value = '';
                __('ape_reg')alue = '';
                __('dni_reg').value = '';
                __('dir_reg').value = '';
                __('tel_reg').value = '';
                __('email_reg').value = '';
                //sexo = __('user_reg').value;
                __('user_reg').value = '';
                __('pass_reg').value = '';
                __('_AJAX_REG_').innerHTML = result;
                location.reload();             
            } else {
                __('_AJAX_REG_').innerHTML = connect.responseText;
            }


        } else if(connect.readyState != 4) {
            result = '<div class="alert alert-dismissible alert-warning">';
            result += '<button type="button" class="close" data-dismiss="alert">x</button>';
            result += '<h4>Procesando...</h4>';
            result += '<p><strong>Estamos procesando tu registro...</strong></p>';
            result += '</div>';
            __('_AJAX_REG_').innerHTML = result;
        }
      }
        connect.open('POST','ajax.php?mode=reg',true);
        connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        connect.send(form);    
        
    }else{
      result = '<div class="alert alert-dismissible alert-danger">';
      result += '<button type="button" class="close" data-dismiss="alert">x</button>';      
      result += '<strong>ERROR:</strong><strong>Todos los campos deben estar llenos.';
      result += '</div>';
      __('_AJAX_REG_').innerHTML = result;
    }    
}

function runScriptReg(e) {
  if(e.keyCode == 13) {
    goReg();
  }
}