<?php
    for($i = 0; $i < 10; $i++) {
        echo $i;
        echo '<br />';
    }

    $persons = array('Brad', 'Jose', 'William');
    
    // foreach($persons as $people) {
    //     echo $people;
    //     echo '<br />';
    // }

    // associated array

    $new_persons = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');
    foreach($new_persons as $people => $email) {
        echo $people.': '.$email;
        echo '<br />';
    }
?>