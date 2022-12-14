<?php
// cookies are set using the setcookie() method

// setcookie('name','JayR', time()+86400);
// if(isset($_COOKIE['name'])){
//     echo $_COOKIE['name'];
// }
// echo"${name}";


// function to handle submit form 
if($_POST['submit']){
    $username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS); 
     $password = $_POST['password']; 
    // kindly note that passwords are not sanitized but hashed then saved to password 

     if($username == "Joseph Ridge" && $password == "password"){
        $_SESSION['username'] = $username;
        header('Location:/php-crash/welcome.php');  // the header() methos allows you to navigate from one php file to anothje ror rtaher enables routing 
   }
     else{
        echo"Wrong Credentials!";
     }
}
?>

<form 
action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div>
    <label for="username">Username: </label>
    <input type="text" name="username" id="username">
</div>
<div>
    <label for="password">Password : </label>
    <input type="text" name="password" id="password"type="password">
</div>
<button type="submit" value="Submit" name="submit">Submit</button>
</form> 