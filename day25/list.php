<?php
require_once "DBBlackbox.php";

$selection = select();
var_dump($selection);

foreach ($selection as $value)
{
   $movie_name=$value["title"] ?? "Not Available"; 
   echo "<li>" .$movie_name."</li>";  
}
echo "<ul>";


// echo "<ul>";
// foreach ($selection as $value) {    
//     if ($value["title"])
//     {
//     echo   
// "<li>" .$value["title"]."</li>";  
//     }   
//     else 
//     {
//     echo "Not Available";
//     }
// }
// echo "<ul>";
// echo "<ul>;"