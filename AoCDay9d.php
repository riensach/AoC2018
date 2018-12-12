<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$inputData = ("416 players; last marble is worth 71617 points");
$numberPlayers = 416;
$targetFinalMarble = 7161700;
// Test Data
//$numberPlayers = 10;
//$targetFinalMarble = 1618;

//$marblesPlayed = array(0=>0);
//$marblesPlayed=new SplDoublyLinkedList();
$marblesPlayed = new \Ds\Deque([0]);
//$marblesPlayed->push(0);
$elfScores = array();
$marbleCurrentValue = 0;
$elfCurrentPlayer=1;
$currentMarbleID = 0;


$time_pre = microtime(true);


// Setup Elf array

$elfIterator = 1;
while($elfIterator <= $numberPlayers) {
    $elfScores[$elfIterator] = 0;
    $elfIterator++;
}

$var = print_r($elfScores,true);
//echo "<pre>$var</pre>";   
//die();

$var = print_r($marblesPlayed,true);
   // echo "<pre>$var</pre>";  


$marblePlay = 1;
while($marblePlay <= $targetFinalMarble) {
    
    
    //$randID = rand(1,100);
    //$elfScores[$randID] = $elfScores[$randID]+$marblePlay;
    
    // Need to do a check for multiple of 23
    if($marblePlay % 23 == 0) {
        // It's a multiple of 23, do something special
        // Give the current marble to the Elf as their score
        $currentMarbleScore = $marblePlay;
        $elfScores[$elfCurrentPlayer] = $elfScores[$elfCurrentPlayer]+$currentMarbleScore;
        // Remove the Marble 7 Marbles counter-clockwise from the current Marble and add it to the Elf's score
        
        
        $marblesPlayed->rotate(-6);
        
        $elfScores[$elfCurrentPlayer] = $elfScores[$elfCurrentPlayer]+$marblesPlayed->pop();
        
        
        
    } elseif($marblePlay==1) {
        // This is the first Marble to be played by an Elf and will probably confuse the code
        // Let's take care of it here
        $marblesPlayed->insert($marblePlay,$marblePlay);
        //$marblesPlayed[$marblePlay] = $marblePlay;
         // Onto the next Elf!
        
    } else {
        // It's not a multiple of 23, and it's not the first marble to be played by an Elf, now we just need to do the normal stuff        
        // Place a marble into the circle between the 1 and 2 marbles clockwise of the current marble
        
            $marblesPlayed->rotate(2);
            $marblesPlayed->unshift($marblePlay);

    }   
    
    $elfCurrentPlayer++;
    
    // Check if we've gone over our total number of players, and if so, go back to the start!
    if($elfCurrentPlayer>$numberPlayers) {
        $elfCurrentPlayer = 1;
    }
    //echo "current player $elfCurrentPlayer<br>";
    //Iterate onto playing the next Marble!!
    if($marblePlay % 1000000 ==0) {
        $time_post = microtime(true);
        $exec_time = $time_post - $time_pre;
        echo "Done marble play $marblePlay in $exec_time seconds<Br>";
        flush();
        ob_flush();
    }
    $marblePlay++;
}


function moveArray($array,$newKey,$newKeyValue) {
   // echo "$newKey-$newKeyValue<br>";
    //$array->insert($newKey,$newKeyValue);
    
    // DO THIS BIT THEN IT IS DONE
    
    //array_splice($array, $newKey, 0, $newKeyValue); 
    return $array;
    
}

if($marblePlay>=$targetFinalMarble) {
    // Game is over, time to score!
    arsort($elfScores);
    $elfID = key($elfScores);
    $elfTopScore = current($elfScores);
    echo "The winning Elf is $elfID with a score of $elfTopScore!<br>";
    $var = print_r($elfScores,true);
    echo "<pre>$var</pre>";  
}






