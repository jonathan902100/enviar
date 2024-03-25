<?php
$tipoanec = $_POST['tipoanec'];
$nombre = $_POST['Nombre'];
$identificacionE = $_POST['Identificacion'];
$cargo = $_POST['Cargo'];
$jefe = $_POST['Jefe'];
$fecha = $_POST['Fecha'];
$nombreinter = $_POST['NombreInterpone'];
$identificacion =$_POST['Idinterpone'];
$cargointer =$_POST['CargoInterpone'];
$areainter =$_POST['AreaInterpone'];
$descripcion =$_POST['Descripcion'];
$accion =$_POST['Accion'];


 require("archivosmail/class.phpmailer.php");
 require("archivosmail/class.smtp.php");

 $mail = new PHPMailer();
 //$mail->From     = $correo;
 $mail->FromName = $nombre;
 //*****Dirección a la que llegaran los mensajes*****
 $mail->AddAddress("jonathanb0128@gmail.com");

 // Aquí van los datos que apareceran en el correo que se envia
 $mail->WordWrap = 50; 
 $mail->IsHTML(true);                                                                             
 $mail->Subject  =  "No Conformidad Talento Humano";
 $mail->Body     =  "Datos De Empleado Acusado \n<br />". 
 "TIPO ANECDOTARIO: $tipoanec \n<br />".
 "NOMBRE: $nombre \n<br />".
 "Identificacion: $identificacionE \n<br />".
 "Cargo: $cargo \n<br />".
 "Area: $area \n<br />".
 "Jefe: $jefe \n<br />".
 "Fecha: $fecha \n<br />".
 "NombreInterpone: $nombreinter \n<br />".
 "Idinterpone: $identificacion \n<br />".
 "CargoInterpone: $cargointer \n<br />".
 "AreaInterpone: $areainter \n<br />".
 "Descripcion: $descripcion \n<br />".
 "Accion: $accion \n<br />";

 //"Apellido: $apellido \n<br />". 
 //"Direccion: $direccion \n<br />". 
 //"Ciudad: $ciudad \n<br />".
 //"Identificacion: $identificacion \n<br />".
 //"Coreo: $correo \n<br />".  
 //"Telefono: $telefono \n<br />".
 //"Mensaje: $mensaje \n<br />".
 //"Identidad: $identidad \n<br />".  


  //*****Datos del servidor SMTP para hacer posible el envio del correo*****
  $mail->IsSMTP(); 
  $mail->CharSet = 'UTF-8';
  $mail->SMTPSecure = "ssl";
  $mail->Host = "smtp.gmail.com"; //Servidor de Salida.
  $mail->Port = 465;
  $mail->SMTPAuth = true; 
  $mail->Username = "sic@clinicadelcesar.com"; //Correo Electrónico
  $mail->Password = "clinica2020"; //Contraseña
  $mail->From = 'sic@clinicadelcesar.com'; //email de remitente desde donde se envía el correo, este caso para evitar spam, es el mismo que tu correo gmail
    

  if ($mail->Send())
  echo "ENVIADO"
  //header('location: Confirmacion.html');
  else
  echo "Ha habido un error al enviar el formulario, inténtalo de nuevo por favor";


?>