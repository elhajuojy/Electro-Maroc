<?php 

$image_dir = "assets/images/products/";

echo  $_FILES['file']['name'];

echo "===>";
// echo $_POST['image'];

$imagename = imageUpload($_POST['image'], $image_dir);



echo $image_dir.$imagename;

?>