<?php
    $people = array('ahmed', 'ali', 'murtaza');
    $cars = ['toyoto', 'honda', 'suzuki'];
    $ids = array(1,2,3);
    $cars[3] = 'BMW';
    $cars[] = 'NA';
    // echo $people[1];
    // echo $cars[2];
    // echo count($cars);
    // print_r($cars);
    // var_dump($cars);

    // Associated array
    $people = array('Brad' => 35, 'Jose' => 32, 'William', 37);
    $new_ids = [22 => 'Brad', 44 => 'Jose',  63 => 'William'];
    // echo $people['Brad'];
    $people['Jill'] = 42;
    // echo $new_ids[22];
    // print_r($people);

    // multidimentional Array
    $mul_cars = array(
        array('Honda', 42, 92),
        array('BMW', 50, 60),
        array('Mercedees', 40, 60)
    );

    echo $mul_cars[1][2];
?>