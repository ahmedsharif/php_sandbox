<?php
    $output = substr('Hello', -2);
    echo $output;

    // strlen()
    // echo strlen($output);

    // get first occurence of a substring;
    $output = strpos('hello world', 'w');
    echo $output;

    // strrpos last occurence;
    $output = strrpos('Hello world', 'o');
    echo $output;

    #trim

    $text = 'Hello world              ';
    var_dump($text);

    $trimmed = trim($text);
    var_dump($trimmed);

    #ucwords() captilize your words
    $output = ucwords('hello world');
    echo $output;

    $text = 'Hello World';
    $output = str_replace('World', 'Everyone', $text);
    echo $output;

    $val = 22;
    $output = is_string($val);
    echo $output;

    $values = array(true, false, null, 'abc', 123, '33', 22.4, '22.4', '', ' ', 0 ,'0');

    foreach($values as $value) {
        if(is_string($value)){
            echo "{$value} is a string<br>";
        }
    }

    # gzcompress();
    # compress is a string;
    
    $string = "A string is a data type used in programming, such as an integer and floating point unit, but is used to represent text rather than numbers. It is comprised of a set of characters that can also contain spaces and numbers. For example, the word hamburger and the phrase I ate 3 hamburgers are both strings.";
    $compress = gzcompress($string);
    echo $compress;

    $original = gzuncompress($compress);
    echo $original;
?>