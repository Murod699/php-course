<?php
    // var_dump($_POST);
    //var_dump($_GET);
    $ism = $_POST['ismi'];
    $fam = $_POST['familyasi'];
    $sharif = $_POST['sharifi'];
    $text = $_POST['matn'];
    //Old version (<=PHP5.6)
    if (isset($_POST['variant'])) {
        $variant = $_POST['variant'];
    }
    else {
        $variant = false;
    }
    // <=>
    //New version (>=PHP7)
    $variant = $_POST['variant'] ?? false;
    $check_school = $_POST['check_school'] ?? false;
    echo $check_school;