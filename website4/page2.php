<?php
    session_start();

    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>

<!Doctype html>
<html>
<head>
    <title>PHP Session</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <h5>Thank you <?php $name; ?> You have subscribed with the email <?php  echo $email; ?></h5>
    <a href="page3.php">Go to page3 </a>
</body>
</html>