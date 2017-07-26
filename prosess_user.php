 <?php include_once('include/connetion.php') ?>
   <?php include_once('include/function.php') ?>

<?php 


     if(!isset($_POST["submit"])){ 
             $username= $_POST["username"];
        	    $password= $_POST["password"];
               $email = $_POST["email"];
             $hashed_password  =  sha1($password);

         $query = "INSERT INTO users "."(`id`,`username`,`hashed_password`,`email`)". " VALUES('','{$username}',
          '{$hashed_password}','{$email}')";
       
           $insert_user  = mysql_query( $query, $connetion );
           if ( $insert_user) {
        // SUCCESS
           header( "Location: index.php");

           }else{
              echo "<p>". mysql_error()."</p>";
             echo "not successful save";
          
          }

       }else {
       	  $username = "";
       	  $password = "";
       }



 ?>