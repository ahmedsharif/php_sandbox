<?php
    $msg = '';
    $msgClass = '';

    if(filter_has_var(INPUT_POST, 'submit')) {
        echo 'Submitted';
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // check Required fields
        if(!empty($email) && !empty($name) && !empty($message)) {
            echo 'Pass';
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                $msg = 'Please use a valid email';
                $msgClass =  'alert-danger';
            } else {
                $toEmail = 'support@gamil.com';
                $subject = '<h2>Contact form request</h2>'.$name;
                $body = '<h2> Contact Request</h2>
                <h4>Name<h4><p>'.$name.'</p>
                <h4>Email<h4><p>'.$email.'</p>
                <h4>Message<h4><p>'.$message.'</p>';

                // Email headers
                $headers = "MIME-VERSION: 1.0" . "\r\n";
                $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
                // Addl header
                $headers .= "From: " .$name. "<".$email.">"."\r\n";

                if(mail($toEmail, $subject, $body, $headers)) {
                    $msg = "Your email has been sent";
                    $msgClass = 'alert-success';
                } else {
                    $msg = "Your email wasn't sent";
                    $msgClass = 'alert-danger';
                }

            }
        } else {
            // Failed
            $msg = 'Please fill all the fields';
            $msgClass =  'alert-danger';

        }
    }
?>

<!Doctype html>
<html>
<head>
    <title>System Info</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"> My Website </a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>">
        <?php echo $msg; ?></div>
        <?php endif; ?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Name </label>
                <input type='text' name='name' class='form-control' value="<?php echo isset($_POST['name'])?  $name : ''; ?>">
            </div>
            <div class="form-group">
                <label>Email </label>
                <input type='email' name='email' class='form-control' value="<?php echo isset($_POST['email'])?  $email: ''; ?>">
            </div>
            <div class="form-group">
                <label>Message </label>
                <textarea name='message' class='form-control' value="<?php echo isset($_POST['message'])?  $message : ''; ?>"></textarea>
            </div>
            <br>
            <button type='submit' name='submit' class='btn btn-primary'>Submit</button>
        </form>
    </div>
</body>
</html>