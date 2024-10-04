<?php

if (isset($_FILES['fileUpload'])) {
    $path = $_FILES["fileUpload"]["name"];
    $upload_path = "./uploads/".$path;
    move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $upload_path);
    echo "file upload done";
}else{
    echo false;
}


?>