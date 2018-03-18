
<?php
$uploadedfileload="true"; 

if (!($_FILES['uploadedfile']['type'] == "application/pdf" OR $_FILES['uploadedfile']['type'] =="application/pdf"))
{
  $msg="Tu archivo tiene que ser .pdf Otros archivos no son permitidos";
  $uploadedfileload="false";
}

$file_name=$_FILES['uploadedfile']['name'];
$add="archivos/f_pdf/$file_name";

if($uploadedfileload=="true"){
  if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$add)){
    echo "<script>alert('Ha sido subido satisfactoriamente ');</script>";
}else{
  echo "<script>alert('Error al subir el archivo');</script>";
}

}else{echo "<script>alert('$msg');</script>";
}
?>
<script>
window.location.replace("<?php echo base_url('index.php/welcome/moduloCargarFiEx'); ?>"); 
</script>
<footer id="main-footer" style="position: static">