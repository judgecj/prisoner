<?php include_once('include/connetion.php') ?>
<?php include_once('include/function.php') ?>

<?php


if(!isset($_POST["submit"])) {
    $build_id = $_POST["build_id"];
    $name = $_POST["name"];
    $position = $_POST["position"];

    echo $username, $password, $email;
    $hashed_password  =  sha1($password);

    $query = "INSERT INTO cells "."(`id`,`block_id`,`position`,`name`)". " VALUES('','{$build_id}',
          '{$position}','{$name}')";

   $insert_user  = mysql_query( $query, $connetion );
    if ( $insert_user) {
         // SUCCESS
        header( "Location: cells.php?id=". $build_id);

    }else{
         echo "<p>". mysql_error()."</p>";
       echo "not successful save";

  }

}



?>