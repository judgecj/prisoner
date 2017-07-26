<?php include_once('include/connetion.php') ?>
<?php include_once('include/function.php') ?>
<?php include("auth.php"); //include auth.php file on all secure pages ?>
<?php include_once('header.php') ?>
<?php include_once('include/nav.php') ?>
<?php
   $build_id = $_GET["id"];

?>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}
        .grey_rounded_withborder {
            width: 80%;
            border:1px solid #cccccc;
            background-color: #f8f8f8;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            position: relative;
            padding: 10px;
            position: relative;
            left: 30px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <div class="jumbotron" style="padding: 10px">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="asset/12062Z21y3g.jpg"  width="330px" height="200px" />
                        </div>
                        <div class="col-md-6">

                            <table>
                                <tr>
                                    <th> Name</th>
                                    <td> black A</td>
                                </tr>

                                <tr>
                                    <th> Year of constrotion</th>
                                    <td> 20002/22/22</td>
                                </tr>

                                <tr>
                                    <th> head of department</th>
                                    <td> Game boy </td>
                                </tr>

                                <tr>
                                    <th> Staff in working there</th>
                                    <td><?php echo $build_id; ?></td>
                                </tr>

                                <tr>

                                    <td><?php echo "<a href=\"cells.php?id={$build_id}\" style=\"margin-right: 40px;\">Edit</a>"; ?></td>
                                </tr>



                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="row" style='position:relative;left: 30px '>


                        <?php
                        $build_id = $_GET["id"];


                        ?>
                        <div class="grey_rounded_withborder">

                            <h2 style="color:#cc6622; font-size:18pt; font-weight: normal;"><u> Build Details</u></h2>
                            <br>
                            <form method="post" action="block_process.php" enctype="multipart/form-data" class="form-horizontal">

                                <div style="width: 80%;position: relative;left: 30px">


                                    <div class="form-group">
                                        <b>Name</b>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="" placeholder="Black name">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <div style="position: relative;right: 350px">
                                        <button  class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="edit_submit" class="btn btn-primary">Edit changes</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div><!-- /.row -->
                    <!-- /.row -->
                </div>
            </div><!-- /.blog-main -->

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>About <small>Face to Face</small></h4>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
                <div class="sidebar-module">
                    <h4>Archives</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </div><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </div><!-- /.container -->


<?php include_once('footer.php') ?>