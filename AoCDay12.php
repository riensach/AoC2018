<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$initialState = "##.##.##..#..#.#.#.#...#...#####.###...#####.##..#####.#..#.##..#..#.#...#...##.##...#.##......####.";

$potIteratorOutput = "##.#. => #
#.#.. => #
##... => .
...## => #
###.# => #
#.##. => #
#.### => #
####. => #
.#..# => #
...#. => .
#..#. => .
#.#.# => .
.##.# => .
..#.. => .
.#.## => #
..##. => .
.#.#. => #
#..## => #
..#.# => #
#.... => .
..### => .
#...# => .
##### => #
###.. => #
....# => .
##.## => #
.#### => .
..... => .
##..# => #
.##.. => .
.###. => .
.#... => #";
/*
$initialState = "#..#.#..##......###...###";
$potIteratorOutput = "...## => #
..#.. => #
.#... => #
.#.#. => #
.#.## => #
.##.. => #
.#### => #
#.#.# => #
#.### => #
##.#. => #
##.## => #
###.. => #
###.# => #
####. => #";
 * 
 */


$initialState = "##.#..#.#..#.####.#########.#...#.#.#......##.#.#...##.....#...#...#.##.#...##...#.####.##..#.#..#.";
$potIteratorOutput = "..#.. => .
..#.# => .
#.#.. => .
.#..# => .
#.... => .
....# => .
.#.#. => #
#.### => .
####. => .
..... => .
.#... => #
##### => #
.#### => .
#..#. => #
#...# => #
.###. => .
###.# => #
...## => #
#.##. => #
.#.## => #
##.#. => #
...#. => .
..### => #
###.. => #
##... => .
..##. => .
.##.# => .
##.## => .
.##.. => .
##..# => #
#.#.# => .
#..## => #";
 

$potIteratorOutputData = explode("\n",$potIteratorOutput);
$intialPotData = str_split($initialState,1);
$potsArray = array();
$potsArrayIterated = array();
$intialPotCount = count($intialPotData);
$potIterators = array();

// Create the iterators!
foreach($potIteratorOutputData as $iteratorID => $iteratorValue) {
    $iteratorValues = explode(" => ",$iteratorValue);
    $potIterators[$iteratorValues[0]] = $iteratorValues[1];
    
}

$var = print_r($potIterators,true);
//echo "<pre>$var</pre>";  

// Create the pots!
for($iterator=(21*-5);$iterator <= ($intialPotCount+(21*5)); $iterator++) {    
    $potsArray[$iterator]=($intialPotData[$iterator] ?? ".");
}
$var = print_r($potsArray,true);
//echo "<pre>$var</pre>";   

for($iterator=0;$iterator<20;$iterator++){
    $potsArrayIterated = $potsArray;
    foreach($potsArray as $potID => $potValue) {
        if(isset($potsArray[$potID-1]) && isset($potsArray[$potID-2]) && isset($potsArray[$potID+1]) && isset($potsArray[$potID+2])) {
            // It's a real pot. We probably shouldn't need this check, but we do. Either way lets live with it, I'm not smart enough to not need it
            $currentPattern = $potsArray[$potID-2].$potsArray[$potID-1].$potsArray[$potID].$potsArray[$potID+1].$potsArray[$potID+2];

            $potAction = ($potIterators[$currentPattern] ?? ".");
            $potsArrayIterated[$potID] = $potAction;

            if($potID==3) {
                echo $currentPattern."<br>";
            }
        }
    }
    $potsArray = $potsArrayIterated;
}
$sumValue = 0;
foreach($potsArray as $potID => $potValue) {
    if($potValue=="#") {
        $sumValue = $sumValue+$potID;
    }
}
echo implode($potsArray);
echo "completed. Sum value: $sumValue";
$var = print_r($potsArray,true);
echo "<pre>$var</pre>";  