<?php
session_start(); // not necessary to start in all files you can just call it once more in other pages opened with header('Location: /my_path_to_my_php.php') 
 
if(isset($_SESSION['username'])){
    echo "<h1>Welcome Home ". $_SESSION['username'] ."</h1>";
    echo "<br/> <button><a href='/php-crash/logout.php'>Log-Out</a></button>";

}
else{
    echo "<h1>Welcome to our colony, Alien</h1>";
    echo "<a href='/php-crash/cookies.php'></a>";
}
?>