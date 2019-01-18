<?php

    
    $Login = $_POST['Login'];
    $Password = $_POST['Password'];
    if ($Login == "Aleksey" && $Password == "F75"){
        echo "Wellcome $Login";
    }
    else {
        echo "Wrong Login or Password, please try again.";
    }
?>