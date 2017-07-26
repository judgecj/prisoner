<?php include_once('include/connetion.php') ?>
<?php include_once('include/function.php') ?>
<?php include("auth.php"); //include auth.php file on all secure pages ?>
<?php include_once('header.php') ?>
<?php include_once('include/nav.php') ?>

<style type="text/css">
    body{
        background: url("asset/prison4.jpg");
    }
</style>
     <?php


          $username = "";
          $password = "";
           $email = "";
      ?>

<div class="row" style="height: 460px;position: relative;top:50px">
    <div class="col-md-4"></div>
    <div class="col-md-4">



        <form action="prosess_user.php " method = "post">
            <h2 class="form-signin-heading" style="color: #fff;text-align: center">Add and Admin</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="text" name="username"  id="inputEmail" class="form-control" placeholder="Username" required autofocus value="<?php echo htmlentities($username) ; ?>" >
            <br>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email"  id="inputEmail" class="form-control" placeholder="Email  address" required autofocus value="<?php echo htmlentities($email) ; ?>">
            <br>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password"  name="password" id="inputPassword" class="form-control" placeholder="Password" required value="<?php echo htmlentities($password) ; ?>">
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit"> Add Admin</button>
        </form>


    </div>
    <div class="col-md-4"></div>
</div>



<?php include_once('footer.php') ?>
