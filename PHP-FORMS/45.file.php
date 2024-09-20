<?php

if (isset($_REQUEST['btn'])) {
   if ($_FILES['file_upload']) {
    $path = $_FILES['file_upload']['name'];

    $new_name = rand()."-".$path;

    $upload_folder = "./UPLOADS/".$new_name;

    if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $upload_folder)) {
      header("location: file.html");
    } else {
     echo "sorry";
    }
    
    
   }
}

?>