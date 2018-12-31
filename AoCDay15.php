<?php

$cavernInput = 
'################################
###############..........#######
######.##########G.......#######
#####..###..######...G...#######
#####..#...G..##........########
#####..G......#GG.......########
######..G..#G.......G....#######
########...###...#........######
######....G###.GG#.........#####
######G...####...#..........####
###.##.....G................####
###.......................#.####
##.......G....#####.......E.####
###.......G..#######....##E.####
####........#########..G.#.#####
#.#..##.....#########..#..######
#....####.G.#########......#####
#.##G#####..#########.....###.E#
###########.#########...E.E....#
###########..#######..........##
###########..E#####.......######
###########............E.#######
#########.E.....E..##.#..#######
#######.G.###.......E###########
######...#######....############
################...#############
###############....#############
###############...##############
#################.##############
#################.##############
#################.##############
################################';
/*
// Outcome: 37 * 982 = 36334
$cavernInput = 
'#######
#G..#E#
#E#E.E#
#G.##.#
#...#E#
#...E.#
#######';
 
// Outcome: 46 * 859 = 39514
$cavernInput = 
'#######
#E..EG#
#.#G.E#
#E.##E#
#G..#.#
#..E#.#
#######';

// Outcome: 35 * 793 = 27755
$cavernInput = 
'#######
#E.G#.#
#.#G..#
#G.#.G#
#G..#.# 
#...E.#
#######';
 
// Outcome: 54 * 536 = 28944
$cavernInput = 
'#######
#.E...#
#.#..G#
#.###.#
#E#G#G#
#...#G#
#######';

// Outcome: 20 * 937 = 18740
$cavernInput = 
'#########
#G......#
#.E.#...#
#..##..G#
#...##..#
#...#...#
#.G...G.#
#.....G.#
#########';

// Outcome 47 * 590 = 27730 -- Correct

$cavernInput = 
'#######
#.G...#
#...EG#
#.#.#G#
#..G#E#
#.....#
#######';
* 
 */

// Part 1:

// Part 2: 


// # Walls
// . Open space
// G Goblin
// E Elf

 // 3 attakc power, 200 health

// Move then Attack
// Do all actions for each unit before moving on
$time_pre = microtime(true);
// Reading order - top to bottom, left to right
require __DIR__ . '/vendor/autoload.php';
use Letournel\PathFinder\Algorithms;
use Letournel\PathFinder\Converters\Grid\ASCIISyntax;
use Letournel\PathFinder\Core;
use Letournel\PathFinder\Distances;

$cavernInputRows = explode("\n",$cavernInput);
$cavernArray = array();
$elfArray = array();
$goblinArray = array();

$goblinAttack = 3;
$elfAttack = 3;

$rowCount = count($cavernInputRows);
foreach($cavernInputRows as $rowID => $rowData) {
	$splitGridValues = str_split($rowData, 1);
        $columnCount = count($splitGridValues);
	foreach($splitGridValues as $columnID => $gridValue) {
        $cavernArray[$rowID][$columnID] = $gridValue;
        if($gridValue=='G') {
            // It's a Goblin
            $goblinArray[] = array('row' => $rowID, 'column' => $columnID, 'hitPoints' => 200, 'hasMoved' => -1);
        } elseif($gridValue=='E') {
            // It's an Elf
            $elfArray[] = array('row' => $rowID, 'column' => $columnID, 'hitPoints' => 200, 'hasMoved' => -1);
        }
    }
}


printGrid($cavernArray);
echo "<br><br>";
$roundCount = 0;
$combatOver = 0;
$foundGoblin = 0;
$foundElf = 0;
while($combatOver < 1) { 
    if(count($elfArray) < 1 || count($goblinArray) < 1) {
            // No targets of the opposition, so the fight is over
           printGrid($cavernArray);

           $combatOver == 1;
            break ;
        }
    for($rowID = 0; $rowID<$rowCount; $rowID++) {          
        for($columnID = 0; $columnID<$columnCount; $columnID++) {
        $gridValue = $cavernArray[$rowID][$columnID];
        
    //foreach($cavernArray as $rowID => $rowColumn) {
        //foreach ($rowColumn as $columnID => $gridValue){
            
            if($gridValue=='G') {
                // It's a Goblin    
                $currentRow = $rowID;
                $currentColumn = $columnID;
                $goblinArrayID = findCharacterID($goblinArray,'row',$rowID,'column',$columnID);
                // Check if it's already moved this round. If it has, continue to the next grid position
                //echo "$rowID - $columnID - $goblinArrayID<br>";
                if($goblinArrayID==-1) continue;
                if($goblinArray[$goblinArrayID]['hasMoved']>=$roundCount) continue;
                if($goblinArray[$goblinArrayID]['hitPoints']<1) continue;
                if(count($elfArray) < 1) break 3;
                $inRange = 0;
                // Need to check here if we are already in range of a target
                $inRange = inRange($cavernArray,$rowID,$columnID,'E');
                if($inRange == 0) {
                    $targets = identifyTargets($cavernArray,'goblin',$rowID,$columnID);  
                    if($targets==-1) {
                        // No valid targets for this unit this round. Move on
                        continue;
                    }

                    // Now we make a move. Lets sort the array to find the right move to make
                    array_multisort(array_column($targets, 'length'), SORT_ASC,
                                    array_column($targets, 'row'), SORT_ASC,
                                    array_column($targets, 'column'), SORT_ASC,
                                    $targets);
                    echo "Grid position $rowID,$columnID is a Goblin and we're going after target ".$targets[0]['targetRow'].",".$targets[0]['targetColumn']." with the new move of ".$targets[0]['nextMove']."<br>";
                    $cavernArray[$rowID][$columnID] = '.';
                    $cavernArray[$targets[0]['row']][$targets[0]['column']] = 'G';   
                    $goblinArray[$goblinArrayID]['row'] = $targets[0]['row'];
                    $goblinArray[$goblinArrayID]['column'] = $targets[0]['column'];
                    $currentRow = $targets[0]['row'];
                    $currentColumn = $targets[0]['column'];
                                    
                    //printGrid($cavernArray);
                }
                                 
                $goblinArray[$goblinArrayID]['hasMoved'] = $roundCount;
                $inRange = inRange($cavernArray,$currentRow,$currentColumn,'E');
                if($inRange > 0) {
                    $targetSelection = selectTarget($cavernArray,$currentRow,$currentColumn,'E',$elfArray);
                    if(!is_array($targetSelection)) continue;   
                    $elfArray[$targetSelection['ID']]['hitPoints'] = $elfArray[$targetSelection['ID']]['hitPoints'] - $goblinAttack;
                    echo "Goblin at position $currentRow,$currentColumn is attacking Elf ".$targetSelection['ID']." at position ".$targetSelection['row'].",".$targetSelection['column']." and does $goblinAttack damage (".$elfArray[$targetSelection['ID']]['hitPoints']." remaining)<br>";
                    if($elfArray[$targetSelection['ID']]['hitPoints'] < 1) {
                        //echo "Before:<br>";
                       // printGrid($cavernArray);
                        unset($elfArray[$targetSelection['ID']]);
                        //$elfArray[$targetSelection['ID']]['row'] = -1;
                        //$elfArray[$targetSelection['ID']]['column'] = -1;
                        $cavernArray[$targetSelection['row']][$targetSelection['column']] = '.';
                        //echo "After:<br>";
                        //printGrid($cavernArray);
                    }                    
                }
                
            } elseif($gridValue=='E') {
                // It's an Elf     
                $currentRow = $rowID;
                $currentColumn = $columnID;
                $elfArrayID = findCharacterID($elfArray,'row',$rowID,'column',$columnID);
                //echo " - $elfArrayID :: $rowID :: $columnID - <br>";
                // Check if it's already moved this round. If it has, continue to the next grid position
                if($elfArrayID==-1) continue;
                if($elfArray[$elfArrayID]['hasMoved']>=$roundCount) continue;   
                if($elfArray[$elfArrayID]['hitPoints']<1) continue;         
                if(count($goblinArray) < 1) break 3;
                // Need to check here if we are already in range of a target
                $inRange = 0;
                $inRange = inRange($cavernArray,$rowID,$columnID,'G');
                if($inRange == 0) {
                    $targets = identifyTargets($cavernArray,'elf',$rowID,$columnID);   
                    if($targets==-1) {
                        // No valid targets for this unit this round. Move on
                        continue;
                    }

                    // Now we make a move. Lets sort the array to find the right move to make
                    array_multisort(array_column($targets, 'length'), SORT_ASC,
                                    array_column($targets, 'row'), SORT_ASC,
                                    array_column($targets, 'column'), SORT_ASC,
                                    $targets);
                    echo "Grid position $rowID,$columnID is an Elf and we're going after target ".$targets[0]['targetRow'].",".$targets[0]['targetColumn']." with the new move of ".$targets[0]['nextMove']."<br>";
                    $cavernArray[$rowID][$columnID] = '.';
                    $cavernArray[$targets[0]['row']][$targets[0]['column']] = 'E';                        
                    $elfArray[$elfArrayID]['row'] = $targets[0]['row'];
                    $elfArray[$elfArrayID]['column'] = $targets[0]['column'];
                    $currentRow = $targets[0]['row'];
                    $currentColumn = $targets[0]['column'];
                    //printGrid($cavernArray);
                }
                                 
                $elfArray[$elfArrayID]['hasMoved'] = $roundCount;
                $inRange = inRange($cavernArray,$currentRow,$currentColumn,'G');
                if($inRange > 0) {
                    $targetSelection = selectTarget($cavernArray,$currentRow,$currentColumn,'G',$goblinArray);
                    if(!is_array($targetSelection)) continue;                    
                    $goblinArray[$targetSelection['ID']]['hitPoints'] = $goblinArray[$targetSelection['ID']]['hitPoints'] - $elfAttack;
                    echo "Elf at position $currentRow,$currentColumn is attacking Goblin ".$targetSelection['ID']." at position ".$targetSelection['row'].",".$targetSelection['column']." and does $elfAttack damage (".$goblinArray[$targetSelection['ID']]['hitPoints']." remaining)<br>";
                    if($goblinArray[$targetSelection['ID']]['hitPoints'] < 1) {
                        //echo "Before:<br>";
                        //printGrid($cavernArray);
                        unset($goblinArray[$targetSelection['ID']]);
                        //$goblinArray[$targetSelection['ID']]['row'] = -1;
                       // $goblinArray[$targetSelection['ID']]['column'] = -1;
                        $cavernArray[$targetSelection['row']][$targetSelection['column']] = '.';
                        //echo "After:<br>";
                        //printGrid($cavernArray);
                    }                    
                }
            }
            
        }
       
    }

    $roundCount++;
    echo "After Round $roundCount<br>";
    printGrid($cavernArray);
    flush();
    ob_flush();
}

$time_post = microtime(true);
        $exec_time = $time_post - $time_pre;
$remainingHitPoints = 0;
forEach($elfArray as $id => $values){
    $remainingHitPoints += $values['hitPoints'];
}
forEach($goblinArray as $id => $values){
    $remainingHitPoints += $values['hitPoints'];
}

$totalScore = $roundCount * $remainingHitPoints;
echo "<br>Calculated in $exec_time seconds. Combat over after $roundCount full rounds. Remaining hit points stand at $remainingHitPoints. Total score: $totalScore<br>";

$var = print_r($elfArray,true);
            echo "<pre>$var</pre>";  

            $var = print_r($goblinArray,true);
            echo "<pre>$var</pre>";  
            
            



// Identify all targets
// Identify all open squares next to all targets (up, down, left, right)
// Check if in range of existing target
// Not in range & no open squares = end
// In range of target, don't move - go to attack
// Move :
//  Which open square could the unit get to in the fewest moves (up, down, left, right)
//      Can't include going through walls or other units
//  If there is no open path (blocked by other units), then the move phase ends
//  If two target open locations are tied in distance, decide by reading order (up/down also left/right)
//  Take a single step in the chosen direction
//      If tied, decide by reading order (up/down then left/right)
// Attack :
// Check all targets in range
//  No targets = end go
// If multiple targets within range, select the one with the lowest hit points
//      If tie, reading order again
// Deal damage equal to attack power
// If target hit points go to 0, the target unit dies
// After all units have attacked, the round ends - restart from the top



// Outcome:
//      * Number of rounds completed (not including last round)
//      * Sum the hit points of all remaining units



function inRange($cavernArray, $attackerRow, $attackerColumn, $victimType) { 
    $targetLeft = ($cavernArray[$attackerRow][$attackerColumn-1]==$victimType) ? TRUE:FALSE;
    $targetRight = ($cavernArray[$attackerRow][$attackerColumn+1]==$victimType) ? TRUE:FALSE;
    $targetUp = ($cavernArray[$attackerRow-1][$attackerColumn]==$victimType) ? TRUE:FALSE;
    $targetDown = ($cavernArray[$attackerRow+1][$attackerColumn]==$victimType) ? TRUE:FALSE;
    if($targetUp) {
        $inRange = 1;
    } elseif($targetLeft) {
        $inRange = 2;
    } elseif($targetRight) {
        $inRange = 3;
    } elseif($targetDown) {
        $inRange = 4;
    } else {
        $inRange = 0;
    }
    return $inRange;
}

function selectTarget($cavernArray, $attackerRow, $attackerColumn, $victimType, $targetArray) {
    $targetLeft = ($cavernArray[$attackerRow][$attackerColumn-1]==$victimType) ? TRUE:FALSE;
    $targetRight = ($cavernArray[$attackerRow][$attackerColumn+1]==$victimType) ? TRUE:FALSE;
    $targetUp = ($cavernArray[$attackerRow-1][$attackerColumn]==$victimType) ? TRUE:FALSE;
    $targetDown = ($cavernArray[$attackerRow+1][$attackerColumn]==$victimType) ? TRUE:FALSE;
    $candidateTargets = array();
    if($targetUp) {
        $arrayID = findCharacterID($targetArray,'row',$attackerRow-1,'column',$attackerColumn);
        $candidateTargets[] = array('ID' => $arrayID, 'hitPoints' => $targetArray[$arrayID]['hitPoints'], 'row' => $attackerRow-1, 'column' => $attackerColumn, 'readingOrder' => 1);
    }
    if($targetLeft) {
        $arrayID = findCharacterID($targetArray,'row',$attackerRow,'column',$attackerColumn-1);
        $candidateTargets[] = array('ID' => $arrayID, 'hitPoints' => $targetArray[$arrayID]['hitPoints'], 'row' => $attackerRow, 'column' => $attackerColumn-1, 'readingOrder' => 2);
    }
    if($targetRight) {
        $arrayID = findCharacterID($targetArray,'row',$attackerRow,'column',$attackerColumn+1);
        $candidateTargets[] = array('ID' => $arrayID, 'hitPoints' => $targetArray[$arrayID]['hitPoints'], 'row' => $attackerRow, 'column' => $attackerColumn+1, 'readingOrder' => 3);
    }
    if($targetDown) {
        $arrayID = findCharacterID($targetArray,'row',$attackerRow+1,'column',$attackerColumn);
        $candidateTargets[] = array('ID' => $arrayID, 'hitPoints' => $targetArray[$arrayID]['hitPoints'], 'row' => $attackerRow+1, 'column' => $attackerColumn, 'readingOrder' => 4);
    } 
    
    array_multisort(array_column($candidateTargets, 'hitPoints'), SORT_ASC,
                    array_column($candidateTargets, 'readingOrder'), SORT_ASC,
                                    $candidateTargets);
    //print_r($candidateTargets);
    if(count($candidateTargets)<1) {
        return 0;
    }
    return $candidateTargets[0];
}


function prepareCavern($cavernArray, $startingRow, $startingColumn, $targetRow, $targetColumn) {
    
    $possibleCavern = array();
    foreach($cavernArray as $possibleTargetRow => $rowColumn) {
        foreach ($rowColumn as $possibleTargetColumn => $gridValue){
            if($possibleTargetRow==$targetRow && $possibleTargetColumn==$targetColumn) {
                $possibleCavern[$possibleTargetRow][$possibleTargetColumn] = '<'; 
            } elseif($possibleTargetRow==$startingRow && $possibleTargetColumn==$startingColumn) {
                $possibleCavern[$possibleTargetRow][$possibleTargetColumn] = '>';  
            } elseif($cavernArray[$possibleTargetRow][$possibleTargetColumn]=="G" || $cavernArray[$possibleTargetRow][$possibleTargetColumn]=="E") {
                $possibleCavern[$possibleTargetRow][$possibleTargetColumn] = 'X';  
            } elseif($cavernArray[$possibleTargetRow][$possibleTargetColumn]==".") {
                $possibleCavern[$possibleTargetRow][$possibleTargetColumn] = '.';  
            } else {
                $possibleCavern[$possibleTargetRow][$possibleTargetColumn] = 'X'; 
            }
            
        }
        
    }
    return $possibleCavern;
}




function printGrid($currentArray) {
    echo "<code>";
    foreach($currentArray as $rowID => $rowColumn) {
        foreach ($rowColumn as $columnID => $thedata){
           // if($thedata==" ") $thedata = "&nbsp;";
            echo "$thedata";
        }
        echo "<br>";
    }
    echo "</code>";
    
}


function returnGrid($currentArray) {
    $var = "";
    foreach($currentArray as $rowID => $rowColumn) {
        foreach ($rowColumn as $columnID => $thedata){
           // if($thedata==" ") $var .= "&nbsp;";
            $var .= "$thedata";
        }
        $var .= "\n";
    }
    $var .= "";
    return $var;
    
}


function findCharacterID($products, $field, $value, $field2, $value2)
{
   foreach($products as $key => $product)
   {
      if ( $product[$field] == $value && $product[$field2] == $value2 )
         return $key;
   }
   return -1;
}





function identifyTargets($cavernArray,$attackerType, $startingRow, $startingColumn) {
    
    $targetUnits = ($attackerType=='elf') ? 'G':'E';
    $possibleTargets = array();
    
    foreach($cavernArray as $targetRow => $rowColumn) {
        foreach ($rowColumn as $targetColumn => $gridValue){
            if($gridValue==$targetUnits) {
                // Found a possible target!!!
                // Just need to figure out a path to the target
                // $targetPath = pathFinder($cavernArray, $startingRow, $startingColumn, $targetRow, $targetColumn);
                $distance = new Distances\Manhattan();
                $heuristic = new Core\Heuristic(new Distances\Manhattan(), 1);
                $cavernArrayMap = prepareCavern($cavernArray, $startingRow, $startingColumn, $targetRow, $targetColumn);
                $cavernArrayMap = returnGrid($cavernArrayMap);
               
               // echo "<br>\n";
               // echo $cavernArrayMap;
               // echo "<br>\n";
               // echo "Solving SSP with AStar:\n";
                
                    $foundPath = findPath($cavernArrayMap, new Algorithms\ShortestPath\Dijkstra($distance, $heuristic));
                    if(is_array($foundPath)) {
                        $possibleTargets[] = array_merge($foundPath[0],array('targetRow' =>$targetRow,'targetColumn' =>$targetColumn));
                    }
                    
               // echo "\n\n\n";
                
                // 
            }
        }
    }
    //print_r($possibleTargets);

    if(count($possibleTargets)==0) $possibleTargets = -1;
    return $possibleTargets;
}




function findPath($map, $algorithm)
{
        $converter = new ASCIISyntax();
        $grid = $converter->convertToGrid($map);
        $matrix = $converter->convertToMatrix($map);
        $source = $converter->findAndCreateNode($matrix, ASCIISyntax::IN);
        $target = $converter->findAndCreateNode($matrix, ASCIISyntax::OUT);
        
        $algorithm->setGrid($grid);
        //$starttime = microtime(true);
        $path = $algorithm->computePath($source, $target);
        
        //$endtime = microtime(true);
        
        if($path instanceof Core\NodePath)
        {
            $length = $algorithm->computeLength($source, $target);
            //echo "Path found in " . floor(($endtime - $starttime) * 1000) . " ms\n - ";
            $path->next();
            //echo $path->key()." - $length<br>\n";
            //echo $converter->convertToSyntaxWithPath($grid, $path);
            //echo "<br>";
            if($source->getX()==8 && $source->getY()==9 && $target->getX()==13 && $target->getY()==21) {
            debug_to_console( $path->toString());

           // debug_to_console( $grid);
            //debug_to_console( $matrix);
            
   
            }
            
            $pathGrid = explode(',',$path->key());
            return array(0 => array('length' => $length, 'nextMove' => $path->key(), 'row' => $pathGrid[0], 'column' => $pathGrid[1]));
        }
        else
        {
            return 0;
            //echo "No path found\n";
        }
    }
    
    
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}