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
$recipes = array(0=>"3",1=>"7",2=>"1",3=>"0",4=>"1",5=>"0",6=>"1");
$elfACurrentRecipieID = 4;
$elfBCurrentRecipieID = 6;
$currentElfAScore = 0;
$currentElfBScore = 0;
$totalElements=count($recipes);

for($i=0;$i<($numberRecipiesLimit+10);$i++) {
        
        //echo "Start of loop $i. Elf A Index:$elfACurrentRecipieID - Elf B Index: $elfBCurrentRecipieID<br>";
        $currentElfAScore = $recipes[$elfACurrentRecipieID];
        $currentElfBScore = $recipes[$elfBCurrentRecipieID];
        $newRecipieScore = $currentElfAScore+$currentElfBScore;
        if($newRecipieScore>9) {
            $firstScore = substr($newRecipieScore,0,1);
            $recipes[] = $firstScore;
            $secondScore = substr($newRecipieScore,-1);
            $recipes[] = $secondScore;
            $totalElements = $totalElements+2;
        } else {
            //echo "add recipie - $newRecipieScore<br>";
            $recipes[] = $newRecipieScore;
            $totalElements = $totalElements+1;
        }
        
        $elfANewRecipieMoveIndex = $recipes[$elfACurrentRecipieID]+1;
        
        $elfACurrentRecipieID = selectCurrentRecipe($elfACurrentRecipieID,$elfANewRecipieMoveIndex,$recipes,$totalElements);
        
        $elfBNewRecipieMoveIndex = $recipes[$elfBCurrentRecipieID]+1;
        
        $elfBCurrentRecipieID = selectCurrentRecipe($elfBCurrentRecipieID,$elfBNewRecipieMoveIndex,$recipes,$totalElements);
        //echo "End of loop $i. Elf A Index:$elfACurrentRecipieID - Elf B Index: $elfBCurrentRecipieID<br>";
        //echo implode($recipes,"-");
        //echo "<br>";
        if($i % 1000 ==0) {
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


