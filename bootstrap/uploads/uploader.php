<?php
$target_path = "f_jpg/";
$target_path = $target_path.basename($_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
  echo "<script>alert('Archivo subido')</script>";
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}
echo base_url('index.php/welcome/moduloCargarFiEx');
?>