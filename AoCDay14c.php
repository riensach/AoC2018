<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numberRecipiesLimit = 919901;
// Test Data
//$numberRecipiesLimit = 10;

$time_pre = microtime(true);
$recipes = new SplDoublyLinkedList();

$recipes->push(3);
$recipes->push(7);
$recipes->push(1);
$recipes->push(0);
$recipes->push(1);
$recipes->push(0);
$recipes->push(1);
$elfACurrentRecipieID = 4;
$elfBCurrentRecipieID = 6;
$currentElfAScore = 0;
$currentElfBScore = 0;
$totalElements=$recipes->count();

for($i=0;$i<($numberRecipiesLimit+10);$i++) {
        
        //echo "Start of loop $i. Elf A Index:$elfACurrentRecipieID - Elf B Index: $elfBCurrentRecipieID<br>";
        $currentElfAScore = $recipes->offsetGet($elfACurrentRecipieID);
        $currentElfBScore = $recipes->offsetGet($elfBCurrentRecipieID);
        $newRecipieScore = $currentElfAScore+$currentElfBScore;
        if($newRecipieScore>9) {
            $firstScore = substr($newRecipieScore,0,1);
            $recipes->push($firstScore);
            $secondScore = substr($newRecipieScore,-1);
            $recipes->push($secondScore);
            $totalElements = $totalElements+2;
            $i++;
        } else {
            //echo "add recipie - $newRecipieScore<br>";
            $recipes->push($newRecipieScore);
            $totalElements = $totalElements+1;
        }
        
        $elfANewRecipieMoveIndex = $currentElfAScore+1;        
        $lastRecipeID = $totalElements-1;
        if($elfACurrentRecipieID+$elfANewRecipieMoveIndex>$lastRecipeID) {
            $newFoundID = abs($elfACurrentRecipieID+$elfANewRecipieMoveIndex-($totalElements));    
        } else {
            $newFoundID = $elfACurrentRecipieID+$elfANewRecipieMoveIndex;
        }
        $elfACurrentRecipieID = $newFoundID;
        
        $elfBNewRecipieMoveIndex = $currentElfBScore+1;
        $lastRecipeID = $totalElements-1;
        if($elfBCurrentRecipieID+$elfBNewRecipieMoveIndex>$lastRecipeID) {
            $newFoundID = abs($elfBCurrentRecipieID+$elfBNewRecipieMoveIndex-($totalElements));    
        } else {
            $newFoundID = $elfBCurrentRecipieID+$elfBNewRecipieMoveIndex;
        }        
        $elfBCurrentRecipieID = $newFoundID;
        //echo "End of loop $i. Elf A Index:$elfACurrentRecipieID - Elf B Index: $elfBCurrentRecipieID<br>";
        //$var = print_r($recipes,true);
        //echo "<pre>$var</pre>";  
        //echo "<br>";
        if($i % 10000 ==0) {
            $time_post = microtime(true);
            $exec_time = $time_post - $time_pre;
            echo "Done iteration $i in $exec_time seconds<Br>";
            flush();
            ob_flush();
        }
}

function selectCurrentRecipe($currentID,$moveCount,$array,$totalElements) {
    
    end($array);
    $lastRecipeID = key($array);
    //echo "Current Index : $currentID Move count : $moveCount Total Elements : $totalElements - $lastRecipeID - ";
    if($currentID+$moveCount>$lastRecipeID) {
        $newFoundID = abs($currentID+$moveCount-($totalElements));    
    } else {
        $newFoundID = $currentID+$moveCount;
    }
    //echo " new index:$newFoundID<br>";
    return $newFoundID;
    
    // 3 7 0 1

}


for($i=$numberRecipiesLimit;$i<($numberRecipiesLimit+10);$i++) {
    echo $recipes[$i];
}


$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
die("Time Taken - $exec_time");


