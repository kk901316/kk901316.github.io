<html>
<head>
<title>Edit News</title>
<meta http-equiv="Content-Type" content="text/html; charset="iso"-8859-1">
</head>
<body>
<?php 
$id = $_GET['id'];
$a = $_GET['a'];

if(!isset($_GET['a']))
{    
  $link = mysqli_connect("localhost", "id2259253_jntweb", "jntweb", "id2259253_jntnews");
  if(!$link)
  {
    echo('Error connecting to the database: ' . mysqli_error($link)());
    exit();
  }   

  $query = "SELECT id, headline, timestamp FROM news ORDER BY timestamp DESC";
  $result = $link->query($query);
  if(!$result)
  {
    echo('Error selecting news: ' . mysqli_error($link)());
    exit();
  }
  $num_rows = $result->num_rows;
  if ($num_rows > 0)
  {
    echo('<br>');
    while($row = mysqli_fetch_assoc($result))
    {
      echo('
      <font size="-1"><b>'.$row['headline'].'</b><i>'.$row['timestamp'].'</i></font>
      <font size="-2"><a href="edit.php?a=edit&id='.$row['id'].'">edit</a> | 
      <a href="edit.php?a=delete&id='.$row['id'].'">delete</a></font><br>
      '); 
    }
  }
  else
  {
    echo('<font size="-2">No news in the database</font>');
  }
  mysqli_close($link);

////////////////////////////////////////////////////////////////////////     mail  /////////////////////////////////////////////
  $link2 = mysqli_connect("localhost", "id2259253_jntweb", "jntweb", "id2259253_jntnews");
  if(!$link2)
  {
    echo('Error connecting to the database: ' . mysqli_error($link)());
    exit();
  }   
  $query = "SELECT name , mail , content FROM contact";
  $result2 = $link2->query($query);
  if(!$result2)
  {
    echo('Error selecting news: ' . mysqli_error($link)());
    exit();
  }
  $num_rows = $result2->num_rows;
  if ($num_rows > 0)
  {
    echo('<br>');
    while($row2 = mysqli_fetch_assoc($result2))
    {
     echo('<h1>Name: '.$row2['name'].'  content:  '.$row2['content'].' ,e-mail:  '.$row2['mail'].'</h1></br>'); 
    }
  }
  mysqli_close($link2);
}
elseif($a == 'edit')
{
  $link = mysqli_connect("localhost", "id2259253_jntweb", "jntweb", "id2259253_jntnews");
  if(!$link)
  {
    echo('Error connecting to the database: ' . mysqli_error($link)());
    exit();
  }   
  $query = "SELECT headline, story FROM news WHERE id = '$id'";
  $result = $link->query($query);
  if(!$result)
  {
    echo('Error selecting  item: ' . mysqli_error($link)());
    exit();
  }
  $row = mysqli_fetch_assoc($result)
?>
  <form name="form1" method="post" action="edit.php?a=update&id=<?php echo($id) ?>&update=1">
  <table width="50%" border="0" cellspacing="0" cellpadding="0">
  
    <tr> 
      <td>Headline</td>
      <td><input name="headline" type="text" id="headline" value="<?php $row['headline'] ?>"></td>
    </tr>
    <tr> 
      <td>News Story</td>
      <td><textarea name="story" id="story" value="<?php $row['story'] ?>"></textarea></td>
    </tr>
    <tr> 
      <td colspan="2"><div align="center">
          <input name="hiddenField" type="hidden" value="update">
          <input name="add" type="submit" id="add" value="Update">
        </div></td>
    </tr>
  </table>
  </form>
<?php
}
elseif($a == 'delete')
{
  $link = mysqli_connect("localhost", "id2259253_jntweb", "jntweb", "id2259253_jntnews");
  if(!$link)
  {
    echo('Error connecting to the database: ' . mysqli_error($link)());
    exit();
  }   
  $query = "DELETE FROM news WHERE id = ".$id;
  $result = $link->query($query);
  if(!$result)
  {
    echo('Error deleteing news item: ' . mysqli_error($link)());
    exit();
  }
  mysqli_close($link);
  echo('News item deleted.');
} 
else
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $headline = $_POST['headline'];
  $story = $_POST['story'];
  $link = mysqli_connect("localhost", "id2259253_jntweb", "jntweb", "id2259253_jntnews");
  $query = 'UPDATE news SET headline = "'.$headline.'", story = "'.$story.'", timestamp = NOW() WHERE id = '.$id;

  $result = $link->query($query);
  if(!$result)
  {
    echo('error');
    echo('Error updating news item: ' . mysqli_error($link)());
    exit();
  }
  else
  {
    mysqli_close($link);
    echo('Update successful!');
  }
}
?>

</body>
</html>