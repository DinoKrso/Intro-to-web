<?php 
function averageTemp($temperatures){
    $count = count($temperatures) ;
    $sum = array_sum($temperatures) ;
    $average = $sum / $count ;
    return $average ;
}

function lowestTemp($temperatures){
    $lowest = min($temperatures);
    return  $lowest ;
}

function highestTemp($temperatures){
    $highest = max($temperatures) ;
    return $highest ;
}

$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average_temperature = averageTemp($temperatures);
$lowest_temperature = lowestTemp($temperatures);
$highest_temperature = highestTemp($temperatures);

echo "Average temperature: " . $average_temperature . "<br>";
echo "Lowest temperature: " . $lowest_temperature . "<br>";
echo "Highest temperature: " . $highest_temperature . "<br>";


$towns = array(
    "Sarajevo" => 71000 ,
    "Mostar" => 88000,
    "Tuzla" => 75000,
    "Zenica" => 72000
);
echo "Starting array :  <br>" ;
foreach($towns as $x => $x_value){
    
    echo "Key= " . $x . ", Value = " .$x_value ;
    echo "<br>" ;
}
$towns["Sarajevo"] = "capital" ;
$towns["Banjaluka"] = 78000 ;
echo "Updated array :  <br>" ;
foreach($towns as $x => $x_value){
    echo "Key= " . $x . ", Value = " .$x_value ;
    echo "<br>" ;
}
$name = $_POST["name"];
$age = $_POST["age"];
echo "My name is " . $name . " and I am " . $age . " years old.";
?>

