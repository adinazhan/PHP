<?php
require_once "DBBlackbox.php";
var_dump($_POST);
$data = $_POST;
// $movies = [
//     'title'=>$data['title'],
//     'year'=>$data['year'],
// ];
$id =insert($data);
echo "The movie ".$data['title']." was successfully saved into DB with ID".$id."<br>";
// echo "<a href='list.php'>Home</a>";
?>
