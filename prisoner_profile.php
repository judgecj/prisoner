<?php include_once('include/connetion.php') ?>
<?php include_once('include/function.php') ?>
<?php include("auth.php"); //include auth.php file on all secure pages ?>
<?php include_once('header.php') ?>
<?php include_once('include/nav.php') ?>

<?php

if(isset($_GET['id']) && !empty($_GET['id']))
{
    $id = $_GET['id'];
    $query = "SELECT * FROM  prisoner_p WHERE id= $id";
    $set_prisoner = mysql_query($query, $connetion);
    if(!$set_prisoner){
        die("not connetion to mysql" . mysql_error( ));
    }
    $prisoner=mysql_fetch_array($set_prisoner);
    $first_name  =  $prisoner["first_name"];
    $last_name  = $prisoner["lastname"];
    $image =  $prisoner["image"];
    $cell_id =  $prisoner["cell_id"];
    $number    = $prisoner["number"];
    $image = $prisoner["image"];

}
else

?>

<div style="width: 60%;position: relative;left: 210px">
<div class="jumbotron" style="padding-left: 20px">
         <h4 style="position:relative;top:20px">
             Prisoner profile
         </h4>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <table class="table table-condensed">
                <tr  style="margin-bottom: 20px">
                   <td class="active" style="width: 300px">First name</td>
                    <td class="active" style="width: 300px;text-align: center"> <?php echo $first_name ?></td>
                </tr>
                <tr >
                    <td class="warning" style="width: 300px"> Last name</td>
                    <td class="active" style="width: 300px;text-align: center" >  <?php echo $last_name  ?></td>
                </tr>
                <tr >
                    <td class="warning" style="width: 300px">  Age</td>
                    <td class="active" style="width: 300px;text-align: center" >  3-4-1960 </td>
                </tr>
                <tr >
                    <td class="warning" style="width: 300px"> Cell Id </td>
                    <td class="active" style="width: 300px;text-align: center" >   <?php echo $cell_id ?> </td>
                </tr>
                <tr >
                    <td class="warning" style="width: 300px"> Cell Number</td>
                    <td class="active" style="width: 300px;text-align: center" >   <?php echo $number ?> </td>
                </tr>
            </table>

            <button class="btn btn-primary"> Print</button>
            <?php echo "<a href=\"cells.php?id={$cell_id}\" style=\"margin-right: 40px;\"> Back  </a>"; ?>
        </div>
        <div class="col-md-4">
            <img src="images/<?php echo  $image; ?>" class="img-rounded" width="150px" height="150px" />
        </div>
    </div>
</div>
</div>