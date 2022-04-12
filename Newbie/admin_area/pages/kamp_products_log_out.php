<?php
session_start();
if(session_destroy()) // Destroying all user sessions
{
header("Location: ../index.php"); // Redirecting user to home
}
?>
