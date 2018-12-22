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

for($r=0;$r<=$targetY;$r++) {
    for($c=0;$c<=$targetX;$c++) {


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
for($r=0;$r<=$targetY;$r++) {
    for($c=0;$c<=$targetX;$c++) {

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
printGrid($caveGridArray);

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