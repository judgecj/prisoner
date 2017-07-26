<?php include_once('include/connetion.php') ?>
<?php include_once('include/function.php') ?>
<?php include("auth.php"); //include auth.php file on all secure pages ?>
<?php include_once('header.php') ?>
<?php include_once('include/nav.php') ?>
<?php
 $build_id = isset($_GET["id"])?$_GET["id"]:"";

$query = "SELECT * FROM buildings WHERE id={$build_id}";
$set_build = mysql_query($query, $connetion);
if(!$set_build){
    die("not connetion to mysql" . mysql_error( ));
}

$build =mysql_fetch_array($set_build);

?>
    <style xmlns="http://www.w3.org/1999/html">
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
    </style>
    <div class="container" style="height: auto">
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
                                    <td>  <?php echo $build["name"] ?></td>
                                </tr>

                                <tr>
                                    <th> Year of construction</th>
                                    <td> 20002/22/22</td>
                                </tr>

                                <tr>
                                    <th> head of department</th>
                                    <td> Simon </td>
                                </tr>

                                <tr>
                                    <th> Head of staff</th>
                                    <td>Okafor</td>
                                </tr>

                                <tr>
                                    <th>
                                       <?php echo "<a href=\"edit_build.php?id={$build_id}\" style=\"margin-right: 40px;\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-pencil\"></span> Edit</a> "; ?>
                                        <a href="add_cell"></a>
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                                            <span class="glyphicon glyphicon-plus"></span > Add New Cell</button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="text-align: center">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel" >Add Cell</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="post" action="add_cell.php" enctype="multipart/form-data" class="form-horizontal">

                                                            <div style="width: 80%;position: relative;left: 30px">
                                                                <input type="text"name="build_id" value="<?php echo $build_id;  ?>" hidden="hidden">

                                                                <div class="form-group">
                                                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="position" placeholder="Position">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div style="position: relative;right: 350px">
                                                                    <button type="submit" class="btn btn-primary" >Save changes</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="row" style='position:relative;left: 30px '>
                        <?php
                        $build_id = $_GET["id"];
                         $celles_set =  set_celle_build_id($build_id);
                        while ($cell = mysql_fetch_array( $celles_set )) {

                           ?>
                                  <div class="col-lg-4" >

                                      <div class="dropdown">
                                          <a class="btn btn-default btn-xs dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span class="glyphicon glyphicon-th-list" style="font-size:110px;  "></span>
                                          <a>
                                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                              <li><a data-toggle="modal" href="#myunit2-<?php echo $cell_id = $cell["id"];  ?>"><span class="glyphicon glyphicon-pencil"></span> Edit cell</a></li>
                                              <li><a data-toggle="modal" href="#myunit-<?php echo $cell_id = $cell["id"];  ?>"><span class="glyphicon glyphicon-eye-open"></span> Prisoner</a></li>
                                              <li><a data-toggle="modal" href="#myunit1-<?php echo $cell_id = $cell["id"];  ?>"><span class="glyphicon glyphicon-plus"></span> Add prisoner</a></li>
                                          </ul>
                                      </div>
                                           <h2>  Cell <?php echo $cell["name"];  ?></h2>
                                                </div><!-- /.col-lg-4 -->
                                                     <div class="modal fade" id="myunit-<?php echo $cell_id = $cell["id"];  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" ><b style="position: relative;left:5%;color: forestgreen">Prisoner in <?php echo  $cell_id ?></b> </h4>
                                                          </div>
                                                          <div class="modal-body">
                                                              <div class="row">
                                                                  <?php
                                                                    $set_prisoner  = set_prisoner_p_cell_id($cell_id);
                                                                    while ($prisoner = mysql_fetch_array($set_prisoner )) {
                                                                  ?>
                                                                            <div class="col-lg-4">
                                                                                <img src="images/<?php echo $prisoner['image']; ?>" class="img-rounded" width="150px" height="150px" />
                                                                              <p> first name : <small><?php echo $prisoner['first_name'];  ?> </small><br>
                                                                                   last name : <small>    <?php echo $prisoner['lastname'];  ?></small></p>
                                                                              <?php echo "<a href=\"edit_prisoner.php?id={$prisoner["id"]}\" style=\"margin-right: 40px;\">Edit Prisoner</a>"; ?>
                                                                            </div><!-- /.col-lg-4 -->
                                                                    <?php } ?>
                                                                </div><!-- /.row -->
                                                          </div>
                                                        </div><!-- /.modal-content -->
                                                      </div><!-- /.modal-dialog -->
                                                    </div><!-- /.modal -->
                                                                                                                                                                                                       <!-- Modal -->
                                                    <div class="modal fade" id="myunit1-<?php echo $cell_id = $cell["id"];  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                    <h4 class="modal-title" id="myModalLabel">prisoner Details</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-8">
                                                                            <form method="post" action="process_prisoner.php" enctype="multipart/form-data" class="form-horizontal">
                                                                                <div style="position: relative;left: 20px">
                                                                                    <br>
                                                                                    <div style="width:350px;float:left;" align="left"><input name="id"  style="width:280px;" value="<?php echo $cell["id"] ?>" maxlength="8" type="text" hidden="hidden"></div><br clear="all"><br clear="all">
                                                                                    <div style="width:200px; padding-top:0px;float:left;" align="left">	 First name <div>
                                                                                            <div style="width:350px;float:left;" align="left"><input name="first_name"  style="width:280px;" value="" maxlength="8" type="text"></div><br clear="all"><br clear="all">
                                                                                            <div style="width:200px; padding-top:0px;float:left;" align="left">	lastname:</div>
                                                                                            <div style="width:350px;float:left;" align="left"><input name="lastname" class="vpb_textAreaBoxInputs" id="v_chasis" style="width:280px;" value="" maxlength="30" type="text"></div><br clear="all"><br clear="all">
                                                                                            <div style="width:200px; padding-top:0px;float:left;" align="left">Sex</div>
                                                                                            <div style="width:350px;float:left;" align="left">
                                                                                                <select name = "position">
                                                                                                    <option value="Male"> Male</option>
                                                                                                    <option value="Male"> Female</option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <br>
                                                                                            <br>
                                                                                            <div style="width:200px; padding-top:0px;float:left;" align="left"> State of origin</div>
                                                                                            <div style="width:350px;float:left;" align="left"><input name="state_of_origin"   style="width:280px;" value="" maxlength="30" type="text"></div><br clear="all"><br clear="all">
                                                                                            <div style="width:200px; padding-top:0px;float:left;" align="left">Number</div>
                                                                                            <div style="width:350px;float:left;" align="left"><input name="number"  style="width:280px;" value="" maxlength="30" type="text"></div><br clear="all"><br clear="all">

                                                                                        </div>

                                                                                        <br>
                                                                                    </div><br clear="all"><br clear="all">
                                                                                </div>
                                                                        </div>

                                                                        <div class="col-md-4">
                                                                            <div style="width:200px;" align="left">Image</div>
                                                                            <div style="position: relative;right: 30px"><input class="input-group" type="file" name="user_image" accept="image/*" />
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit"  class="btn btn-primary" class="btn btn-default" type="submit" name="btnsave">Close</button>
                                                                    <button type="button" class="btn btn-default">Save changes</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myunit2-<?php echo $cell_id = $cell["id"];  ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                        <h4 class="modal-title" id="myModalLabel">Edit Cell <?php echo $cell_id = $cell["name"];  ?></h4>
                                                                    </div>
                                                                    <div class="modal-body">

                                                                        <form method="post" action="process_prisoner.php" enctype="multipart/form-data" class="form-horizontal">

                                                                            <div style="width: 80%;position: relative;left: 30px">
                                                                                <input type="text"name="id" value="<?php echo $cell_id = $cell["id"];  ?>" hidden="hidden">

                                                                                <div class="form-group">
                                                                                    <b>Name</b>
                                                                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="<?php echo $cell_id = $cell["name"];  ?>" placeholder="name">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <b>Block</b>
                                                                                    <input type="text" class="form-control" name="block_id" placeholder="block_id" value="<?php echo $cell_id = $cell["block_id"];  ?>">
                                                                                </div>
                                                                           </div>

                                                                            <div class="modal-footer">
                                                                                <div style="position: relative;right: 350px">
                                                                                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                          <?php } ?>

                    </div><!-- /.row -->
                      <!-- /.row -->

                </div>

            </div><!-- /.blog-main -->

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar" style="height: 480px">
                <div class="sidebar-module sidebar-module-inset" >
                               <h4>Archives</h4>
                    <table class="table table-condensed">
                        <tr class="info">
                            <a class="btn btn-primary btn-xs" href="index.php" style="font-size: larger"> <span class="glyphicon glyphicon-home">Back</span> </a>
                            <hr>
                            <a class="btn btn-primary btn-xs" href="index.php" style="font-size: larger"> <span class="glyphicon glyphicon-search">Search Cell</span> </a>
                        </tr>
                    </table>
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