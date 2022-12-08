<?php
// echo $_GET['name']; //using superlobal $_GET
// echo $_GET['age']; //using superlobal $_GET

//downside of using $_GET => it displays every input on the url henc it is safer to use post because of security reasons
// to sanitize your input first assign the input to a variable then afterwards use filter_input method to sanitize them 
// this helps prevents attack such as XSS and SQL Inection
if(isset($_POST['submit'])){
    $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS); 
    $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_SPECIAL_CHARS);

}
echo $name; //using superlobal $POST after sanitization
echo $age; //using superlobal $_POST after sanitization
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