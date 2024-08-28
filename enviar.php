<?php 
	$nombre  = $_POST['nombre'];
	$email   = $_POST['email']; 
	$telefono  = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
        $titulo= $email." desde CajasAlcazar.cl";
        $contenido= "Nombre =". $nombre. "\nEmail =".$email."\nTelefono =".$telefono."\nMensaje =".$mensaje;
 
	if(mail('logisticasantiago@alcazar.cl',$titulo, $contenido)){
            print"<script languaje='JavaScrip'> alert('Gracias su mensaje fue enviado');
          window.location.href='contacto.html';
          </script>"; 
              
	}else{
		   print
                     "<script languaje='JavaScrip'> alert('Perdón a ocurrido un problema contáctenos telefónicamente o inténtelo mas tarde');
                       window.location.href='contacto.html';
                         </script>";
	}
 ?>