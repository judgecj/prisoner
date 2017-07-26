<?php include_once('include/connetion.php') ?>
<?php include_once('include/function.php') ?>
<?php

if(isset($_POST['btnsave'])) {


    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];
    $id = $_POST["id"];
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $lastname = $_POST["lastname"];
    $sex = $_POST["position"];
    $soo = $_POST["state_of_origin"];
    $contact_number = $_POST["contact_number"];
    $cell_id = $_POST["cell_id"];
    $age = $_POST["age"];
    $number = $_POST["number"];
    if(empty($imgFile)){
        $errMSG = "Please Select Image File.";
    }


    $upload_dir = 'images/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

    // rename uploading image
    $userpic = rand(1000, 1000000) . "." . $imgExt;

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize < 5000000) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic);
        } else {
            $errMSG = "Sorry, your file is too large.";
        }
    } else {
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }

        $query = "INSERT INTO prisoner_p (id, first_name, lastname, cell_id , number, image) VALUES  ('', '{$first_name}',  '${lastname}',  {$id},  {$number}, '{$userpic}' )";
            $query_run = mysql_query($query,$connetion);
            if(!$query_run) {
                die("Could not update database table".mysql_error());
            }
            header("Location:index.php");





}
?>