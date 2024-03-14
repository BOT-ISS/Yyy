<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    
    // Guardar los datos en un archivo
    $archivo = fopen("datos.txt", "a"); // Abre el archivo en modo 'append'
    fwrite($archivo, "Nombre: $nombre - Email: $email\n");
    fclose($archivo);
    
    echo "Datos guardados correctamente.";
} else {
    echo "Error: método de solicitud no permitido.";
}
?>