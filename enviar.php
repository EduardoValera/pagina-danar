<?php  
	
    $destino= "danarmultiservicios@gmail.com";

    $nombre = $_POST["nombre"];
    $movil = $_POST["movil"];
    $correo = $_POST["correo"];
    $archivo = $_POST["archivo"];
    $mensaje = $_POST["mensaje"];

    $contenido = "Nombre: " . $nombre . "\nMovil: " . $movil . "\nCorreo: " . $correo . "\nArchivo: " . $archivo . "\nMensaje: " . $mensaje;

    mail($destino,"Confección",$contenido);
    header("Location:gracias.html");
    
?>