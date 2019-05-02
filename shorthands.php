<?php
    $loggedIn = false;
    $array = [1,3,5,7,9];

   /*  if($loggedIn) {
        echo "you are logged in";
    } else {
        echo "you are not logged in";
    }

    echo ($loggedIn) ? 'you are logged in': 'you are not logged in';

    $isRegistered = ($loggedIn == true) ? true : false;
    echo $isRegistered;

    $age = 7;
    $score = 5;

    echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average': 'Exceptional')
    :($age > 10 ? 'Horrible': 'Average')); */

?>

<div>
    <?php if($loggedIn) { ?>
        <h1>Welcome User </h1>
    <?php }  else { ?>
        <h1>Welcome Guest</h1>
    <?php } ?>
</div>

<div>
    <?php if($loggedIn): ?>
    <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcome Guest </h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach($array as $val): ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>

<div>
    <?php for($i = 0; $i < 10; $i++): ?>
        <li><?php echo $i; ?></li>
    <?php endfor; ?>
</div>