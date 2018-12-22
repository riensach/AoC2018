<?php


$caveDepth = 3879;
$targetX = 8;
$targetY = 713;
$targetX = 713;
$targetY = 8;
$caveDepth = 510;
$targetX = 10;
$targetY = 10;
 
$caveGridArray = array();
$caveGridArrayGeoIndex = array();

for($r=0;$r<=$targetY+5;$r++) {
    for($c=0;$c<=$targetX+5;$c++) {


        if(!isset($caveGridArray[$r])) $caveGridArray[$r] = array();
        if(!isset($caveGridArrayGeoIndex[$r])) $caveGridArrayGeoIndex[$r] = array();
        $caveGridArray[$r][$c] = "#";
        if($c==0 && $r==0) {
            $geoIndex = 0;
        } elseif($c==$targetY && $r==$targetX) {
            $geoIndex = 0;
        } elseif($c==0) {
            $geoIndex = $r * 16807;
        } elseif($r==0) {
            $geoIndex = $c * 48271;
        } else {
            $erosionLevelLeft = ($caveGridArrayGeoIndex[$r][$c-1] + $caveDepth) % 20183;
            $erosionLevelAbove = ($caveGridArrayGeoIndex[$r-1][$c] + $caveDepth) % 20183;
            $geoIndex = $erosionLevelLeft * $erosionLevelAbove;            
        }
        $caveGridArrayGeoIndex[$r][$c] = $geoIndex; 
    }
    $c=0;
}

$riskLevel = 0;
for($r=0;$r<=$targetY+5;$r++) {
    for($c=0;$c<=$targetX+5;$c++) {

        $erosionLevel = (($caveGridArrayGeoIndex[$r][$c] + $caveDepth) % 20183) % 3;
        //echo "$erosionLevel-";
        if($erosionLevel==0) {
            $regionType = '.';
        } elseif($erosionLevel==1) {
            $regionType = '=';
            $riskLevel = $riskLevel + 1;
        } else {
            $regionType = '|';
            $riskLevel = $riskLevel + 2;
        }
        $caveGridArray[$r][$c] = $regionType;

    }
    $c=0;
}
// 6305 is wrong - too low
// 6324 is wrong - too high
// 6322 is wrong
// The answer was 6323
echo "the risk level is $riskLevel<br>";


$timeToTargetArray = array();

// For the test only
//$caveGridArray[10][10] = 'T';



printGrid($caveGridArray);

flush();
ob_flush();
moveLocation($caveGridArray,0,0,$targetY,$targetX,0,0,0,1,array());


$var = print_r($timeToTargetArray,true);
echo "<pre>$var</pre>";  

// For equipped item
// 0 = neither, 1 = torch, 2 = rope


function moveLocation(&$caveGridArray, $currentRow, $currentColumn, $targetRow, $targetColumn, $lastRow, $lastColumn, $totalMoveMinutes, $equippedItem, $previousLocations) {
    if($currentRow==$targetRow & $currentColumn==$targetColumn) {
        // We made it to the target
        // Add this to the array and break
        $timeToTargetArray = $totalMoveMinutes;
        $caveGridArray[$targetRow][$targetColumn] = 'T';
        return;
    }
    if($totalMoveMinutes>45) {
        return;
    }
    $travelOptions = 0;
    $targetLocation = $currentRow .",". $currentColumn-1;
    if(isset($caveGridArray[$currentRow][$currentColumn-1]) && !($currentRow==$lastRow && $currentColumn-1==$lastColumn) && !in_array($targetLocation,$previousLocations)) {
        
        // This location exists, and it's not where we just came from
        $travelOptions++;
        $terrain = $caveGridArray[$currentRow][$currentColumn-1];
        if($terrain=='.' && $equippedItem==0){
            // Rocky region and I have nothing equippet. Must equip something
            $equippedItem = rand(1,2);
            $totalMoveMinutes++;
        } elseif($terrain=='=' && $equippedItem==1){
            // Wet region and I have the torch equippment. Must equip either nothing or rope. Going to random it
            $random = rand(1,2);
            $equippedItem = 0;
            if($random==1) {
               $equippedItem = 2; 
            } 
            $totalMoveMinutes++;           
        } elseif($terrain=='|' && $equippedItem==2){
            // Narrow region and I have the rope equippment. Must equip either nothing or torch. Going to random it
            $random = rand(1,2);
            $equippedItem = 0;
            if($random==1) {
               $equippedItem = 1; 
            }   
            $totalMoveMinutes++;         
        }
        $totalMoveMinutes++; 
        $newPreviousLocations = array_merge($previousLocations,array(0=>"$currentRow,$currentColumn"));
        moveLocation($caveGridArray,$currentRow,$currentColumn-1,$targetRow,$targetColumn,$currentRow,$currentColumn,$totalMoveMinutes,$equippedItem,$newPreviousLocations);        
    }
    $targetLocation = $currentRow-1 .",". $currentColumn;
    if(isset($caveGridArray[$currentRow-1][$currentColumn]) && !($currentRow-1==$lastRow && $currentColumn==$lastColumn) && !in_array($targetLocation,$previousLocations)) {
        // This location exists, and it's not where we just came from
        $travelOptions++;
        $terrain = $caveGridArray[$currentRow-1][$currentColumn];
        if($terrain=='.' && $equippedItem==0){
            // Rocky region and I have nothing equippet. Must equip something
            $equippedItem = rand(1,2);
            $totalMoveMinutes++;
        } elseif($terrain=='=' && $equippedItem==1){
            // Wet region and I have the torch equippment. Must equip either nothing or rope. Going to random it
            $random = rand(1,2);
            $equippedItem = 0;
            if($random==1) {
               $equippedItem = 2; 
            } 
            $totalMoveMinutes++;           
        } elseif($terrain=='|' && $equippedItem==2){
            // Narrow region and I have the rope equippment. Must equip either nothing or torch. Going to random it
            $random = rand(1,2);
            $equippedItem = 0;
            if($random==1) {
               $equippedItem = 1; 
            }   
            $totalMoveMinutes++;         
        }
        $totalMoveMinutes++; 
        $newPreviousLocations = array_merge($previousLocations,array(0=>"$currentRow,$currentColumn"));
        moveLocation($caveGridArray,$currentRow-1,$currentColumn,$targetRow,$targetColumn,$currentRow,$currentColumn,$totalMoveMinutes,$equippedItem,$newPreviousLocations);        
        if($travelOptions>1) {
            // We already have a valid travel option here, so lets branch
        }
    }
    $targetLocation = $currentRow .",". $currentColumn+1;
    if(isset($caveGridArray[$currentRow][$currentColumn+1]) && !($currentRow==$lastRow && $currentColumn+1==$lastColumn) && !in_array($targetLocation,$previousLocations)) {
        // This location exists, and it's not where we just came from
        $travelOptions++;
        $terrain = $caveGridArray[$currentRow][$currentColumn+1];
        if($terrain=='.' && $equippedItem==0){
            // Rocky region and I have nothing equippet. Must equip something
            $equippedItem = rand(1,2);
            $totalMoveMinutes++;
        } elseif($terrain=='=' && $equippedItem==1){
            // Wet region and I have the torch equippment. Must equip either nothing or rope. Going to random it
            $random = rand(1,2);
            $equippedItem = 0;
            if($random==1) {
               $equippedItem = 2; 
            } 
            $totalMoveMinutes++;           
        } elseif($terrain=='|' && $equippedItem==2){
            // Narrow region and I have the rope equippment. Must equip either nothing or torch. Going to random it
            $random = rand(1,2);
            $random = rand(1,2);
            $equippedItem = 0;
            if($random==1) {
               $equippedItem = 1; 
            }   
            $totalMoveMinutes++;         
        }
        $totalMoveMinutes++;   
        $newPreviousLocations = array_merge($previousLocations,array(0=>"$currentRow,$currentColumn"));      
        moveLocation($caveGridArray,$currentRow,$currentColumn+1,$targetRow,$targetColumn,$currentRow,$currentColumn,$totalMoveMinutes,$equippedItem,$newPreviousLocations);        
    }
    $targetLocation = $currentRow+1 .",". $currentColumn;
    if(isset($caveGridArray[$currentRow+1][$currentColumn]) && !($currentRow+1==$lastRow && $currentColumn==$lastColumn) && !in_array($targetLocation,$previousLocations)) {
        // This location exists, and it's not where we just came from
        $travelOptions++;
        $terrain = $caveGridArray[$currentRow+1][$currentColumn];
        if($terrain=='.' && $equippedItem==0){
            // Rocky region and I have nothing equippet. Must equip something
            $equippedItem = rand(1,2);
            $totalMoveMinutes++;
        } elseif($terrain=='=' && $equippedItem==1){
            // Wet region and I have the torch equippment. Must equip either nothing or rope. Going to random it
            $random = rand(1,2);
            $equippedItem = 0;
            if($random==1) {
               $equippedItem = 2; 
            } 
            $totalMoveMinutes++;           
        } elseif($terrain=='|' && $equippedItem==2){
            // Narrow region and I have the rope equippment. Must equip either nothing or torch. Going to random it
            $random = rand(1,2);
            $equippedItem = 0;
            if($random==1) {
               $equippedItem = 1; 
            }   
            $totalMoveMinutes++;         
        }
        $totalMoveMinutes++; 
        $newPreviousLocations = array_merge($previousLocations,array(0=>"$currentRow,$currentColumn"));
        moveLocation($caveGridArray,$currentRow+1,$currentColumn,$targetRow,$targetColumn,$currentRow,$currentColumn,$totalMoveMinutes,$equippedItem,$newPreviousLocations);        
    }
    
    
    
    return;
    
}





















function printGrid($currentArray) {
    echo "<code>";
    foreach($currentArray as $rowID => $rowColumn) {
        foreach ($rowColumn as $columnID => $thedata){
            if($thedata==" ") $thedata = "&nbsp;";
            echo "$thedata ";
        }
        echo "<br>";
    }
    echo "</code>";
    
}