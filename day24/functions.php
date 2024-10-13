<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- Default argument values #1  -->
<?php

// function element($element,$innerhtml='',$attributes='')
// {
// return "<$element class= $attributes>$innerhtml</$element>";

// }

// echo element("p","my name", "goose");

?>

<!-- Default argument values #2 -->

<?php

// function convert_weight($value, $unit="kg")
// {
//     if ($unit="kg"){
// return $value*0.45;
//     }
// else {
//     return $value/0.45;
// }

// }  

// echo convert_weight(15,"lb")

?>

<!-- Exercise: Arrays #1 -->

<?php 

// $cars_i_want = [];  
// $cars_i_want[]='Aston Martin';
// $cars_i_want[]='Bugatti';
// $cars_i_want[]='Ferrari';
// $cars_i_want[]='Lamborghini';
// $cars_i_want[]='Maserati';
// $cars_i_want[]='Mercedes';
// $cars_i_want[]='Porsche';
// $cars_i_want[]='Skoda';


// echo "For myself I would buy " .$cars_i_want[1]. "<br>";
// echo "For my spouse I would buy " .$cars_i_want[3]. "<br>";

// $cars_i_want[4]="Smart";

// var_dump($cars_i_want);
// echo "Each of my kids will get a " .$cars_i_want[4]."<br>";

// echo "<br>";

// echo '<ul>';

// foreach($cars_i_want as $car_name)
// {

// echo "<li>" .$car_name. "</li>";

// }

// echo '</ul>';

// Associative arrays

// $car_prices = [
//     'Skoda Octavia' => 270000,
//     'Volkswagen Golf' => 170000,
//     'BMW X6' => 380000,
//     'Porsche 911' => 1150000
// ];


// echo "<p>You can have a Porsche for just " .$car_prices["Porsche 911"]."</p>";
// foreach ($car_prices as $car_name => $car_cost)
// {
//     echo "<p>You can have a " .$car_name. " for just " .$car_cost."</p><br>";
// }


// $students=[];
// $students[] = 'Thomas';
// $students[] = 'Kathy';
// $students[] = 'Eve';
// $students[] = 'Bernard';


// foreach($students as $student_name)
// {
// echo "<p>{$student_name}</p>";

// }

// $divisible_by_seven=[];

// for ($i=0; $i<=100; $i++)
// {
//     if ($i % 7 === 0)
// {
//     $divisible_by_seven[]=$i;
// }
// }
// var_dump ($divisible_by_seven);


// foreach ($divisible_by_seven as $number) 
// {
//     echo "<p>{$number}</p>";
// }

// $cast_crew = [];
// $cast_crew['cast'] = [];
// $cast_crew['cast'][] = 'John David Washington';
// $cast_crew['cast'][] = 'Robert Pattinson';
// $cast_crew['cast'][] = 'Elizabeth Debicki';
// $cast_crew['director'][] = 'Christopher Nolan';

// foreach($cast_crew['cast'] as $cast_name)
// {
// echo "<p>{$cast_name}</p>";
// }

// foreach($cast_crew as $cast_name)
// {
//     foreach ($cast_name as $cast_contributor)
//     {
//         echo "<p>{$cast_contributor}</p>";
//     }
// }


$cast_crew=[
    'actors'=>[],
    'directors'=>[],
];
$people = [
    [
        'name' => 'John David Washington',
        'job' => 'actor'
    ],
    [
        'name' => 'Robert Pattinson',
        'job' => 'actor'
    ],
    [
        'name' => 'Christopher Nolan',
        'job' => 'director'
    ],
    [
        'name' => 'Steven Spielberg',
        'job' => 'director'
    ],
    [
        'name' => 'Michael Caine',
        'job' => 'actor'
    ]
];

foreach($people as $person)
{
if ($person['job']==='actor')
{
    $cast_crew['actors'][]=$person['name'];
}
if ($person['job']==='director')
{
    $cast_crew['directors'][]=$person['name'];
}

}

var_dump($cast_crew['actors']);
var_dump($cast_crew['directors']);

?>
</body>
</html>