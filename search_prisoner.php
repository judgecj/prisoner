<?php include_once('include/connetion.php') ?>
<?php include_once('include/function.php') ?>
<?php


$book_name = $_POST['book_name'];
$sql = "select first_name , id from prisoner_p where first_name LIKE '$book_name%'";
$result = mysql_query($sql,$connetion);

while($row = mysql_fetch_array($result))
{
   $id = $row['id'];
    $firstname = $row['first_name'];

?>
    <a href="prisoner_profile.php?id=<?php echo $id ?>"><?php echo $firstname ?></a><br>

<?php  }?>