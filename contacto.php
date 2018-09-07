
<?php
// var_dump($_POST);
// $email_from="gonzalo.llantada@gmail.com";
session_start();
if(mandarmail()){
$_SESSION["wasSend"]="enviado";

header("Location: http://localhost:8080/php/HomeDar+/");
}else{


 $_SESSION["wasSend"]="error";


 header("Location: http://localhost:8080/php/HomeDar+/#contacto");
}
function mandarmail(){
  if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "darmassonrisas@gmail.com";
$email_subject = "Landing especialistas";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['first_name']) ||

!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['comments'])) {
return false;
echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['first_name'] . "\n";

$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '."\r\n".
'Reply-To: '."\r\n" .
'X-Mailer: PHP/' . phpversion();
if(mail($email_to, $email_subject, $email_message, $headers)){
  return true;
}else{
  return false;
}



}}

 ?>
