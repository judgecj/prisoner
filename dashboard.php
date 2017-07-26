<div class="row">
    <div class="col-md-3">.col-md-3</div>
    <div class="col-md-6">
        <?php
        $query = "SELECT * FROM users WHERE id={$_GET["id"]}";
        $set_article = mysql_query($query, $connetion);
        if(!$set_article){
            die("not connetion to mysql" . mysql_error( ));
        }
        $article=mysql_fetch_array($set_article);
        if($article==true){
            echo "<form action=\"edit_process.php\" method=\"post\">".
                "<label>ID :</lable><input type=\"text\" name=\"id\" value=\"{$article["id"]}\"/><br><br>".
                "<label>TITLE :</lable><input type=\"text\" name=\"title\" value=\"{$article["email"]}\"/><br><br>".
                "<label>BODY :</lable><textarea name=\"body\"></textarea><br><br>".
                "<input type=\"submit\" name=\"edit\" value=\"Edit Page\"/><br><br>";
        }
        ?>

    </div>
    <div class="col-md-3">
        <ul class="nav nav-pills" role="tablist">
            <li role="presentation"><a href="index.php">Forum</a></li>
            <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
        </ul>
    </div>
</div>