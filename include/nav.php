 <?php    $id = $_SESSION["user_id"];  ?>
 <?php  $name  =  $id = $_SESSION["username"];  ?>
<div style="margin-bottom: 70px">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#"><b>Nigeria Prison Services, Amawbia, Awka.</b></a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li><a style="margin-right: 5px;"><span class="glyphicon glyphicon-user" ><?php echo $name ?></span></a></li>
                <li ><a href="logout.php"><span class="glyphicon glyphicon-log-out" ></span>Sign out </a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
</div>