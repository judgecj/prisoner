<?php include_once('include/connetion.php') ?>
<?php include_once('include/function.php') ?>
<?php include("auth.php"); //include auth.php file on all secure pages ?>
<?php include_once('header.php') ?>
<?php include_once('include/nav.php') ?>




<div style="width: 60%;position: relative;left: 210px">
    <div class="jumbotron" style="padding-left: 20px">
        <h4 style="text-align: center">
            All Prisoners
        </h4>
        <hr>
        <?php
        $prisoners_set  = get_all_prisoner();
        while ($prisoner = mysql_fetch_array($prisoners_set )) {

            ?>
        <div class="row">
            <div class="col-md-8">

                <table class="table table-condensed">
                    <tr  style="margin-bottom: 20px">
                        <td class="active" style="width: 300px">First name</td>
                        <td class="active" style="width: 300px;text-align: center"> <?php echo $prisoner["first_name"]; ?></td>
                    </tr>
                    <tr >
                        <td class="warning" style="width: 300px"> Last name</td>
                        <td class="active" style="width: 300px;text-align: center" >  <?php echo $prisoner["lastname"]; ?></td>
                    </tr>
                    <tr >
                        <td class="warning" style="width: 300px">  Age</td>
                        <td class="active" style="width: 300px;text-align: center" >  3-4-1960 </td>
                    </tr>
                    <tr >
                        <td class="warning" style="width: 300px"> Cell Id </td>
                        <td class="active" style="width: 300px;text-align: center" >   <?php echo $prisoner["cell_id"]; ?> </td>
                    </tr>
                    <tr >
                        <td class="warning" style="width: 300px"> Cell Number</td>
                        <td class="active" style="width: 300px;text-align: center" >   <?php echo $prisoner["number"]; ?> </td>
                    </tr>
                </table>


            </div>
            <div class="col-md-4">
                <img src="images/<?php echo  $prisoner["image"] ?>" class="img-rounded" width="150px" height="150px" />
            </div>
        </div>
        <?php } ?>
        <button class="btn btn-primary"> Print</button><a href="index.php"> Back</a>
    </div>
</div>