<?php
    //List of students
    //Old version array declare: array(8,5,6) => []
    $students = [
        //key => value
        ['fio' => "Akbarov Akbar\n", 'group' => '911-19', 'age' => 20],
        ['fio' => 'Nosirov Nosir', 'group' => '911-19', 'age' => 18],
        ['fio' => 'John Doe', 'group' => '915-19', 'age' => 21]
    ]; 

    //Dumping
    // var_dump($students);

    foreach ($students as $student) {
        echo $student['fio'] ." - ". $student['group'];
        echo '<br>';
    }