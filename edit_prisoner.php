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
    $prisoner_id   = $prisoner["id"];
}
else
{
    header("Location: index.php");
}



if(isset($_POST['btn_save_updates'])) {


    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];

    if ($imgFile) {
        $upload_dir = 'images/'; // upload directory
        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
        $userpic = rand(1000, 1000000) . "." . $imgExt;
        if (in_array($imgExt, $valid_extensions)) {
            if ($imgSize < 5000000) {
                unlink($upload_dir . $image);
                move_uploaded_file($tmp_dir, $upload_dir . $userpic);
            } else {
                $errMSG = "Sorry, your file is too large it should be less then 5MB";
            }
        } else {
            $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    } else {
        // if no image selected the old image remain as it is.
        $userpic = $image; // old image from database
    }
}



    ?>
<style type="text/css">
 body{
     background: #c7ddef;
 }
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <h3 style="position: relative;left: 400px;top: 5px"><b> Edit prisoner  <?php echo "<a href=\"prisoner_profile.php?id={$id}\" style=\"margin-right: 40px;\"> Profile  </a>"; ?></b></h3>
            <div class="row" style="position: relative;left:50px">
                <div class="col-md-8">
                    <form method="post" action="" enctype="multipart/form-data" class="form-horizontal" style="position: relative;bottom: 60px">
                    <div style="width:350px;float:left;" align="left"><input name="id"  style="width:280px;" value="<?php echo $id?>" maxlength="8" type="text" hidden="hidden"></div><br clear="all" ><br clear="all">
                    <div style="width:200px; padding-top:0px;float:left;" align="left">	 First name <div>
                            <div style="width:350px;float:left;" align="left"><input name="first_name"  style="width:280px;" value="<?php echo  $first_name; ?>" maxlength="8" type="text"></div><br clear="all"><br clear="all">
                            <div style="width:200px; padding-top:0px;float:left;" align="left">	lastname:</div>
                            <div style="width:350px;float:left;" align="left"><input name="lastname"  placeholder="*******" class="vpb_textAreaBoxInputs" id="v_chasis" style="width:280px;" value="<?php echo  $last_name; ?>" maxlength="30" type="text"></div><br clear="all"><br clear="all">
                            <div style="width:200px; padding-top:0px;float:left;" align="left">Sex</div>
                            <div style="width:350px;float:left;" align="left">
                                <select name = "position">
                                    <option value="Male"> Male</option>
                                    <option value="Male"> Female</option>
                                </select>
                            </div>
                            <br>
                            <div style="width:200px; padding-top:0px;float:left;" align="left"> State of origin</div>
                            <div style="width:350px;float:left;" align="left"><input name="state_of_origin"   style="width:280px;" value="" maxlength="30" type="text"></div><br clear="all"><br clear="all">
                            <div style="width:200px; padding-top:0px;float:left;" align="left">Cell id</div>

                            <div style="width:350px;float:left;" align="left">
                                <input name="cell_id" style="width:280px;" value="<?php echo  $cell_id; ?>" maxlength="30" type="text">
                                  cells
                                <select name = "cell_id">

                                    <?php
                                    $cells_set = get_all_cells();
                                    $set_cells_count = mysql_num_rows( $cells_set);
                                    for ($count=1; $count <= $set_cells_count; $count++) {
                                        echo "<option value=\"{$count}\">{$count} </option>";
                                    }
                                    ?>
                                </select>
                            </div><br clear="all"><br clear="all">

                            <div style="width:200px; padding-top:0px;float:left;" align="left">Age</div>
                            <div style="width:350px;float:left;" align="left"><input name="age"  style="width:280px;" value="" maxlength="30" type="text"></div><br clear="all"><br clear="all">
                            <div style="width:200px; padding-top:0px;float:left;" align="left">Prisoner Number</div>
                            <div style="width:350px;float:left;" align="left"><input name="number"  style="width:280px;" value="<?php echo  $number; ?>" maxlength="30" type="text"></div><br clear="all"><br clear="all">
                        </div>
                        <button   class="btn btn-primary" class="btn btn-default" type="submit" name="btn_save_updates"> submit</button> <a href="index.php" class="btn btn-warning"> back </a>


                </div>
               </div>
                   <div class="col-md-4">
                        <div class="col-md-4">
                            <img src="images/<?php echo  $image; ?>" class="img-rounded" width="150px" height="150px" />
                            <input class="input-group" type="file" name="user_image" accept="image/*" />

                     </div>
                  </div>
                </form>
            </div>
        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                </div>
           </div>
        </div><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->