<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$inputData = ("416 players; last marble is worth 71617 points");
$numberPlayers = 416;
$targetFinalMarble = 71617;
// Test Data
$numberPlayers = 10;
$targetFinalMarble = 1618;

$marblesPlayed = array(0=>0);
$elfScores = array();
$marbleCurrentValue = 0;
$elfCurrentPlayer=1;
$currentMarbleID = 0;





// Setup Elf array

$elfIterator = 1;
while($elfIterator <= $numberPlayers) {
    $elfScores[$elfIterator] = 0;
    $elfIterator++;
}

$var = print_r($elfScores,true);
//echo "<pre>$var</pre>";   
//die();




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
        
        $marbleToRemove = $currentMarbleID-7;
        end($marblesPlayed);
        $lastMarbleID = key($marblesPlayed);
            if($marbleToRemove <0) {
            //echo "h - $lastMarbleID - $marbleToRemove<br>";
            $marbleToRemove = $lastMarbleID - abs(0 + $marbleToRemove)+1;
        }
        //echo "remove this:$marbleToRemove<br>";
        $var = print_r($marblesPlayed,true);
        //echo "<pre>$var</pre>";  
        $marbleValue = $marblesPlayed[$marbleToRemove];
        //echo "Divides by 23 for marble play $marblePlay. Current marble ID $currentMarbleID. Need to remove marble ID $marbleToRemove (last marble ID=$lastMarbleID) from array with a value of $marbleValue - already given Elf $elfCurrentPlayer $currentMarbleScore points<br>";
        //echo "Need to add $marbleValue to Elf $elfCurrentPlayer<br>";
        $elfScores[$elfCurrentPlayer] = $elfScores[$elfCurrentPlayer]+$marbleValue;
        array_splice($marblesPlayed, $marbleToRemove, 1);
        //echo "Set current marble ID to be $marbleToRemove<br>";
        $currentMarbleID = $marbleToRemove;
        // Set the marble clockwise of the marble that was just removed to be the current marble
        $elfCurrentPlayer++;
        
    } elseif($marblePlay==1) {
        // This is the first Marble to be played by an Elf and will probably confuse the code
        // Let's take care of it here
        $marblesPlayed[$marblePlay] = $marblePlay;
        $currentMarbleID = $marblePlay;
        $elfCurrentPlayer++; // Onto the next Elf!
        
    } else {
        // It's not a multiple of 23, and it's not the first marble to be played by an Elf, now we just need to do the normal stuff
        
        // Place a marble into the circle between the 1 and 2 marbles clockwise of the current marble
        
        //$currentMarbleID = ;
        $totalElements=count($marblesPlayed);
        end($marblesPlayed);
        $lastMarbleID = key($marblesPlayed);
        prev($marblesPlayed);
        $secondLastMarbleID = key($marblesPlayed);
        reset($marblesPlayed);
        $firstMarbleID = key($marblesPlayed);  
        //echo "$totalElements - $lastMarbleID - $secondLastMarbleID - $firstMarbleID <br>";      
        if($currentMarbleID==$lastMarbleID) {
            // The current Marble is the last item in the array            
            $newKey = 1; // Because the current Marble is last in our Array, we know we're placing this new Marble at the second key position
            $marblesPlayed = moveArray($marblesPlayed,$newKey,$marblePlay);   
          //  echo "Need to add the marble ID $marblePlay to the array in position $newKey and set the current marble position to be $newKey<br>";
            $currentMarbleID = $newKey; // We are assuming the marble has been placed correctly by our array from the above call
            $elfCurrentPlayer++;
            $var = print_r($marblesPlayed,true);
            //echo "<pre>$var</pre>"; 
            
        } elseif($currentMarbleID==$firstMarbleID) {
            // The current Marble is the first item in the array            
            $newKey = 2; // Because the current Marble is first in our Array, we know we're placing this new Marble at the third key position
            $marblesPlayed = moveArray($marblesPlayed,$newKey,$marblePlay);           
         //   echo "Need to add the marble ID $marblePlay to the array in position $newKey and set the current marble position to be $newKey<br>";
            $currentMarbleID = $newKey; // We are assuming the marble has been placed correctly by our array from the above call
            $elfCurrentPlayer++;
            
        } elseif($currentMarbleID==$secondLastMarbleID) {
            // The current Marble is the second from last
            end($marblesPlayed);
            $marblesPlayed[] = $marblePlay; // Becasue the marble is the second from last item, we know we're just placing this at the start  
            end($marblesPlayed);
            $currentMarbleID = key($marblesPlayed);
         //   echo "Need to add the marble ID $marblePlay to the end of the array and set the current marble position to be $currentMarbleID<br>";      
            $elfCurrentPlayer++;
            
        } else {
            // The current Marble is in the array somewhere, and it's not the first, last, or second from last item
            $marblesPlayed = moveArray($marblesPlayed,$currentMarbleID+2,$marblePlay); 
            $currentMarbleID = $currentMarbleID+2; // We are assuming the marble has been placed correctly by our array
         //   echo "Need to add the marble ID $marblePlay to the middle of the array as position $currentMarbleID and set the current marble position to be $currentMarbleID<br>";   
            $elfCurrentPlayer++;
        }
        
        
    }      
    $var = print_r($marblesPlayed,true);
   // echo "<pre>$var</pre>";  
    
    // Check if we've gone over our total number of players, and if so, go back to the start!
    if($elfCurrentPlayer>$numberPlayers) {
        $elfCurrentPlayer = 1;
    }
    //echo "current player $elfCurrentPlayer<br>";
    //Iterate onto playing the next Marble!!
    if($marblePlay % 1000 ==0) {
        echo "Done marble play $marblePlay<Br>";
    }
    $marblePlay++;
}


function moveArray($array,$newKey,$newKeyValue) {
    
    array_splice($array, $newKey, 0, $newKeyValue); 
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






