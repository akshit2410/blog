<!DOCTYPE html>
  <?php require('db_config.php'); ?>
<?php

    $sql = "SELECT * from `blog`.`blog`";
    $result = mysqli_query($con, $sql);
    $res = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //echo $sql;
    if(!($con->query($sql)==TRUE)){
        echo "ERROR :$sql <br> $con->error";
}
    $con->close();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog site.</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
      <table>
        <thead>
          <tr>
            <th>S.NO</th>
            <th>Name</th>
            <th>topic</th>
            <th>Blog</th>
          </tr>
        </thead>
        <tbody>
          <?php $sno = 0; ?>
          <?php foreach ($res as $key):?>
            <?php $sno=$sno+1; ?>
            <tr>
              <th><?php echo $sno ?></th>
              <th><?php echo $key['name'] ?></th>
              <th><?php echo $key['topic'] ?></th>
              <th><?php echo $key['blog'] ?></th>
            </tr>
        </tbody>
      <?php endforeach; ?>
      </table>
      <button onclick="window.location.href='index.php'">Back to home</button>
    <script src="index.js"></script>
</body>
</html>
