<?php include_once('include/connetion.php') ?>
<?php include_once('include/function.php') ?>
<?php include("auth.php"); //include auth.php file on all secure pages ?>
<?php include_once('header.php') ?>
<?php include_once('include/nav.php') ?>

    <div class="container" style="height: 460px">
        <div class="row">

            <div class="col-sm-8 blog-main">

                <div class="row" >
                    <div>
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->

                        </div>
                    </div>
                    <hr>


                        <div class="row">
                            <div class="col-xs-6">
                                <div style="background: #F1F1F1;height: auto;width: auto;text-align: center">
                                            <b>All Black</b>
                                    <br>

                                <?php
                                    $subject_set =get_all_buildings();
                                     while ($subject = mysql_fetch_array( $subject_set)) {
                                         ?>
                                         <a  class="btn btn-primary " href="cells.php?id=<?php echo$subject["id"];?>"><small class="glyphicon glyphicon-home"style="font-size: x-large" ></small><br>
                                             <?php echo$subject["name"];  ?>
                                         </a>
                                  <?php }?>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div style="background: #F1F1F1;height: auto;width: auto;text-align: center">
                                    <b>Navigation</b>
                                    <br>
                                    <button type="button"  class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal1">
                                        Add New Block
                                    </button>
                                    <a  href="allprisoner.php"  class="btn btn-primary btn-lg btn-block" >
                                       See All Prisoner
                                    </a>
                                    <button type="button"  class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                                        Search Prosoner
                                    </button>
                                    <a  href="form_for_user.php"  class="btn btn-primary btn-lg btn-block" >
                                        Add New User
                                    </a>



                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                                </div>
                                                <div class="modal-body">

                                                    <form class="well-home span6 form-horizontal" name="ajax-demo" id="ajax-demo">
                                                        <div class="control-group">
                                                            <label class="control-label" for="book">Prisoner</label>
                                                            <div class="controls">
                                                                <input type="text" id="book" onKeyUp="book_suggestion()">
                                                                <div id="suggestion"></div>
                                                            </div>
                                                        </div>
                                                        <div class="control-group">
                                                            <div class="controls">
                                                                <button type="submit" class="btn btn-success">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <script>
                                                        function book_suggestion()
                                                        {
                                                            var book = document.getElementById("book").value;
                                                            var xhr;
                                                            if (window.XMLHttpRequest) { // Mozilla, Safari, ...
                                                                xhr = new XMLHttpRequest();
                                                            } else if (window.ActiveXObject) { // IE 8 and older
                                                                xhr = new ActiveXObject("Microsoft.XMLHTTP");
                                                            }
                                                            var data = "book_name=" + book;
                                                            xhr.open("POST", "search_prisoner.php", true);
                                                            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                                            xhr.send(data);
                                                            xhr.onreadystatechange = display_data;
                                                            function display_data() {
                                                                if (xhr.readyState == 4) {
                                                                    if (xhr.status == 200) {
                                                                        //alert(xhr.responseText);
                                                                        document.getElementById("suggestion").innerHTML = xhr.responseText;
                                                                    } else {
                                                                        alert('There was a problem with the request.');
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    </script>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Add New Black</h4>
                                                </div>
                                                <div class="modal-body">
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
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                </div>
            </div><!-- /.blog-main -->

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="col-sm-6 col-md-4">
                    <div style="width: 250px;height: auto">
                        <h3 style="text-align: center"> Wanted </h3>
                        <b>Reward: 100.000.00</b>
                        <img src="asset/9362P1Fqq.jpg" style="height: 200px;width: 250px">
                        <div class="caption">
                            <h4>Name: <small>Eket Simon</small></h4>

                        </div>
                    </div>
                    <hr style="background: forestgreen;width: 230px">

                </div>

            </div><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </div><!-- /.container -->


<?php include_once('footer.php') ?>