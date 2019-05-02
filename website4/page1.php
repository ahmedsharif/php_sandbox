<?php
    if(isset($_POST['submit'])) {
        session_start();
        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);

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
                <input type='text' name='name' class='form-control'>
            </div>
            <div class="form-group">
                <label>Email </label>
                <input type='email' name='email' class='form-control'>
            </div>
            <br>
            <button type='submit' name='submit' class='btn btn-primary'>Submit</button>
        </form>
</body>
</html>