<?php

#Q1

$colors = array('red', 'green', 'white');

$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: 
    the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. 
    The new president and his first lady. - Richard M. Nixon";

echo $paragraph;

echo "<br>";
echo "<br>";


#Q2

$colors = array('white', 'green', 'red');

echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";

echo "<br>";
echo "<br>";


#Q3

$cities = array(
    "Italy" => "Rome", 
    "Luxembourg" => "Luxembourg", 
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", 
    "Finland" => "Helsinki", 
    "France" => "Paris",
    "Slovakia" => "Bratislava", 
    "Slovenia" => "Ljubljana", 
    "Germany" => "Berlin", 
    "Greece" => "Athens", 
    "Ireland" => "Dublin", 
    "Netherlands" => "Amsterdam", 
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);

asort($cities);


foreach ($cities as $country => $capital) {
    echo "The capital of  $country is $capital.<br>";
}

echo "<br>";
echo "<br>";

#Q4

$color = array (4 => 'white', 6 => 'green', 11=> 'red');

echo $color ["4"];

echo "<br>";
echo "<br>";

#Q5

$nArray=array();
function Add($nArray,$addValue,$Location){
  array_splice( $nArray, $Location-1, 0, $addValue );
  print_r ($nArray); 
  echo '<br>'; 
  for($i=0; $i<count($nArray); $i++){
    echo $nArray[$i]. " ";}

};
Add([1,2,3,4,5],"$",4);

echo "<br>";
echo "<br>";

#Q6

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
echo $fruits ["c"]; echo"<br>";
echo $fruits ["b"]; echo"<br>";
echo $fruits ["d"]; echo"<br>";
echo $fruits ["a"]; echo"<br>";

echo "<br>";
echo "<br>";

#Q7

function AvrTemp($Temp){

    $ave=array_sum($Temp)/count($Temp);
    echo "Average Temperature is : $ave <br>";
    $newArray=array_unique($Temp);
    sort($newArray);

    echo  "List of Five lowest temperatures : " ;
    for($i=0; $i<5; $i++) {
        echo $newArray[$i]. ' ';
        }echo "<br>";
     echo  "List of Five highest temperatures : ";
     $highestTemps = array_slice($newArray, -5);
     for($i=0; $i<count($highestTemps); $i++){
         echo $highestTemps[$i]. ' ';
     }echo "<br>";
}
AvrTemp([78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73]);

echo "<br>";
echo "<br>";

#Q8

function Mearg($array1,$array2){
    $MeargdArray = array_merge($array1, $array2);
    print_r($MeargdArray);

}
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
Mearg($array1,$array2);

echo "<br>";
echo "<br>";

#Q9

function upper($array){
    $newArray =[];
for($i=0; $i<count($array); $i++){
    array_push($newArray,strtoupper($array[$i]));
}
print_r($newArray);
}
upper(["red","blue","white","yellow"]);

echo "<br>";
echo "<br>";

#Q10

function lower($array){
    $newArray =[];
for($i=0; $i<count($array); $i++){
    array_push($newArray,strtolower($array[$i]));
}
print_r($newArray);
}
lower(["RED","BLUE", "WHITE","YELLOW"]);

echo "<br>";
echo "<br>";

#Q11


for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i . ' ';
    }
}



echo "<br>";
echo "<br>";

#Q12

$words =  array("abcd","abc","de","hjjj","g","wer");
$StrLengthArray = array_map('strlen',$words);
echo "The shortest array length is : " . min($StrLengthArray). "<br>";
echo "The longest array length is : " . max($StrLengthArray);

echo "<br>";
echo "<br>";

#Q13

function unique($n1,$n2){
    $randomNum=range($n1,$n2);    
    shuffle($randomNum);
    for ($i=0; $i< 10; $i++)
    {
    echo $randomNum[$i]. ' ';
    }}
unique(11,20);

echo "<br>";
echo "<br>";

#Q14


$array=[2, 0, 10, 12, 6];
$min = $array[0];

foreach($array as $x){
    if($x < $min && $x !=0){
        $min = $x;
    }
}
echo $min;


echo "<br>";
echo "<br>";

#Q15

function bubbleSortDescending($array) {
    $n = count($array);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}
$array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
$sortedArray = bubbleSortDescending($array);

echo "Sorted Array: ";
print_r($sortedArray);

echo "<br>";
echo "<br>";

#Q16


function floorWithPrecision($number, $precision, $separator) {
    $factor = pow(10, $precision);
    $tempNumber = floor($number * $factor) / $factor;
    $formattedNumber = number_format($tempNumber, $precision, $separator, '');
    
    return $formattedNumber;
}
$sampleData = [
    [1.155, 2, "."],
    [100.25781, 4, "."],
    [-2.9636, 3, "."]
];
foreach ($sampleData as $data) {
    list($number, $precision, $separator) = $data;
    echo "Original: $number, Floored: " . floorWithPrecision($number, $precision, $separator) . "<br>";
}

echo "<br>";
echo "<br>";

#Q17

function mergeUniqueValues($list1, $list2) {
    $array1 = array_map('trim', explode(',', $list1));
    $array2 = array_map('trim', explode(',', $list2));
    $mergedArray = array_unique(array_merge($array1, $array2));
    $mergedList = implode(', ', $mergedArray);
    return $mergedList;
}
$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";
$resultList = mergeUniqueValues($list1, $list2);
echo "Merged list with unique values: $resultList";

echo "<br>";
echo "<br>";

#Q18

function removeDuplicates($array) {
    $uniqueArray = array_unique($array);
    $uniqueArray = array_values($uniqueArray);
    
    return $uniqueArray;
}
$input = "4, 5, 6, 7, 4, 7, 8";
$array = array_map('trim', explode(',', $input));
$resultArray = removeDuplicates($array);
echo "Original array: ";
print_r($array);

echo "Array after removing duplicates: ";
print_r($resultArray);

echo "<br>";
echo "<br>";

#Q19

function isSubset($array1, $array2) {
    foreach ($array2 as $element) {
        if (!in_array($element, $array1)) {
            return false;
        }
    }
    return true;
}
$array1 = array('a', '1', '2', '3', '4');
$array2 = array('a', '3');
if (isSubset($array1, $array2)) {
    echo "array2 is a subset from array1.";
} else {
    echo "array2 is not a subset from array1.";
}

?>
