<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$numberRecipiesLimit = 919901;
// Test Data
$numberRecipiesLimit = 10;

$recipes = new \Ds\Deque();


$time_pre = microtime(true);
$recipes->push("3");
$recipes->push("7");
$elfACurrentRecipieID = 0;
$elfBCurrentRecipieID = 1;
$currentElfIndexDifference = 1;

for($i=0;$i<($numberRecipiesLimit+8);$i++) {
    
    echo "$elfACurrentRecipieID - $elfBCurrentRecipieID - $currentElfIndexDifference<br>";
    $var = print_r($recipes,true);
echo "<pre>$var</pre>";   
    //Create recipies
    $currentElfAScore = $recipes->get(0);
    $currentElfBScore = $recipes->get($currentElfIndexDifference);
    $newRecipieScore = $currentElfAScore+$currentElfBScore;
    if($newRecipieScore>9) {
        $firstScore = substr($newRecipieScore,0,1);
        $recipes->push($firstScore);
        $secondScore = substr($newRecipieScore,-1);
        $recipes->push($firstScore);
    } else {
        $recipes->push($newRecipieScore);
    }
    // 3 7 1 0
    
    //$currentLength=$recipes->count();
   // $elfARotation = ($elfACurrentRecipieID-$currentLength)+1;
   // $recipes->rotate($elfARotation);
    $elfANewRecipiePickRotation = $recipes->get($elfACurrentRecipieID)+1;
    $recipes->rotate($elfANewRecipiePickRotation);
    $elfACurrentRecipieID = $recipes->get(0);
    $toElfB = ($elfANewRecipiePickRotation-($elfANewRecipiePickRotation*2))+$currentElfIndexDifference;
    $recipes->rotate($toElfB);
    $elfBNewRecipiePickRotation = $recipes->get($elfACurrentRecipieID)+1;
    $recipes->rotate($elfBNewRecipiePickRotation);
    $elfBCurrentRecipieID = $recipes->get(0);
    $backToElfA  = ($elfBNewRecipiePickRotation-($elfBNewRecipiePickRotation*2))-$currentElfIndexDifference;
    $currentElfIndexDifference = $elfACurrentRecipieID - $elfBCurrentRecipieID;
    
    


    
    
}

$var = print_r($recipes,true);
echo "<pre>$var</pre>";   
die();




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


if($marblePlay>=$targetFinalMarble) {
    // Game is over, time to score!
    arsort($elfScores);
    $elfID = key($elfScores);
    $elfTopScore = current($elfScores);
    echo "The winning Elf is $elfID with a score of $elfTopScore!<br>";
    $var = print_r($elfScores,true);
    echo "<pre>$var</pre>";  
}






