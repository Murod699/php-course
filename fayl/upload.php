<?php

    // var_dump($_FILES);
    $my_file = $_FILES['my_file'];
    $size = $my_file['size']/1024;
    
    $path = 'uploads';
    //uploads/ish.jpg
    $name = uniqid();
    $full_path = $path .'/'.$name.'.jpg';
    move_uploaded_file($my_file['tmp_name'], $full_path);