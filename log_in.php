 <?php include_once('include/connetion.php') ?>
   <?php include_once('include/function.php') ?>
     <?php include_once('header.php') ?>
    <?php include_once('include/nav1.php') ?>
 <style type="text/css">
     body{
         background: url("asset/prison4.jpg");
     }
 </style>
<?php


 session_start();
 // If form submitted, insert values into the database.
 if (isset($_POST['username'])){
 $username = $_POST['username'];
 $password = $_POST['password'];
 $username = stripslashes($username);
 $username = mysql_real_escape_string($username);
 $password = stripslashes($password);
 $password = mysql_real_escape_string($password);

  $hashed_password  =  sha1($password);
 //Checking is user existing in the database or not
 $query = "SELECT * FROM `users` WHERE email='{$username}' and hashed_password='{$hashed_password}'";
 $result = mysql_query($query, $connetion) or die(mysql_error());
 $rows = mysql_num_rows($result);

 if($rows==1){
  $user = mysql_fetch_array($result);
 $_SESSION['username'] = $user['username'];
 $_SESSION['user_id'] = $user['id'];

 
 header("Location: index.php"); // Redirect user to index.php
 }else{

 echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
   }
 }
?>

     <div class="row" style="height: 460px;position: relative;top:50px">
         <div class="col-md-4"></div>
         <div class="col-md-4">



                 <form class="form-signin" action="" method="post" name="login">
                     <h2 class="form-signin-heading" style="color: floralwhite;text-align: center" > Sign in</h2>
                     <label for="inputEmail" class="sr-only">Email address</label>
                     <input type="email" name="username"  id="inputEmail" class="form-control" placeholder="Email  address" >
                     <br>
                     <label for="inputPassword" class="sr-only">Password</label>
                     <input type="password"  name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                     <div class="checkbox">
                         <label>
                             <input type="checkbox" name="submit"  value="remember-me"> Remember me
                         </label>
                     </div>
                     <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                 </form>


         </div>
         <div class="col-md-4"></div>
     </div>



<?php ?>
 <?php include_once('footer.php') ?>

