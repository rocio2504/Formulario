<?
$dir = "files/";
Sruta_carga = $dir . $FILES['archivo '] ['name'];
echo $FILES['archivo_transferir']['name'];
move_uploaded_file($_FILES['archivo' ]['name'],$ruta_carga);
?>