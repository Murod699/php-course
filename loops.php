<?php
    //For example
    // for($index = 0; $index < 10; $index++) {
    //     echo $index;
    //     echo '<br>';
    // }

    //While example
    // $a = 0;
    // while ($a <= 5) {
    //     echo $a;
    //     echo '<br>';
    //     $a++;
    // }
    //Do while example
    // do {

    // } while($a > 5);

    //Foreach loop example
    $myArray = [8, 6, 3, 5];
    // foreach($myArray AS $index => $value) {
    //     echo $index ." == >". $value;
    //     echo '<br>';
    // }
    //RAW
    for($index = 0; $index < count($myArray); $index++) {
        echo $index ." ===== >". $myArray[$index];
        echo '<br>';
    }