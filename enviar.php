<?php
    $destino="lopezz.e.20@gmail.com"
    $Nombre= $_POST["Nombre"];
    $Email= $_POST["Email"];
    $Mensaje= $_POST["Mensaje"];
    $contenido="Nombre: " . $nombre . "\nEmail: " .$Email . "\nMensaje: " . $Mensaje;
    mail($destino, "contacto", $contenido);
    header("location:index.html")
?>