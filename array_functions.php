<?php

    $myArray = [600, 10, 103, 540, 60];

    /**
     * Search in array
     */
    // $searchedIndex = array_search(13, $myArray);
    
    // var_dump($myArray);

    // echo $searchedIndex;

    /**
     * Get random index from Array
     */
    // $randomIndex = array_rand($myArray);
    // echo $randomIndex;
    // echo '<br>';
    // echo $myArray[$randomIndex];
    //Declared array or changed array
    /**
     * Array sort function
     * sort(&$pointer)
     */
    echo "Default:\n";
    var_dump($myArray);
    sort($myArray);
    echo "Sorted:\n";
    var_dump($myArray);

    echo "Reversed:\n";
    $reversed = array_reverse($myArray);
    var_dump($reversed);

    /**
     * Explode string
     */
    // $myString = "John Doe;998888888;25";
    // $myParsedArray = explode(';', $myString);
    // echo $myString;
    // echo "\n";
    // var_dump($myParsedArray);

    /**
     * Imploding array
     */
    // $students = ['Abror', 'Aziz', 'Akbar', 'Sarvar'];
    // $imploded = implode(', ', $students);
    // echo $imploded;
