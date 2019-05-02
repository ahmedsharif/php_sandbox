<?php
    if(isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time()+3600);
        header('Location: page2.php');
    }
?>

<!Doctype html>
<html>
<head>
    <title>System Info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name </label>
                <input type='text' name='username' placeholder="Enter username" class='form-control'>
            </div>
            <br>
            <button type='submit' name='submit' class='btn btn-primary'>Submit</button>
        </form>
</body>
</html>