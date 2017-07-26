

<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: log_in.php"); // Redirecting To Home Page
}
?>