<!DOCTYPE html>
<?php require('db_config.php'); ?>
<?php
    $insert=FALSE;
    if(isset($_POST['name'])){
   // echo "Connection to DB a success";
    $name=$_POST['name'];
    $topic=$_POST['topic'];
    $blog=$_POST['blog'];
    $sql = "INSERT INTO `blog`.`blog` ( `name`, `topic`, `blog`, `dt`) VALUES ( '$name', '$topic', '$blog', CURRENT_TIMESTAMP)";
    //echo $sql;

    if($con->query($sql)==TRUE){
       // echo "Successful";
       $insert=true;
    }
    else{
        echo "ERROR :$sql <br> $con->error";

}

    $con->close();


    }
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
        <h1>
            Welcome, to the blog site.
        </h1>
        <p>
            Feel free to let it out.
        <?php
            if($insert==true){
                echo "<p class='submitMsg'>Thankyou to let us know your thoughts</p>";
            }
        ?>
        <form action="index.php" method="post">
            <input type="text" name ="name" id="name" placeholder="Please enter your name/pen name" required>
            <input type="text" name ="topic" id="topic" placeholder="The topic you'd like to write on" required>
            <textarea name="blog" id="blog" cols= "100" rows="10" placeholder="Write your thoughts here." required></textarea>
            <button class="btn">Post Blog</button>

        </form>
        <button onclick="window.location.href='view_all.php'">View All posts</button>
    </div>
    <script src="index.js">

    </script>
</body>
</html>
