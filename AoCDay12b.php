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
$time_pre = microtime(true);
$potIteratorOutputData = explode("\n",$potIteratorOutput);
$intialPotData = str_split($initialState,1);
$potsArray = new \Ds\Map();
$potsArrayIterated = new \Ds\Map();
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
for($iterator=(-105);$iterator <= ($intialPotCount+(105)); $iterator++) {    
    $potAction=($intialPotData[$iterator] ?? ".");
    $potsArray->put($iterator, $potAction);
}
echo "goit this far!";
$var = print_r($potsArray,true);
//echo "<pre>$var</pre>";   

for($iterator=0;$iterator<20;$iterator++){
    $potsArrayIterated = $potsArray;
    foreach($potsArray as $potID => $potValue) {
        if(isset($potsArray[$potID-1]) && isset($potsArray[$potID-2]) && isset($potsArray[$potID+1]) && isset($potsArray[$potID+2])) {
            // It's a real pot. We probably shouldn't need this check, but we do. Either way lets live with it, I'm not smart enough to not need it
            $currentPattern = $potsArray->get($potID-2).$potsArray->get($potID-1).$potsArray->get($potID).$potsArray->get($potID+1).$potsArray->get($potID+2);

            $potAction = ($potIterators[$currentPattern] ?? ".");
            $potsArrayIterated->put($potID, $potAction);

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
$time_post = microtime(true);
        $exec_time = $time_post - $time_pre;
echo "took $exec_time to completed. Sum value: $sumValue";
$var = print_r($potsArray,true);
echo "<pre>$var</pre>";  