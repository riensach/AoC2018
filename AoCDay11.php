<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$gridSerialNumber = 3613;
$gridArray = array();
$gridPowerLevel = array();
$highestPowerGridTopLeft = '';
$highestPowerGridAmount = 0;

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
    $r=0;
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
        
        $gridArray[$c][$r] = $runningPowerLevel;
        
        
        // Test echo
        if($c==3 && $r==500) {
            $runningPowerLevel = 0;
            $cellRackID = $c+10;
            echo "Rack ID = $cellRackID<br>";
            $runningPowerLevel = $cellRackID * $r;              
            echo "Power level * rack ID = $runningPowerLevel<br>";
            $runningPowerLevel = $runningPowerLevel + $gridSerialNumber;            
            echo "Incresed by grid serial = $runningPowerLevel<br>";
            $runningPowerLevel = $runningPowerLevel * $cellRackID;            
            echo "Itself multiplied by Rack ID = $runningPowerLevel<br>";
            
            if($runningPowerLevel>99) {
                $runningPowerLevel = substr($runningPowerLevel,-3, 1);
            } else {
                $runningPowerLevel = 0;
            }
            echo "Just the hundrds = $runningPowerLevel<br>";
            $runningPowerLevel = $runningPowerLevel-5;
            echo "Minus 5 = $runningPowerLevel<br>";
            $gridArray[$c][$r] = $runningPowerLevel;
        }
        
        
        
        
        
        
        $r++;     
    }
    $c++;
    $r=0;
}


// Find the grid with the most power
$c = 1;
$r = 1;
while($c <= 298) {
    while ($r <= 298)  {
        
        $power1 = $gridArray[$c][$r];
        $power2 = $gridArray[$c][$r+1];
        $power3 = $gridArray[$c][$r+2];
        $power4 = $gridArray[$c+1][$r];
        $power5 = $gridArray[$c+2][$r];
        $power6 = $gridArray[$c+1][$r+1];
        $power7 = $gridArray[$c+1][$r+2];
        $power8 = $gridArray[$c+2][$r+1];
        $power9 = $gridArray[$c+2][$r+2];
        
        $totalPowerLevel = $power1 + $power2 + $power3 + $power4 + $power5 + $power6 + $power7 + $power8 + $power9;
        if($totalPowerLevel>$highestPowerGridAmount) {
            $highestPowerGridTopLeft = "$c,$r";
            $highestPowerGridAmount = $totalPowerLevel;
        }
        
        $r++;     
    }
    $c++;
    $r=0;
}

echo "test data grid 3,5 power level: ".$gridArray[3][5]."<br>";
//displayCurrentGrid($gridArray);
function displayCurrentGrid($boxGrid) {

    
    // Now we display the grid and see what comes out
    $c = 1;
    $r = 1;
    echo "<h2>Display Grid:</h2><code>";
    while($c <= 300) {
        while ($r <= 300)  {

            echo "|".$boxGrid[$c][$r]."|";
            $r++;     
        }
        echo "<br>";
        $c++;
        $r=0;
    }
    echo "</code><br><br><br>";
    
    
}

echo "Found highest power grid. It's top left is $highestPowerGridTopLeft and its power is $highestPowerGridAmount<br><br>";


$var = print_r($gridArray,true);
echo "<pre>$var</pre>";  

die();





 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
