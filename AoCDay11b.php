<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$gridSerialNumber = 3613;
//$gridSerialNumber = 18;
$gridArray = array();
$gridPowerLevel = array();
$highestPowerGridTopLeft = '';
$highestPowerGridAmount = 0;
$highestPowerGridSize = '';
$time_pre = microtime(true);
// Lets create a grid for later use
$c = 1;
$r = 1;

while($c <= 300) {
    while ($r <= 300)  {
        
        if(!isset($gridArray[$c])) $gridArray[$c] = array();
        $gridArray[$c][$r] = '';
        $r++;     
    }
    $c++;
    $r=1;
}

/* 
 *  Find the fuel cell's rack ID, which is its X coordinate plus 10.
    Begin with a power level of the rack ID times the Y coordinate.
    Increase the power level by the value of the grid serial number (your puzzle input).
    Set the power level to itself multiplied by the rack ID.
    Keep only the hundreds digit of the power level (so 12345 becomes 3; numbers with no hundreds digit become 0).
    Subtract 5 from the power level.
 */

// Calculate grid power level
$c = 1;
$r = 1;
while($c <= 300) {
    while ($r <= 300)  {        
        $runningPowerLevel = 0;
        $cellRackID = $c+10;
        $runningPowerLevel = $cellRackID * $r;        
        $runningPowerLevel = $runningPowerLevel + $gridSerialNumber;
        $runningPowerLevel = $runningPowerLevel * $cellRackID;
        if($runningPowerLevel>99) {
            $runningPowerLevel = substr($runningPowerLevel,-3, 1);
        } else {
            $runningPowerLevel = 0;
        }
      
        $runningPowerLevel = $runningPowerLevel-5;        
        $gridArray[$c][$r] = $runningPowerLevel 
                + ($gridArray[$c-1][$r] ?? 0) 
                + ($gridArray[$c][$r-1] ?? 0)
                - ($gridArray[$c-1][$r-1] ?? 0);  

        $r++;     
    }
    $c++;
    $r=0;
}




$time_post = microtime(true);
    $exec_time = $time_post - $time_pre;
     //die("Time taken - $exec_time");


// Find the grid with the most power
$c = 1;
$r = 1;
$c2 = 1;
for($size=1; $size<=300; $size++){
   for($c=$size; $c<=300; $c++){
       for($r=$size; $r<=300; $r++){
           
           $power = $gridArray[$c][$r]                  
                - ($gridArray[$c-$size][$r] ?? 0)
                - ($gridArray[$c][$r-$size] ?? 0)
                + ($gridArray[$c-$size][$r-$size] ?? 0);
           
           if($power > $highestPowerGridAmount){
                $bestX = $c - $size + 1;
                $bestY = $r - $size + 1;
                $highestPowerGridTopLeft = "$bestX,$bestY";
                $highestPowerGridAmount = $power;
                $highestPowerGridSize = $size;
           }
           
       }
   }     
}

$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
//die("Time taken - $exec_time");


        $time_post = microtime(true);
        $exec_time = $time_post - $time_pre;
//echo "test data grid 3,5 power level: ".$gridArray[3][5]."<br>";

echo "Found highest power grid. It's top left is $highestPowerGridTopLeft and its power is $highestPowerGridAmount and its size is $highestPowerGridSize - calculated in $exec_time<br><br>";


$var = print_r($gridArray,true);
echo "<pre>$var</pre>";  

