<?php
  require('config/db.php');
  require('config/config.php');
?>

    <?php include('inc/header.php'); ?>
    <div class="container">
        <h1> Add Post </h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class='form-control'>
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class='form-control'>
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea type="text" name="body" class='form-control'></textarea>
            </div>
            <input type="submit" name="submit" value="submit" class="btn btn-primary" />
        </form>
    </div>
    <?php include('inc/footer.php'); ?>