<?php

$trackGridInput = 
'#.#.|..#|.||.#...|...#.|.......##|##..#..||.||....
#.......#.....|##..#|..#.##..##|.|.#..|.#...|....#
.|..........#.|..|.....|..|#.#...##|#|.|#|##|...#|
#|....#|##..#|.|||.#.|.#...#.##.......#||..#......
.#|....|.|..#..||...#||...|......###.#.#...##..#..
..||#...|.#.|||||.....|.......##...#.#....|..#....
###|..##...|.#|..|.#|#...|.#.|....||.|...#|.|#...#
|.#.|#.#.|###.|..#..|....#....#|.#..||.||.....#..#
.#..|.#..#|##..|.....|.#.|.#.#|.......#..|...#..|.
...|||##...|..#.#|#|..#.#..#|.|.|#..##........##.#
|#.#..||....|...|#..|....|#|...#.#.#.##|.|.#......
|..|...|.|#.........|..#|...|.#.|##....|..|..|#.||
|....#..||..|...#|......|||||.|#....||....|.#|.#..
......#||.#.#.||..|.......|....||#||#.|.#.|.##||#|
.##.#....##.#.|....|...###..#...|.#....|.#...|..##
.##..#|#.#.##.||..|.#|..|.|.##|....|...#||||.|..#.
|.|..|#|....|.#.#..||.....|.....##....||....|.||..
#|.|.##...||...........|..#.||.|.#..##..|#||......
||..||.||..#.##.#...|.#|.....|###....#.....#...|..
|.#.##|.|...||#.#...||....|.|#..|.#....##........#
..|....|.#.##|....|||#....#.|.|.##....|##|.|#.....
.|.....#|.#....|###|..#|||........||#.#..||..|..#.
#..#...|#|.#...|.||##..#.|..|.|.#.|..#.#.|.....#.#
|#||.##..#..|||.......#|..#...#..##....#||.#|.....
.|.#.....|..#...#...##...|.#...|.#|.......|..#...|
.||.......|..##..##.#|.|..|...#.|.#..#.|....#.|#.|
....#..#|##|....#..|.#..|||..#....#.#|...||.#..|..
#......#|.##..|..|....|.##.#|...#..#.|..|..|..|##.
...|||.#|#.#.|..|||.#.#.#...||...||..##..#.....|..
..#..|.|#.#..|..##|..#....#.|..|.......|||#.|.|.|#
.##|..#...#..||..|.........|#.|#.....|...##.|..||#
#.....||....#.....|#.||......|.#|.#|....||.||.#.#.
#..|#..|......|.#.#.#.##..||.|.#.|......#|#||#.|.#
..||..||.....|.#..###.#.|#..|.......|....#||.|..#.
.#...###|#|#|||...|...#.#|.#|..|...#..#.|#|.#...|.
...|..#||....##|..#...#....#||#.......|....#.|###.
..#....|#..#|.....|.#|..#..|#....||......|.|.#.|#.
..|##....#.|..#..#.|.#..||....#...|.....|..#.....|
.......#||..#||...|.#.|#...#....|.|.||.#.|...#.##|
.|.|||.....#............#..#..|..|..#.|.#..|......
|...|.|####..#.....#..#..|#|#..#..|......|...|.#|#
|.|...#..#..|....|.....#|#||..#.||..|#|..|||.|.|.|
..#...|#.......||.#.#.#....#.........##|.|..#.##||
#|#..|..|#|.##.|.|#......||......|.....#||###.|###
....#..#.|..|...#|#|..|#..|.#|....||#|.||.|#|.....
|..#.|..#.|#......#...#|.#|#|.....|#...###....##..
...##..#..|..#..#.#...|.#..#|...|#.##|.#|..##..#.#
|.|.|...#.|..##.|.|....|..#..|...|..##|...|..|....
.#|..|..|..|.|..#...|.||#...#......||.#.#.........
.#.##..|............|.||.....#||..|##.|..|.....#.|';

/*
 * $trackGridInput = 

'.#.#...|#.
.....#|##|
.|..|...#.
..|#.....#
#.#|||#|#|
...#.||...
.|....|...
||...#|.#|
|.||||..|.
...#.|..|.';
 * 
 */

 



$trackGridInputRows = explode("\n",$trackGridInput);
$trackGridInputArray = new SplDoublyLinkedList();
$trackColumnCount = 0;
$trackRowCount = 0;        
foreach($trackGridInputRows as $rowID => $rowValue) {
    $splitRowValues = str_split($rowValue,1);
    $trackColumnCount = count($splitRowValues);
    foreach($splitRowValues as $splitRowCharacterID => $splitRowCharacterValue) {
        if(!isset($trackGridInputArray[$rowID])) $trackGridInputArray[$rowID] = new SplDoublyLinkedList();
        $trackGridInputArray[$rowID][$splitRowCharacterID] = $splitRowCharacterValue;
    }
}
$trackRowCount = count($trackGridInputRows);
$time_pre = microtime(true);

printGrid($trackGridInputArray);
echo "<br><br>";


// open ground (.), trees (|), or a lumberyard (#)

// 100,000,000,0 

$tickCounter = 1;
$updatedTrackGridInputArray = $trackGridInputArray;

while($tickCounter <= 20) {
    
    $columnCounter = 0;
    $rowCounter = 0;

    while($rowCounter < $trackRowCount) {
        
        while($columnCounter < $trackColumnCount) {
            
            $gridCheckPositionValue = $trackGridInputArray[$rowCounter][$columnCounter];
            
            $topLeft = ($trackGridInputArray[$rowCounter-1][$columnCounter-1] ?? 'X');
            $topMiddle = ($trackGridInputArray[$rowCounter-1][$columnCounter] ?? 'X');
            $topRight = ($trackGridInputArray[$rowCounter-1][$columnCounter+1] ?? 'X');
            $left = ($trackGridInputArray[$rowCounter][$columnCounter-1] ?? 'X');
            $bottomLeft = ($trackGridInputArray[$rowCounter+1][$columnCounter-1] ?? 'X');
            $bottomMiddle = ($trackGridInputArray[$rowCounter+1][$columnCounter] ?? 'X');
            $bottomRight = ($trackGridInputArray[$rowCounter+1][$columnCounter+1] ?? 'X');
            $right = ($trackGridInputArray[$rowCounter][$columnCounter+1] ?? 'X');
            
            $treeCount = ($topLeft=='|' ? 1:0)+($topMiddle=='|' ? 1:0)+($topRight=='|' ? 1:0)+($left=='|' ? 1:0)+($bottomLeft=='|' ? 1:0)+($bottomMiddle=='|' ? 1:0)+($bottomRight=='|' ? 1:0)+($right=='|' ? 1:0);
            $lumberyardCount = ($topLeft=='#' ? 1:0)+($topMiddle=='#' ? 1:0)+($topRight=='#' ? 1:0)+($left=='#' ? 1:0)+($bottomLeft=='#' ? 1:0)+($bottomMiddle=='#' ? 1:0)+($bottomRight=='#' ? 1:0)+($right=='#' ? 1:0);
            $test = ($topLeft=='|' ? 1:0);
           // echo $trackGridInputArray[$rowCounter][$columnCounter+1]."$test - Row:$rowCounter Column:$columnCounter Tree Count:$treeCount LumYardCount:$lumberyardCount Current Value:$gridCheckPositionValue  - $topLeft : $topMiddle : $topRight : $left : $bottomLeft : $bottomMiddle : $bottomRight : $right<br>";
            if($gridCheckPositionValue=='.' && $treeCount>=3) {
                // Become filled with trees
                $updatedTrackGridInputArray[$rowCounter][$columnCounter] = '|';
            } elseif($gridCheckPositionValue=='|' && $lumberyardCount>=3) {
                // Become a lumberyard
                $updatedTrackGridInputArray[$rowCounter][$columnCounter] = '#';
            } elseif($gridCheckPositionValue=='#' && $lumberyardCount>=1 && $treeCount>=1) {
                // Stay a lumberyard
            } elseif($gridCheckPositionValue=='#' && !($lumberyardCount>=1 && $treeCount>=1)) {
                // Become open
                $updatedTrackGridInputArray[$rowCounter][$columnCounter] = '.';
            }
            
            
            $columnCounter++;
        }
        
        $rowCounter++;
        $columnCounter=0;
    }
    $trackGridInputArray = $updatedTrackGridInputArray;

    if($tickCounter % 100000 ==0) {
        $time_post = microtime(true);
        $exec_time = $time_post - $time_pre;
        echo "Done iteration $i in $exec_time seconds<Br>";
        flush();
        ob_flush();
    }

    $tickCounter++;
    //printGrid($updatedTrackGridInputArray);
}
echo "<br>";
printGrid($trackGridInputArray);

function printGrid($trackGridInputArray) {
    $trackGridInputArray;
    echo "<code>";
    foreach($trackGridInputArray as $rowID => $rowColumn) {
        foreach ($rowColumn as $columnID => $thedata){
            if($thedata==" ") $thedata = "&nbsp;";
            echo "$thedata ";
        }
        echo "<br>";
    }
    echo "</code>";
    
}


$totalLumber = 0;
$totalWoodded = 0;
foreach($trackGridInputArray as $rowID => $rowValue) {
    foreach($rowValue as $splitRowCharacterID => $splitRowCharacterValue) {
        if($splitRowCharacterValue=='|') {
            $totalLumber++;
        } elseif($splitRowCharacterValue=='#') {
            $totalWoodded++;            
        }
    }
}
$totalResourceValue = $totalLumber * $totalWoodded;
echo "There are $totalLumber lumberyards and $totalWoodded woodded. Total resource value of $totalResourceValue";