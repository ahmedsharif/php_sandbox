<?php
  require('config/db.php');
  require('config/config.php');

  // Get ID
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  $query = 'SELECT * FROM posts WHERE id='.$id;

  // Get the results
  $result = mysqli_query($conn,$query);

  // fetch data
  $post = mysqli_fetch_assoc($result);

//   var_dump($posts);

  // freeze result
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);
?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
        <h1><?php echo $post['title']; ?></h1>
        <small> Created At: <?php echo $post['created_at']; ?> By 
        <?php echo $post['author']; ?></small>
        <p><?php echo $post['body']; ?></p>
    </div>
<?php include('inc/footer.php'); ?>