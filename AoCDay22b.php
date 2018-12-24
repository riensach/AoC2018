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
        } elseif($c==$targetX && $r==$targetY) {
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


$time_pre = microtime(true);
printGrid($caveGridArray);

flush();
ob_flush();
moveLocation($caveGridArray,0,0,$targetY,$targetX,0,0,0,1,array(),$timeToTargetArray,1);
$time_post = microtime(true);
            $exec_time = $time_post - $time_pre;
            echo "Done in $exec_time seconds<Br>";

$var = print_r($timeToTargetArray,true);
echo "<pre>$var</pre>";  

// For equipped item
// 0 = neither, 1 = torch, 2 = climbing gear


function moveLocation(&$caveGridArray, $currentRow, $currentColumn, $targetRow, $targetColumn, $lastRow, $lastColumn, $totalMoveMinutes, $equippedItem, $previousLocations, &$timeToTargetArray, $moveCount) {
    if($currentRow==$targetRow & $currentColumn==$targetColumn) {
        // We made it to the target
        // Add this to the array and break
        if($equippedItem!=1) {
            // Need to equip the torch!
            $totalMoveMinutes = $totalMoveMinutes + 7;
        }
        $timeToTargetArray[] = $totalMoveMinutes;
        //$caveGridArray[$targetRow][$targetColumn] = 'T';
        echo "WE FOUND IT!!!";
        return;
    }

    $proposedColumn = $currentColumn-1;
    $proposedRow = $currentRow;
    $targetLocation = "$proposedRow,$proposedColumn";  
    $alreadyUsed = (in_array($targetLocation,$previousLocations)<1 ? 0:1);
    $newPreviousLocations = array_merge($previousLocations,array(0=>"$currentRow,$currentColumn"));
   //echo "FAKE PREVIOUS LOCATION - $targetLocation :: $currentRow,$currentColumn<Br>";
   $found = in_array($targetLocation,$previousLocations);
   // if(array_search($targetLocation,$previousLocations)){
    //    echo "PREVIOUS LOCATION - $targetLocation<Br>";
    
   if($moveCount > 260) {
       // To long, go away
       $var = print_r($newPreviousLocations,true);
echo "<pre>$var</pre>";  
       return;
   }
        
   // }
   // echo "query finds $found - $alreadyUsed<br>";
    //echo "Last: $lastRow,$lastColumn - Current: $currentRow,$currentColumn - Proposed: $targetLocation<br>";
    $moveCount++;
    if(isset($caveGridArray[$currentRow][$currentColumn-1]) && $alreadyUsed<1) {
        //echo "mad4e it here - equiped item is $equippedItem<br>";
        // This location exists, and it's not where we just came from
        $currentTerrain = $caveGridArray[$currentRow][$currentColumn];
        $targetTerrain = $caveGridArray[$currentRow][$currentColumn-1];
        if($targetTerrain=='.' && $equippedItem==0){
            // Rocky region and I have nothing equippet. Must equip something
            if($currentTerrain=='='){
                $equippedItem = 2;
            } else {
                $equippedItem = 1;
            }
            $totalMoveMinutes = $totalMoveMinutes + 7;
        } elseif($targetTerrain=='=' && $equippedItem==1){
            // Wet region and I have the torch equippment. Must equip either nothing or rope. Going to random it
            if($currentTerrain=='|'){
                $equippedItem = 0;
            } else {
                $equippedItem = 2;
            }
            $totalMoveMinutes = $totalMoveMinutes + 7;          
        } elseif($targetTerrain=='|' && $equippedItem==2){
            // Narrow region and I have the rope equippment. Must equip either nothing or torch. Going to random it
            if($currentTerrain=='.'){
                $equippedItem = 1;
            } else {
                $equippedItem = 0;
            }  
            $totalMoveMinutes = $totalMoveMinutes + 7;       
        }
        //echo "new equip = $equippedItem based on current $currentTerrain and target $targetTerrain <br>";
        $totalMoveMinutes++; 
        moveLocation($caveGridArray,$currentRow,$currentColumn-1,$targetRow,$targetColumn,$currentRow,$currentColumn,$totalMoveMinutes,$equippedItem,$newPreviousLocations,$timeToTargetArray,$moveCount);        
    }
    $proposedColumn = $currentColumn;
    $proposedRow = $currentRow-1;
    $targetLocation = "$proposedRow,$proposedColumn"; 
    $alreadyUsed = (in_array($targetLocation,$previousLocations)<1 ? 0:1);
    if(isset($caveGridArray[$currentRow-1][$currentColumn]) && $alreadyUsed<1) {
        // This location exists, and it's not where we just came from
        $currentTerrain = $caveGridArray[$currentRow][$currentColumn];
        $targetTerrain = $caveGridArray[$currentRow-1][$currentColumn];
        if($targetTerrain=='.' && $equippedItem==0){
            // Rocky region and I have nothing equippet. Must equip something
            if($currentTerrain=='='){
                $equippedItem = 2;
            } else {
                $equippedItem = 1;
            }
            $totalMoveMinutes = $totalMoveMinutes + 7;  
        } elseif($targetTerrain=='=' && $equippedItem==1){
            // Wet region and I have the torch equippment. Must equip either nothing or rope. Going to random it
            if($currentTerrain=='|'){
                $equippedItem = 0;
            } else {
                $equippedItem = 2;
            }
            $totalMoveMinutes = $totalMoveMinutes + 7;            
        } elseif($targetTerrain=='|' && $equippedItem==2){
            // Narrow region and I have the rope equippment. Must equip either nothing or torch. Going to random it
            if($currentTerrain=='.'){
                $equippedItem = 1;
            } else {
                $equippedItem = 0;
            }   
            $totalMoveMinutes = $totalMoveMinutes + 7;          
        }
        $totalMoveMinutes++; 
        moveLocation($caveGridArray,$currentRow-1,$currentColumn,$targetRow,$targetColumn,$currentRow,$currentColumn,$totalMoveMinutes,$equippedItem,$newPreviousLocations,$timeToTargetArray,$moveCount);        
    }
    $proposedColumn = $currentColumn+1;
    $proposedRow = $currentRow;
    $targetLocation = "$proposedRow,$proposedColumn"; 
    $alreadyUsed = (in_array($targetLocation,$previousLocations)<1 ? 0:1);
    if(isset($caveGridArray[$currentRow][$currentColumn+1]) && $alreadyUsed<1) {
        // This location exists, and it's not where we just came from
        $currentTerrain = $caveGridArray[$currentRow][$currentColumn];
        $targetTerrain = $caveGridArray[$currentRow][$currentColumn+1];
        if($targetTerrain=='.' && $equippedItem==0){
            // Rocky region and I have nothing equippet. Must equip something
            if($currentTerrain=='='){
                $equippedItem = 2;
            } else {
                $equippedItem = 1;
            }
            $totalMoveMinutes = $totalMoveMinutes + 7;  
        } elseif($targetTerrain=='=' && $equippedItem==1){
            // Wet region and I have the torch equippment. Must equip either nothing or rope. Going to random it
            if($currentTerrain=='|'){
                $equippedItem = 0;
            } else {
                $equippedItem = 2;
            }
            $totalMoveMinutes = $totalMoveMinutes + 7;             
        } elseif($targetTerrain=='|' && $equippedItem==2){
            // Narrow region and I have the rope equippment. Must equip either nothing or torch. Going to random it
            if($currentTerrain=='.'){
                $equippedItem = 1;
            } else {
                $equippedItem = 0;
            }  
            $totalMoveMinutes = $totalMoveMinutes + 7;          
        }
        $totalMoveMinutes++;       
        moveLocation($caveGridArray,$currentRow,$currentColumn+1,$targetRow,$targetColumn,$currentRow,$currentColumn,$totalMoveMinutes,$equippedItem,$newPreviousLocations,$timeToTargetArray,$moveCount);        
    }
    $proposedColumn = $currentColumn;
    $proposedRow = $currentRow+1;
    $targetLocation = "$proposedRow,$proposedColumn"; 
    $alreadyUsed = (in_array($targetLocation,$previousLocations)<1 ? 0:1);
    if(isset($caveGridArray[$currentRow+1][$currentColumn]) && $alreadyUsed<1) {
        // This location exists, and it's not where we just came from
        $currentTerrain = $caveGridArray[$currentRow][$currentColumn];
        $targetTerrain = $caveGridArray[$currentRow+1][$currentColumn];
        if($targetTerrain=='.' && $equippedItem==0){
            // Rocky region and I have nothing equippet. Must equip something
            if($currentTerrain=='='){
                $equippedItem = 2;
            } else {
                $equippedItem = 1;
            }
            $totalMoveMinutes = $totalMoveMinutes +7;  
        } elseif($targetTerrain=='=' && $equippedItem==1){
            // Wet region and I have the torch equippment. Must equip either nothing or rope. Going to random it
            if($currentTerrain=='|'){
                $equippedItem = 0;
            } else {
                $equippedItem = 2;
            }
            $totalMoveMinutes = $totalMoveMinutes +7;            
        } elseif($targetTerrain=='|' && $equippedItem==2){
            // Narrow region and I have the rope equippment. Must equip either nothing or torch. Going to random it
            if($currentTerrain=='.'){
                $equippedItem = 1;
            } else {
                $equippedItem = 0;
            } 
            $totalMoveMinutes = $totalMoveMinutes +7;          
        }
        $totalMoveMinutes++; 
        moveLocation($caveGridArray,$currentRow+1,$currentColumn,$targetRow,$targetColumn,$currentRow,$currentColumn,$totalMoveMinutes,$equippedItem,$newPreviousLocations,$timeToTargetArray,$moveCount);        
    }
    
    //echo "So - total move minutes = $totalMoveMinutes - $currentRow,$currentColumn - $targetLocation<br>";
    /*if(!isset($newPreviousLocations)) {
       echo "FOUND AN END! $totalMoveMinutes - $currentRow,$currentColumn - $targetLocation <br>" ;
       print_r($previousLocations);
       echo "<br>";
    } else {
         print_r($newPreviousLocations);
    }
           
    echo "<br>";
     * 
     */
    
    
    
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