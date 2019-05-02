<?php

$people[] = "Steve";
$people[] = "Tayyab";
$people[] = "Bilal";
$people[] = "Osama";
$people[] = "Ali";
$people[] = "Kamran";
$people[] = "Raza";
$people[] = "Daud";


// Get query string;
$q = $_REQUEST['q'];

$suggestion = "";

// Get suggestions
if($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);

    foreach($people as $person) {
        if(stristr($q, substr($person, 0, $len))){
            if($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestions":  $suggestion;
?>