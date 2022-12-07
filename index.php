<?php 
// echo '09876543aswdefghu2dfsf';

$name = 'BosephRidge';
echo "${name}";
// conditional statements 
if($name === 'JosephRidge'){
    echo "Your name is ${name}";
}else{
    echo "Nothing at all";
}

//ternary operator 
$welcome_message = ($name === 'JosephRidge')?"Welcome home ${name}":"Welocme to PhP starter!";
echo $welcome_message;

//Coalescing Operator 

$welcome_home = $name[110]??"nop!";
echo "If your name starts with letter 'R', it will return 'R' but if not ==> 'nop!.. ";
echo "\nThe verdict is = = > ${welcome_home} < = =";


// switch statement

switch($name[0]){
    case 'J':
        echo "wuoohooo you are J!";
        break;
    case 'R':
        echo "Wuoohouu you are Reeeeeeeeeady!";
        break;
    case 'B':
        echo "<h1>I think you like bread</h1>";
        break;  
    default:
    echo "Wololo !";           
}

// forloop and foreach when it comes to arrays 
$my_array = ["a","b","c","d"];
$my_associative_array = 
    ['name' => 'John Doe',
    'email'=>'jdoe@gmail.com',
    'occupation' => 'TechFarmer'
    ];

for ($x=0;$x <= count($my_array); $x++){
    echo $x . $my_array[$x];
}

foreach($my_array as $val){
    echo "<h1>${val}</h1><br>"; 
}
foreach($my_associative_array as $key => $val)
{
    echo "<h2>${key} : ${val}</h2><br>";
}

// functions and scopes
//variable declared globally 
 $y ="Hello JayR!";

function greetings(){
    global $y;
    echo "Good Afternoon great Lad! 😎<br>";
    echo $y;
}

greetings();

function sayHellow($name ="user"){
    echo "Hey ${name}, hawya doing? ";
}

sayHellow("JayR");// takes users params
sayHellow(); // takes default param value

function addition($n1, $n2){
    return $n1 + $n2;
}

$sum = addition(10,59);
echo "SUM : ${sum}";

// shortened function 
$sum2 = fn($n1,$n2)=> $n1 + $n2; 
echo " SUM2 :". $sum2(1,2);
?>
