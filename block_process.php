<?php include_once('include/connetion.php') ?>
<?php include_once('include/function.php') ?>



<?php

    if(!isset($_POST["submit"])) {
        $name = $_POST['name'];

        $query = "INSERT INTO buildings ". "(id , name, date) ". "VALUES  ('', '$name' ,'')";

    $insert_user  = mysql_query( $query, $connetion );
    if ( $insert_user) {
    // SUCCESS
    header( "Location: index.php");

    }else{
    echo "<p>". mysql_error()."</p>";
    echo "not successful save";

    }

    }



    ?>
<?php

