<?php
    function simpleFunction() {
        echo 'Hello function';
    }

    // simpleFunction();

    // with params
    function sayHello($name = "Default") {
        echo "Hello $name<br>";
    }

    $num1 = 2;

    function addNumbers(&$num1, $num2) {
        return $num1 += 5;
    }

    // sayHello();
    echo addNumbers($num1, 3);

    echo "num1 $num1";
?>