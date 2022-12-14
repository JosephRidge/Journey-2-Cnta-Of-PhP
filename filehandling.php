<?php
// open file 
$file = "users.txt";
echo "<h1>Commencing file read </h1>";
 // read file contents 
if(file_exists($file)){
    // open file
    $handle = fopen($file, 'r'); 
    // read file details
    $content = fread($handle, filesize($file));
    echo "<h2>".$content."</h2>";
    // close file 
    fclose($handle);
}  

// write to the file 
$file= "user.txt";
if(file_exists($file)){ 
    // open file
    $handle = fopen($file, 'r'); 
    // read file details
    $content = fread($handle, filesize($file));
    echo "<h2>".$content."</h2>";
    // close file 
    fclose($handle);
} 
else{
    // open file again then read and close 
    $handle = fopen($file, 'w'); // second parameter is how the  file wil be opened eg write mode, append mode or read only mode 
    // what to write to the file or rather ocntent to be written
    $contents ='Hellow' . 'Jay R' . 'The World' . 'is' . 'your canvas!' ;
    // write to the file 
    fwrite($handle, $contents);    
    // close the file 
    fclose($handle); 
}
?>