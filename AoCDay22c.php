<?php


$caveDepth = 3879;
$targetX = 8;
$targetY = 713;
$targetX = 713;
$targetY = 8;
/*$caveDepth = 510;
$targetX = 10;
$targetY = 10;
 * 
 */
 
 
 
$caveGridArray = array();
$caveGridArrayGeoIndex = array();

for($r=0;$r<=$targetY+100;$r++) {
    for($c=0;$c<=$targetX+100;$c++) {


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
for($r=0;$r<=$targetY+100;$r++) {
    for($c=0;$c<=$targetX+100;$c++) {

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
//printGrid($caveGridArray);

flush();
ob_flush();
$previousLocations = array();
$previousLocations[] = "0,0";
// The way my code works, if the location is invalid but not stepped into, it will return but never add the grid reference to the "no" list so it keeps trying
// So to avoid this, we need to see the array with invalid locations
for($r=-1;$r<=$targetY+101;$r++) {
    for($c=-1;$c<=$targetX+101;$c++) {
        if(!isset($caveGridArray[$r][$c])) {
            $previousLocations[] = "$r,$c";
        }
    }
    $c=-1;
}



$var = print_r($previousLocations,true);
//echo "<pre>$var</pre>"; 

flush();
            ob_flush();
            $timeToGridLocation = array();
moveLocation($caveGridArray,0,0,$targetY,$targetX,0,0,0,1,$previousLocations,$timeToTargetArray,1,0,1,"0,0",$timeToGridLocation,0,0);
echo "<br><br>";
$time_post = microtime(true);
            $exec_time = $time_post - $time_pre;
            echo "Done in $exec_time seconds<Br>";

              array_multisort(array_column($timeToTargetArray, 'totalTime'), SORT_ASC,
                $timeToTargetArray);
              echo "found a total of ".count($timeToTargetArray)." paths<br>";
$var = print_r($timeToTargetArray,true);
echo "<pre>$var</pre>";              
            


// For equipped item
// 0 = neither, 1 = torch, 2 = climbing gear

function moveLocation(&$caveGridArray, $currentRow, $currentColumn, $targetRow, $targetColumn, $lastRow, $lastColumn, $totalMoveMinutes, $equippedItem, $previousLocations, &$timeToTargetArray, $moveCount, $equippingItemTime,$myProcessID,$moveList,&$timeToGridLocation, $totalMoves, $totalChanges) {
    $isFound = 0;    
    
    while($isFound < 1) {
        
        if($totalMoveMinutes>1000) {
            $isFound = 1;
            return;
        }
        
        if(count($timeToTargetArray)>0) {
            array_multisort(array_column($timeToTargetArray, 'totalTime'), SORT_ASC,
                    $timeToTargetArray);
            // We've gone too far 
            //echo "got here -".$timeToTargetArray[0]['totalTime']." - ".count($timeToTargetArray)." ::";
            if($totalMoveMinutes > $timeToTargetArray[0]['totalTime']) {
               $isFound = 1;
                return; 
            }
        }
        // Check how long it's taken to get here. If I've got here with less expense before, go back
        if(!isset($timeToGridLocation["$currentRow,$currentColumn"])) {
            $timeToGridLocation["$currentRow,$currentColumn"] = $totalMoves;
        } elseif($timeToGridLocation["$currentRow,$currentColumn"] < $totalMoves) {
            // I got here cheaper before, exit
            //echo "cheaper";
            //$isFound = 1;
            return;
        } else {
            // This is the fastest I've got here. Add it to the array
           // print_r($timeToGridLocation);
           $timeToGridLocation["$currentRow,$currentColumn"] = $totalMoves; 
        }
        $lastRow = $currentRow;
        $lastColumn = $currentColumn;
        $proposedColumn = $currentColumn;
        $proposedRow = $currentRow+1;
        $moveDown = "$proposedRow,$proposedColumn";
        $downTargetDistance = abs($proposedRow-$targetRow)+abs($proposedColumn-$targetColumn);
        
        $proposedColumn = $currentColumn;
        $proposedRow = $currentRow-1;
        $moveUp = "$proposedRow,$proposedColumn"; 
        $upTargetDistance = abs($proposedRow-$targetRow)+abs($proposedColumn-$targetColumn);  
        
        $proposedColumn = $currentColumn-1;
        $proposedRow = $currentRow;
        $moveLeft = "$proposedRow,$proposedColumn";
        $leftTargetDistance = abs($proposedRow-$targetRow)+abs($proposedColumn-$targetColumn);
        
        $proposedColumn = $currentColumn+1;
        $proposedRow = $currentRow;
        $moveRight = "$proposedRow,$proposedColumn";
        $rightTargetDistance = abs($proposedRow-$targetRow)+abs($proposedColumn-$targetColumn);
        
        $downTerrain = (isset($caveGridArray[$currentRow+1][$currentColumn])) ? $caveGridArray[$currentRow+1][$currentColumn]:"X";
        $upTerrain = (isset($caveGridArray[$currentRow-1][$currentColumn])) ? $caveGridArray[$currentRow-1][$currentColumn]:"X";
        $leftTerrain = (isset($caveGridArray[$currentRow][$currentColumn-1])) ? $caveGridArray[$currentRow][$currentColumn-1]:"X";
        $rightTerrain = (isset($caveGridArray[$currentRow][$currentColumn+1])) ? $caveGridArray[$currentRow][$currentColumn+1]:"X";
        $currentTerrain = (isset($caveGridArray[$currentRow][$currentColumn])) ? $caveGridArray[$currentRow][$currentColumn]:"X";
        
        $downCost = (($downTerrain=='.' && $equippedItem==0) || ($downTerrain=='=' && $equippedItem==1) || ($downTerrain=='|' && $equippedItem==2)) ? 7:0;
        $upCost = (($upTerrain=='.' && $equippedItem==0) || ($upTerrain=='=' && $equippedItem==1) || ($upTerrain=='|' && $equippedItem==2)) ? 7:0;
        $leftCost = (($leftTerrain=='.' && $equippedItem==0) || ($leftTerrain=='=' && $equippedItem==1) || ($leftTerrain=='|' && $equippedItem==2)) ? 7:0;
        $rightCost = (($rightTerrain=='.' && $equippedItem==0) || ($rightTerrain=='=' && $equippedItem==1) || ($rightTerrain=='|' && $equippedItem==2)) ? 7:0;

        $alreadyBeenDown = (in_array($moveDown,$previousLocations)==FALSE ? 0:10);
        $alreadyBeenUp = (in_array($moveUp,$previousLocations)==FALSE ? 0:10);       
        $alreadyBeenLeft = (in_array($moveLeft,$previousLocations)==FALSE ? 0:10);
        $alreadyBeenRight = (in_array($moveRight,$previousLocations)==FALSE ? 0:10);
        
        $costWeighting = 0;
        $distanceWeighting = 4;
        $modifiedDistanceWeighting = 8;
        if(($downTargetDistance <= $leftTargetDistance-2) || ($downTargetDistance <= $leftTargetDistance+2)) $distanceWeighting = $modifiedDistanceWeighting;
        if(($downTargetDistance <= $rightTargetDistance-2) || ($downTargetDistance <= $rightTargetDistance+2)) $distanceWeighting = $modifiedDistanceWeighting;
        if(($upTargetDistance <= $leftTargetDistance-2) || ($upTargetDistance <= $leftTargetDistance+2)) $distanceWeighting = $modifiedDistanceWeighting;
        if(($upTargetDistance <= $rightTargetDistance-2) || ($upTargetDistance <= $rightTargetDistance+2)) $distanceWeighting = $modifiedDistanceWeighting;
        if(($leftTargetDistance <= $upTargetDistance-2) || ($leftTargetDistance <= $upTargetDistance+2)) $distanceWeighting = $modifiedDistanceWeighting;
        if(($leftTargetDistance <= $downTargetDistance-2) || ($leftTargetDistance <= $downTargetDistance+2)) $distanceWeighting = $modifiedDistanceWeighting;
        if(($rightTargetDistance <= $upTargetDistance-2) || ($rightTargetDistance <= $upTargetDistance+2)) $distanceWeighting = $modifiedDistanceWeighting;
        if(($rightTargetDistance <= $downTargetDistance-2) || ($rightTargetDistance <= $downTargetDistance+2)) $distanceWeighting = $modifiedDistanceWeighting;
        
        
        $downWeightedVariable = ((($downTargetDistance==0)? -100:$downTargetDistance) + $distanceWeighting) + ($downCost * $costWeighting);
        $upWeightedVariable = ((($upTargetDistance==0)? -100:$upTargetDistance) + $distanceWeighting) + ($upCost * $costWeighting);
        $leftWeightedVariable = ((($leftTargetDistance==0)? -100:$leftTargetDistance) + $distanceWeighting) + ($leftCost * $costWeighting);
        $rightWeightedVariable = ((($rightTargetDistance==0)? -100:$rightTargetDistance) + $distanceWeighting) + ($rightCost * $costWeighting);
        
        $downCost += $alreadyBeenDown;
        $upCost += $alreadyBeenUp;
        $leftCost += $alreadyBeenLeft;
        $rightCost += $alreadyBeenRight;   
        
        $pathOptions = array();
        if($alreadyBeenDown < 10) {
            $pathOptions[] = array('direction' => 'down', 'cost' => $downCost, 'terrain' => $downTerrain, 'distanceToTarget' => $downTargetDistance, 'weighted' => $downWeightedVariable);
        }
        if($alreadyBeenUp < 10) {
            $pathOptions[] = array('direction' => 'up', 'cost' => $upCost, 'terrain' => $upTerrain, 'distanceToTarget' => $upTargetDistance, 'weighted' => $upWeightedVariable);
        }
        if($alreadyBeenLeft < 10) {
            $pathOptions[] = array('direction' => 'left', 'cost' => $leftCost, 'terrain' => $leftTerrain, 'distanceToTarget' => $leftTargetDistance, 'weighted' => $leftWeightedVariable);
        }
        if($alreadyBeenRight < 10) {
            $pathOptions[] = array('direction' => 'right', 'cost' => $rightCost, 'terrain' => $rightTerrain, 'distanceToTarget' => $rightTargetDistance, 'weighted' => $rightWeightedVariable);
        }
        
        array_multisort(array_column($pathOptions, 'weighted'), SORT_ASC, 
                array_column($pathOptions, 'distanceToTarget'), SORT_ASC, 
                array_column($pathOptions, 'cost'), SORT_ASC,  
                $pathOptions);
        
        if($currentRow==$targetRow && $currentColumn==$targetColumn) {
            if($equippedItem!=1) {
                // Need to equip the torch!
                $totalMoveMinutes = $totalMoveMinutes + 7;
                $equippingItemTime += 7;
                $equippedItem = 1;
            }
            $timeToTargetArray[] = array('totalTime' => $totalMoveMinutes,'previousMoves' => $moveList);
           // echo " - WE FOUND IT!!! Total move cost of: $totalMoveMinutes including a total cost of changing items of : $equippingItemTime<br>";
            flush();
            ob_flush();
            $isFound = 1;
             //$caveGridArray[$currentRow][$currentColumn] = 'C';
    //printGrid($caveGridArray);
    return $myProcessID;
        } elseif(($alreadyBeenDown + $alreadyBeenUp + $alreadyBeenLeft + $alreadyBeenRight) == 40) {
            // Dead end. Time to call it a day
           // echo "Hit a dead end. At location $currentRow,$currentColumn from location $lastColumn,$lastRow - $moveList<br>";
           // print_r(debug_backtrace());
            // $caveGridArray[$currentRow][$currentColumn] = 'P';
    //printGrid($caveGridArray);
    return $myProcessID;
        } else {

            $oldEquippedItem = $equippedItem;           
            $newEquippedItem = $equippedItem;  
            
            $tryMore = 1;
            $newMyProcessID = 1;
            while($tryMore < 4) {
                if(isset($pathOptions[$tryMore])) {
                    // There are two options. Lets branch!
                    $moveCost = 0;
                    $newMoveList = $moveList;
                    $newTotalMoves = $totalMoves;
                    $newTotalChanges = $totalChanges;
                    if($myProcessID==1) {
                        $newMyProcessID++;
                    }
                    $newTotalMoveMinutes = $totalMoveMinutes;
                    $newEquippingItemTime = $equippingItemTime;
                    $newMoveCount = $moveCount;
                    if($pathOptions[$tryMore]['direction']=='down') {
                        if($pathOptions[$tryMore]['cost']==7) {
                            $newEquippedItem = ($pathOptions[$tryMore]['terrain']=='.' && $currentTerrain=='=') ? 2:1;
                            $newEquippedItem = ($pathOptions[$tryMore]['terrain']=='=' && $currentTerrain=='|') ? 0:2;
                            $newEquippedItem = ($pathOptions[$tryMore]['terrain']=='|' && $currentTerrain=='.') ? 1:0;
                            $newTotalMoveMinutes = $totalMoveMinutes + 7;
                            $newEquippingItemTime += 7;
                            $newTotalChanges++;
                            $moveCost = 7;
                            
                        }
                        $newCurrentColumn = $currentColumn;
                        $newCurrentRow = $currentRow+1;    
                    } elseif($pathOptions[$tryMore]['direction']=='up') {
                        if($pathOptions[$tryMore]['cost']==7) {
                            $newEquippedItem = ($pathOptions[$tryMore]['terrain']=='.' && $currentTerrain=='=') ? 2:1;
                            $newEquippedItem = ($pathOptions[$tryMore]['terrain']=='=' && $currentTerrain=='|') ? 0:2;
                            $newEquippedItem = ($pathOptions[$tryMore]['terrain']=='|' && $currentTerrain=='.') ? 1:0;
                            $newTotalMoveMinutes = $totalMoveMinutes + 7;
                            $newEquippingItemTime += 7;
                            $newTotalChanges++;
                            $moveCost = 7;
                        }
                        $newCurrentColumn = $currentColumn;
                        $newCurrentRow = $currentRow-1;                
                    } elseif($pathOptions[$tryMore]['direction']=='left') {
                        if($pathOptions[$tryMore]['cost']==7) {
                            $newEquippedItem = ($pathOptions[$tryMore]['terrain']=='.' && $currentTerrain=='=') ? 2:1;
                            $newEquippedItem = ($pathOptions[$tryMore]['terrain']=='=' && $currentTerrain=='|') ? 0:2;
                            $newEquippedItem = ($pathOptions[$tryMore]['terrain']=='|' && $currentTerrain=='.') ? 1:0;
                            $newTotalMoveMinutes = $totalMoveMinutes + 7;
                            $newEquippingItemTime += 7;
                            $newTotalChanges++;
                            $moveCost = 7;
                        }
                        $newCurrentColumn = $currentColumn-1;
                        $newCurrentRow = $currentRow;                
                    } elseif($pathOptions[$tryMore]['direction']=='right') {
                        if($pathOptions[$tryMore]['cost']==7) {
                            $newEquippedItem = ($pathOptions[$tryMore]['terrain']=='.' && $currentTerrain=='=') ? 2:1;
                            $newEquippedItem = ($pathOptions[$tryMore]['terrain']=='=' && $currentTerrain=='|') ? 0:2;
                            $newEquippedItem = ($pathOptions[$tryMore]['terrain']=='|' && $currentTerrain=='.') ? 1:0;
                            $newTotalMoveMinutes = $totalMoveMinutes + 7;
                            $newEquippingItemTime += 7;
                            $newTotalChanges++;
                            $moveCost = 7;
                        }
                        $newCurrentColumn = $currentColumn+1;
                        $newCurrentRow = $currentRow;                
                    }
                    $newTotalMoves++;
                    $newMoveCount++;
                    $newTotalMoveMinutes++;
                    $newPreviousLocations = $previousLocations;
                    $newPreviousLocations[] = "$newCurrentRow,$newCurrentColumn";
                    $newMoveList .= " :: $newCurrentRow,$newCurrentColumn";




                   // echo "Multiple options - Branching 1 - $alreadyBeenDown : $alreadyBeenUp : $alreadyBeenLeft :$alreadyBeenRight :: ".$pathOptions[$tryMore]['direction']."<br>";

                  //  echo "Moving to $newCurrentRow,$newCurrentColumn at a cost of $moveCost ($oldEquippedItem-$newEquippedItem) :: <br>";
                    $myProcessID = moveLocation($caveGridArray,$newCurrentRow,$newCurrentColumn,$targetRow,$targetColumn,$lastRow,$lastColumn,$newTotalMoveMinutes,$newEquippedItem,$newPreviousLocations,$timeToTargetArray,$newMoveCount,$newEquippingItemTime,$newMyProcessID,$newMoveList,$timeToGridLocation, $newTotalMoves, $newTotalChanges);
                }
                $tryMore++;
            }
            
            $moveCost = 0;
            if($pathOptions[0]['direction']=='down') {
                if($pathOptions[0]['cost']==7) {
                    $equippedItem = ($pathOptions[0]['terrain']=='.' && $currentTerrain=='=') ? 2:1;
                    $equippedItem = ($pathOptions[0]['terrain']=='=' && $currentTerrain=='|') ? 0:2;
                    $equippedItem = ($pathOptions[0]['terrain']=='|' && $currentTerrain=='.') ? 1:0;
                    $totalMoveMinutes = $totalMoveMinutes + 7;
                    $equippingItemTime += 7;
                    $totalChanges++;
                    $moveCost = 7;
                }
                $currentColumn = $currentColumn;
                $currentRow = $currentRow+1;    
            } elseif($pathOptions[0]['direction']=='up') {
                if($pathOptions[0]['cost']==7) {
                    $equippedItem = ($pathOptions[0]['terrain']=='.' && $currentTerrain=='=') ? 2:1;
                    $equippedItem = ($pathOptions[0]['terrain']=='=' && $currentTerrain=='|') ? 0:2;
                    $equippedItem = ($pathOptions[0]['terrain']=='|' && $currentTerrain=='.') ? 1:0;
                    $totalMoveMinutes = $totalMoveMinutes + 7;
                    $equippingItemTime += 7;
                    $totalChanges++;
                    $moveCost = 7;
                }
                $currentColumn = $currentColumn;
                $currentRow = $currentRow-1;                
            } elseif($pathOptions[0]['direction']=='left') {
                if($pathOptions[0]['cost']==7) {
                    $equippedItem = ($pathOptions[0]['terrain']=='.' && $currentTerrain=='=') ? 2:1;
                    $equippedItem = ($pathOptions[0]['terrain']=='=' && $currentTerrain=='|') ? 0:2;
                    $equippedItem = ($pathOptions[0]['terrain']=='|' && $currentTerrain=='.') ? 1:0;
                    $totalMoveMinutes = $totalMoveMinutes + 7;
                    $equippingItemTime += 7;
                    $totalChanges++;
                    $moveCost = 7;
                }
                $currentColumn = $currentColumn-1;
                $currentRow = $currentRow;                
            } elseif($pathOptions[0]['direction']=='right') {
                if($pathOptions[0]['cost']==7) {
                    $equippedItem = ($pathOptions[0]['terrain']=='.' && $currentTerrain=='=') ? 2:1;
                    $equippedItem = ($pathOptions[0]['terrain']=='=' && $currentTerrain=='|') ? 0:2;
                    $equippedItem = ($pathOptions[0]['terrain']=='|' && $currentTerrain=='.') ? 1:0;
                    $totalMoveMinutes = $totalMoveMinutes + 7;
                    $equippingItemTime += 7;
                    $totalChanges++;
                    $moveCost = 7;
                }
                $currentColumn = $currentColumn+1;
                $currentRow = $currentRow;                
            }
            $totalMoves++; 
            $moveCount++;      
            
            //echo "Moving to $currentRow,$currentColumn at a cost of $moveCost ($oldEquippedItem-$equippedItem) :: <br>";
            $totalMoveMinutes++;
            $previousLocations[] = "$currentRow,$currentColumn";
                    $moveList .= " :: $currentRow,$currentColumn";
        }
        

        
    }
    
    $caveGridArray[$currentRow][$currentColumn] = 'O';
    printGrid($caveGridArray);
    return $myProcessID;
    
}

die();





































/*




function moveLocation(&$caveGridArray, $currentRow, $currentColumn, $targetRow, $targetColumn, $lastRow, $lastColumn, $totalMoveMinutes, $equippedItem, $previousLocations, &$timeToTargetArray, $moveCount) {
    

    $proposedColumn = $currentColumn-1;
    $proposedRow = $currentRow;
    $targetLocation = "$proposedRow,$proposedColumn";  
    $alreadyUsed = (in_array($targetLocation,$previousLocations)==FALSE ? 0:1);
    $newPreviousLocations = $previousLocations;
    $newPreviousLocations[] = "$currentRow,$currentColumn";
    //$newPreviousLocations = array_merge($previousLocations,array(0=>"$currentRow,$currentColumn"));
   //echo "FAKE PREVIOUS LOCATION - $targetLocation :: $currentRow,$currentColumn<Br>";
    //$found = in_array($targetLocation,$previousLocations);
    if(in_array($targetLocation,$previousLocations)){
        //echo "PREVIOUS LOCATION - $targetLocation<Br>";
    } else {
        //echo "NOT PREVIOUS LOCATION - $targetLocation<Br>";
    }

   // }
   // echo "query finds $found - $alreadyUsed<br>";
    echo "Last: $lastRow,$lastColumn - Current: $currentRow,$currentColumn, Target: $targetRow,$targetColumn - ".in_array($targetLocation,$previousLocations)." - Proposed: $targetLocation :: $alreadyUsed<br>";
   // print_r($previousLocations);
    if($currentRow==$targetRow && $currentColumn==$targetColumn) {
        // We made it to the target
        // Add this to the array and break
        if($equippedItem!=1) {
            // Need to equip the torch!
            $totalMoveMinutes = $totalMoveMinutes + 7;
            $equippedItem = 1;
        }
        $timeToTargetArray[] = $totalMoveMinutes;
        //$caveGridArray[$targetRow][$targetColumn] = 'T';
        echo " - WE FOUND IT!!! - $totalMoveMinutes Current: $currentRow,$currentColumn, Target: $targetRow,$targetColumn  -  - Proposed: $targetLocation :: $alreadyUsed<br>";
          flush();
        ob_flush();
        return;
       // echo "hgi";
    }
//print_r($newPreviousLocations);
    $moveCount++;
    if(isset($caveGridArray[$currentRow][$currentColumn-1]) && $alreadyUsed===0) {
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
    $alreadyUsed = (in_array($targetLocation,$previousLocations)===FALSE ? 0:1);
    if(in_array($targetLocation,$previousLocations)){
        //echo "PREVIOUS LOCATION - $targetLocation<Br>";
    } else {
        //echo "NOT PREVIOUS LOCATION - $targetLocation<Br>";
    }
    if(isset($caveGridArray[$currentRow-1][$currentColumn]) && $alreadyUsed===0) {
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
    $alreadyUsed = (in_array($targetLocation,$previousLocations)===FALSE ? 0:1);
    if(in_array($targetLocation,$previousLocations)){
        //echo "PREVIOUS LOCATION - $targetLocation<Br>";
    } else {
        //echo "NOT PREVIOUS LOCATION - $targetLocation<Br>";
    }
    if(isset($caveGridArray[$currentRow][$currentColumn+1]) && $alreadyUsed===0) {
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
    $alreadyUsed = (in_array($targetLocation,$previousLocations)===FALSE ? 0:1);
    if(in_array($targetLocation,$previousLocations)){
       // echo "PREVIOUS LOCATION - $targetLocation<Br>";
    } else {
       // echo "NOT PREVIOUS LOCATION - $targetLocation<Br>";
    }
    if(isset($caveGridArray[$currentRow+1][$currentColumn]) && $alreadyUsed===0) {
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
    

    
    
    
    return;
    
}


 * 
     */


















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