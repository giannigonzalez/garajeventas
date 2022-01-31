<?php
include("clases/recursos.php");

if (isset($_POST['subir'])) {
    $archivo = $_FILES['imagen']['name'];
    if (isset($archivo) && $archivo != "") {
       $tipo = $_FILES['imagen']['type'];
       $tamano = $_FILES['imagen']['size'];
       $temp = $_FILES['imagen']['tmp_name'];
      if (!((strpos($tipo, "jpeg") || strpos($tipo, "jpg"))) && ($tamano < 16777215)) {
         echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
         - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
      }
      else {
         if (move_uploaded_file($temp, 'imagenes/'.$archivo)) {
             chmod('imagenes/'.$archivo, 0777);
             rename('imagenes/'.$archivo, 'imagenes/'.$_POST['nombre_vendedor'].'.jpg');
             echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
             echo '<p><img src="imagenes/'.$archivo.'"></p>';
         }
         else {
            echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
         }
       }
    }
 }

$producto->insertarProductos($_POST['nombre_vendedor'],$_POST['contacto'],$_POST['producto'],$_POST['descripcion'],$_POST['precio']);
header("Location: publicar.php");
?>