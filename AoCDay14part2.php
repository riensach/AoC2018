<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numberRecipiesLimit = 919901;
// Test Data
//$numberRecipiesLimit = 20;

$time_pre = microtime(true);
$recipes = new SplDoublyLinkedList();
$recipesLastTen = new SplDoublyLinkedList();

$recipes->push(3);
$recipes->push(7);
$recipes->push(1);
$recipes->push(0);
$recipes->push(1);
$recipes->push(0);
$recipes->push(1);
$recipesLastTen->push(7);
$recipesLastTen->push(1);
$recipesLastTen->push(0);
$recipesLastTen->push(1);
$recipesLastTen->push(0);
$recipesLastTen->push(1);
$elfACurrentRecipieID = 4;
$elfBCurrentRecipieID = 6;
$currentElfAScore = 0;
$currentElfBScore = 0;
$totalElements=$recipes->count();

// 0(n) vs 0(1)

for($i=0;$i<5900000;$i++) {
        
        //echo "Start of loop $i. Elf A Index:$elfACurrentRecipieID - Elf B Index: $elfBCurrentRecipieID<br>";
        $currentElfAScore = $recipes->offsetGet($elfACurrentRecipieID);
        $currentElfBScore = $recipes->offsetGet($elfBCurrentRecipieID);
		//$currentElfAScore = "1";
		//$currentElfBScore = "1";
        $newRecipieScore = $currentElfAScore+$currentElfBScore;
        if($newRecipieScore>9) {
            $firstScore = substr($newRecipieScore,0,1);
            $recipes->push($firstScore);			
            $totalElements = $totalElements+1;
			$recipesLastTen->push($firstScore);
			if($totalElements>6) {
				$recipesLastTen->shift();
			}
            $secondScore = substr($newRecipieScore,-1);
            $recipes->push($secondScore);
            $totalElements = $totalElements+1;
			$recipesLastTen->push($secondScore);
			if($totalElements>6) {
				$recipesLastTen->shift();
			}
            $i++;
        } else {
            //echo "add recipie - $newRecipieScore<br>";
            $recipes->push($newRecipieScore);
            $totalElements = $totalElements+1;
			$recipesLastTen->push($newRecipieScore);
			if($totalElements>6) {
				$recipesLastTen->shift();
			}
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
		if($totalElements>5) {
			$foundArray = $recipesLastTen->offsetGet(0).$recipesLastTen->offsetGet(1).$recipesLastTen->offsetGet(2).$recipesLastTen->offsetGet(3).$recipesLastTen->offsetGet(4).$recipesLastTen->offsetGet(5);
			if($foundArray==$numberRecipiesLimit) {
				$previousRecp = $totalElements-6;
				echo "found the loop! Total recipies is $totalElements and as our input is 6 long the recipies before it are totally as $previousRecp";
			}
		}
        if($i % 10000 ==0) {
            $time_post = microtime(true);
            $exec_time = $time_post - $time_pre;
            echo "Done iteration $i in $exec_time seconds<Br>";
            flush();
            ob_flush();
        }
}

echo "last 10 items:<br>";
echo $recipesLastTen->count();
echo "<br>";
echo $recipesLastTen->offsetGet(0)." ".$recipesLastTen->offsetGet(1)." ".$recipesLastTen->offsetGet(2)." ".$recipesLastTen->offsetGet(3)." ".$recipesLastTen->offsetGet(4)." ".$recipesLastTen->offsetGet(5)." ".$recipesLastTen->offsetGet(6)." ".$recipesLastTen->offsetGet(7)." ".$recipesLastTen->offsetGet(8)." ".$recipesLastTen->offsetGet(9);
echo "<br>";

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


