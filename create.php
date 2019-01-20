<?php
    var_dump($_FILES);
    if($_FILES['file']['size'] == 6459756){
        echo "File size is 6459756!";
    }
    move_uploaded_file($_FILES['file']['tmp_name'], '1.jpg');
?>