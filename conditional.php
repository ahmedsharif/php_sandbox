<?php
  $num = 5;
  
  if($num === 5) {
      echo 'passed';
  } else {
      echo 'didn\'t pass';
  }

  if($num > 4 XOR $num < 10) {
      echo 'logical condition pass';
  }

  // switch
  $favColor = 'RED';

  switch($favColor) {
       case 'red':
            echo 'your favorite color is red';
            break;
        case 'green':
            echo 'your favorite color is green';
            break;
        case 'blue':
            echo 'your favorite color is blue';
            break;
        default:
            echo 'your favorite color is default';
            break;
  }
?>