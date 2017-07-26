<?php 
   $connetion = mysql_connect( "localhost", "root", "" );
   if (!$connetion) {
   	die("not connetion to mysql" . mysql_error( ));
   }

   $select = mysql_select_db("prisoner", $connetion);
   if (!$select) {
   	die("not connetion to mysql" . mysql_error( ));
   }
?>