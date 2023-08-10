<?php
 # Array = Variable that holds multiple values

 /*
    - Indexed
    - Associative
    - Multi-dimensional
 */

    // Indexed
    $people = array('Kevin', 'Jeremy', 'Sara');
    echo $people[1];
    echo $people[0];

    $ids = array(23, 55, 12);
    echo $ids[2];
    
    $cars = ['Honda', 'Toyota', 'Ford'];
    echo $cars[1];
    $cars[3] = 'Chevy';
    echo $cars[3];
    $cars[] = 'BMW'; // automatically saves to the new latest index position
    echo $cars[4];

    # count
    echo count($cars);

    # print_r = it is basically the echo for array
    print_r($cars);

    # var_dump = popular data type showing function that is widely used in debugging php code
    var_dump($cars);


    // Associative arrays = It allows to define the key and the value
    $people = array('Fahim' => 23, 'Amin' => 32, 'William' => 36);
    echo $people['Fahim'];

    $new_id = [22 => 'Fahim', 44 => 'Jose', 63 => 'William'];
    echo $new_id[22];

    // adding to the existing people array
    $people['Jill'] = 52;
    echo $people['Jill'];
    print_r($people);
    var_dump($people);


    // Multi-Dimensional Array = An array within an array
    $newCars = array(
        array('Honda', 20, 10),
        array('Toyota', 30, 20),
        array('Ford', 22, 12)
    );
    echo $newCars[1][0];
?>