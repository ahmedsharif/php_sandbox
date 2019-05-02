<?php
    session_start();

    $_SESSION['name'] = "John";
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = isset($_SESSION['email']) ? $_SESSION['email']: 'Nothing';

    header('Location: page4.php');
?>

<!Doctype html>
<html>
<head>
    <title>PHP Session</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <h1>Hello <?php echo $name ?></h1>
</body>
</html>