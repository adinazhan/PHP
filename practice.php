<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- 
<p>First name: <?php  $first_name="Adina"; echo $first_name?></p> 
<p>Surname: <?php $surname="Zhan";echo $surname;?></p>  -->


<?php 

function headline($text, $type=1)
{
    return "<h$type>$text</h$>";
 
}
echo headline("tom",3);



?>
</body>
</html>