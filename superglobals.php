<?php
// echo $_GET['name']; //using superlobal $_GET
// echo $_GET['age']; //using superlobal $_GET

//downside of using $_GET => it displays every input on the url henc it is safer to use post because of security reasons

if(isset($_POST['submit'])){
echo $_POST['name']; //using superlobal $_GET
echo $_POST['age']; //using superlobal $_GET
}

?>


<form 
action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
    <label for="name">Name: </label>
    <input type="text" name="name" id="">
</div>
<div>
    <label for="age">Age: </label>
    <input type="text" name="age" id="">
</div>
<button type="submit" value="Submit" name="submit">Submit</button>
</form>