<?php
    # substr()
    # Returns a portion of a string
    $output = substr('Hello', 1);
    echo $output; // ello
    echo '<br>';
    $output = substr('Hello', 0);
    echo $output; // Hello
    echo '<br>';
    $output = substr('Hello', 3);
    echo $output; // lo
    echo '<br>';
    $output = substr('Hello', 1, 3); // start at 1, end at position 3
    echo $output; // ell
    echo '<br>';

    // start from the back
    $output = substr('Hello', -2); // start from 2(from the last)
    echo $output; // lo
    echo '<br>';

    // length
    $output = strlen('Hello World');
    echo $output; // 11
    echo '<br>';

    # strpos() 
    # Finds the position of the first occurence of a sub string
    $output = strpos('Hello World', 'o'); 
    echo $output; // 4
    echo '<br>';


    # strrpos()
    # Finds the position of the last occurence of a sub string
    $output = strrpos('Hello World', 'o');
    echo $output;
    echo '<br>'; // 7


    # trim()
    # Strips whitespace
    $text = 'Hello World                                    ';
    var_dump($text); // string(47) "Hello World "
    echo '<br>';
    $trimmedText = trim($text);
    var_dump($trimmedText); // string(11) "Hello World"
    echo '<br>';

    # strtoupper
    # Makes everything uppercase
    $output = strtoupper('Hello World');
    echo $output; // HELLO WORLD
    echo '<br>';


    # strtolower
    # Makes everything lowercase
    $output = strtolower('Hello World');
    echo $output; // hello world
    echo '<br>';


    # ucwords()
    # Capitalize every word
    $output = ucwords('hello world');
    echo $output; // Hello World
    echo '<br>';

    # str_replace()
    # Replace all occurences of a search string with a replacement
    $text = 'Hello World';
    $output = str_replace('World', 'Everyone', $text);
    echo $output; // Hello Everyone
    echo '<br>';

    # is_string()
    # Check if string
    $val = 'Hello';
    $output = is_string($val);
    echo $output; // 1
    echo '<br>';
    $val2 = 2;
    $output = is_string($output);
    echo $output; // We won't see anything but it actually returns false
    echo '<br>';

    $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
    foreach($values as $value) {
        if(is_string($value)) {
            echo "{$value} is a string <br>";
        }
    }
/*
    abc is a string
    33 is a string
    22.4 is a string
    is a string
    is a string
    0 is a string
*/


    # gzcompress()
    # Compress a string
    $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Voluptas officia id maiores debitis laudantium provident nisi placeat ducimus 
    delectus totam, unde quis cum necessitatibus minus suscipit praesentium explicabo 
    repellat autem. Quisquam adipisci animi aut temporibus nulla, quos voluptatem 
    possimus, inventore vero neque vitae molestias dolores? Accusamus delectus maiores quia 
    temporibus?";
    $compressed = gzcompress($string);
    echo $compressed; // unreadable but compressed text
    echo '<br>'; 
    /*
    x�E�1n�0E��� A�.]�3S�DY$��?��z0,P~�}�ےN:=;Uk��5��.%$rW��Zt|�4�3���Ok9���vÔI+uV@��\5ԩqV�H��v�2�h4᠚E{�����cXp?Q�*�%H�!E�zŝ�oO/��<��{6-|���dJk���g�rK�G���C��Ǆ��#a$~:A���g]L�4�@�D:v�8���[��Bݚx(��ذ���JI�{翶�kCS>���KX�
    */

    // uncompressing
    $original = gzuncompress($compressed);
    echo $original;
    echo '<br>';

    /*
Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas officia id maiores debitis laudantium provident nisi placeat ducimus delectus totam, unde quis cum necessitatibus minus suscipit praesentium explicabo repellat autem. Quisquam adipisci animi aut temporibus nulla, quos voluptatem possimus, inventore vero neque vitae molestias dolores? Accusamus delectus maiores quia temporibus?
    */
?>