<?php
    echo date('d');
    echo date('m');
    echo date('Y');
    echo date('l');

    echo '<br>'.date('d/m/Y');

    echo '<br>';
    echo date('h');
    echo date('i');
    echo date('s');
    echo date('a');

    // set time zone;
    echo date_default_timezone_get();
    echo date_default_timezone_set("Asia/Karachi");
    echo '<br><br>';
    echo date('h:i:sa');

    // time stamp
    $timestamp = mktime(10, 14, 54, 9, 10, 1981);
    echo date('m/d/Y', $timestamp);
    // echo $timestamp;

    $timestamp2 = strtotime('7:00pm March 22 2016');
    echo '<br>'.date('m/d/Y', $timestamp2);
?>