<h1>
    <?php
    echo "hello World";
    // this is a single line comment
    
    # Single line comment
    
    /*
    Multiline 
    comment
    */


    # VARIABLES
    /*
        - Prefix $
        - Start with a letter or an underscore
        - Only letters, numbers and underscores
        - Case sensitive

    */


    # DATA TYPES
    /*
        String
        Integers
        Floats
        Booleans
        Arrays
        Objects
        NULL
        Resource
    */


    $output = 'Hello Fahim!';
    echo $output;
    $num1 = 5;
    echo $num1;
    $floatValue = 2.5;
    echo $floatValue;
    $booleanValue = true;
    $anotherBool = False;
    echo $booleanValue;
    echo $anotherBool;


    $number1 = 20;
    $number2 = 40;
    $sum = $number1 + $number2;
    echo $sum;



    # String concatenation
    $string1 = "Miles";
    $string2 = "Morales";
    $completeString = $string1 . $string2;
    echo $completeString;
    // adding a space between them
    $fullString = $string1 . ' ' . $string2;
    echo $fullString;
    // easier way
    $easierWay = '$string1 $string2'; // it prints exactly what is there in the single quotes. $string1 $string2
    echo $easierWay;
    // If I want to print the value for the variables, I need to use the double qoutes
    $perfectEasierWay = "$string1 $string2";
    echo $perfectEasierWay; // Miles Morales
    

    # Escape sequences
    $string3 = 'They\'re here!';
    echo $string3; // They're here!
    $string4 = "They're here!";
    echo $string4; // They're here!
    // but
    $string5 = "He said, \"Hey Fahim!\".";
    echo $string5; // He said, "Hey Fahim!".
    


    # CONSTANT
    define('GREETING', 'Hello, everyone!');
    echo GREETING; // not echo $GREETING. $ must not be used in constant.
    
    // making a constant case insensitive
    /* it is deprecated
    define('GREETING2', 'Hello greeting 2', true);
    echo greeting2;
    */
    ?>
</h1>