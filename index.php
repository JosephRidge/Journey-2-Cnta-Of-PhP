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

// handling arrays 
$fruits = ['apples','tomatoes','pawpaw','pineapple','banana'];

// read elemensts lenght
$size = count($fruits);
echo "<br> <hr> <h1>We currently have ${size} fruits</h1> <hr>";


// search for element in array => returns predicate if the item exists it returns Boolean value 1 and if it does not it returns nothing
$exists = in_array("banana",$fruits); // first parameteris what we are searching th other is the target array
echo $exists; 

// add items to array 
$fruits[] = 'mangoes'; // adds item to the last index in array
array_push($fruits,'oranges'); // adds as last element
array_unshift($fruits, "avocado"); // adds item to the first index


// delete ites(s)
array_pop($fruits); // removes last index
array_shift($fruits); // removes element from beginning 
unset($fruits[2]); // removes element from particular index in this case index 2 including the index itself hence it will it the target index was 2 then the available indexes will be 0,1,3,4,5 ..

$vegetables = ["tomatoes","cabbage", "dhania","potatoes","Osuga"];

// breaking arrays into groups of  2 or more #chunking
$chunked_array = array_chunk($fruits,2);
foreach($chunked_array as $chunk){
    foreach($chunk as $index => $chunk_a){
    echo "== > $index : ${chunk_a}";
    }
};

// combining two or more arrays 
$food = array_merge($fruits,$vegetables); //approach one
foreach($food as $f){
    echo "<h3>${f} </h3> <hr>";
};

$food2 = [...$fruits,...$vegetables]; // using spread => really cool
foreach($food2 as $f){
    echo "<h3>=> ${f} </h3> <hr>";
};
$count1 = count($fruits);
$count2 = count($vegetables);
echo "$count1 & $count2";

// this approach will only work if the two arrays have saiilar size
$food3 = array_combine($fruits,$vegetables);
foreach($food3 as $key => $f){
    echo "<h4> **$key :  ${f} ** </h4> <hr>";
};

// reversing the key value making the keys values and values keys .. i know 🤯
// combine more than one array
$the_revers = array_flip($food3) ;
foreach($the_revers as $key => $f){
    echo "<h4> $key 🤯  ${f}  </h4> <hr>";
};

foreach($fruits as $fruit){
    echo "<h2>${fruit} </h2>";
};

print_r($_SERVER) ;

?>