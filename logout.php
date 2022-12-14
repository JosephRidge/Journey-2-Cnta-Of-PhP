<?php
session_start();// question is why dow we have more than one deeclaration 
session_destroy(); // destroys current session
header("Location: /php-crash/cookies.php"); // redirects to home/ default landing page 
?>