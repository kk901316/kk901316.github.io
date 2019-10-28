<html>
<head>
<title>Add News</title>
<meta http-equiv="Content-Type" content="text/html; charset="iso"-8859-1">
</head>
<body>
<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $headline = $_POST["headline"];
    $story = $_POST["story"];    

if(1){
   $link = mysqli_connect("localhost", "id2259253_jntweb", "jntweb", "id2259253_jntnews");
   if(!$link){
      echo('Error connecting to the database: ' . $mysql_error());
      exit();
   }
  
   
    ////////////////////////////////////////////////////////////////////
   $query = "INSERT INTO news(name, email, headline, story, timestamp)VALUES('$name', '$email', '$headline', '$story', NOW())";
   $result = $link->query($query);
   if(!$result){
      echo('Error adding news: '.mysql_error() );
      exit();
   }else{
   mysql_close($link);
   echo('<br>Success!<br><a href="add.html">Click here</a> to add more news.<br><a href="edit.php">Click here</a> to edit news.<br><a href="../index.php">Click here</a> to return to the main page.');
   }
}
else{
    echo('error');
 } ?>
</body>
</html>

