<?php

	//Map should usually be stored elsewhere, such as in database
	$map=array();
        
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
        $caveGridArray[$r."x".$c]['weight'] = $regionType;

    }
    $c=0;
}
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
	$map['1x1']['weight']=1.0;
	$map['1x2']['weight']=100.0;
	$map['1x3']['weight']=100.0;
	$map['1x4']['weight']=100.0;
	$map['1x5']['weight']=1.0;
	$map['2x1']['weight']=1.0;
	$map['2x2']['weight']=100.0;
	$map['2x3']['weight']=1.0;
	$map['2x4']['weight']=1.0;
	$map['2x5']['weight']=1.0;
	$map['3x1']['weight']=1.0;
	$map['3x2']['weight']=1.0;
	$map['3x3']['weight']=100.0;
	$map['3x4']['weight']=100.0;
	$map['3x5']['weight']=100.0;
	$map['4x1']['weight']=100.0;
	$map['4x2']['weight']=1.0;
	$map['4x3']['weight']=1.0;
	$map['4x4']['weight']=1.0;
	$map['4x5']['weight']=100.0;
	$map['5x1']['weight']=100.0;
	$map['5x2']['weight']=1.0;
	$map['5x3']['weight']=100.0;
	$map['5x4']['weight']=1.0;
	$map['5x5']['weight']=1.0;

	//Required class
	require('class.pathfinder.php');
	
	//---

		echo '<p style="font:12px Verdana; color:gray;">With diagonal movement:</p>';
		
		$path=new PathFinder();
		$path->setOrigin(1,1); //This is the origin coordinate, aka 1x1
		$path->setDestination(5,5); //Destination coordinate
		$path->setMap($map);
		$result=$path->returnPath(); //returns an array with coordinates (like 1x2 etc)
		
		//This is only for display purposes, I will be checking the array keys to see if the square was walked on or not
		$modifiedresult=array_flip($result);
		
		echo '<table>';
		for($x=1;$x<=5;$x++){
			echo '<tr>';
			for($y=1;$y<=5;$y++){
				echo '<td style="width:20px;height:20px;background-color:'.(($map[$x.'x'.$y]['weight']==100.0)?'#000080':'#c3daf9').';text-align:center;vertical-align:middle;">';
					//marking it with an X if it was included in path or if it was starting position
					if(isset($modifiedresult[$x.'x'.$y]) || $x.'x'.$y=='1x1'){
						echo 'x';
					} else {
						echo '&nbsp;';
					}
				echo '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	
	//---
	
		echo '<p style="font:12px Verdana; color:gray;">Without diagonal movement:</p>';
		
		$path=new PathFinder();
		$path->noDiagonalMovement(); //This supresses diagonal movement, only recommended for strict square maps
		$path->setOrigin(1,1); //This is the origin coordinate, aka 1x1
		$path->setDestination(5,5); //Destination coordinate
		$path->setMap($map);
		$result=$path->returnPath(); //returns an array with coordinates (like 1x2 etc)
		
		//This is only for display purposes, I will be checking the array keys to see if the square was walked on or not
		$modifiedresult=array_flip($result);
		
		echo '<table>';
		for($x=1;$x<=5;$x++){
			echo '<tr>';
			for($y=1;$y<=5;$y++){
				echo '<td style="width:20px;height:20px;background-color:'.(($map[$x.'x'.$y]['weight']==100.0)?'#000080':'#c3daf9').';text-align:center;vertical-align:middle;">';
					//marking it with an X if it was included in path or if it was starting position
					if(isset($modifiedresult[$x.'x'.$y]) || $x.'x'.$y=='1x1'){
						echo 'x';
					} else {
						echo '&nbsp;';
					}
				echo '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	
	//---
	
		echo '<p style="font:12px Verdana; color:gray;">Continuing from previous destination:</p>';
		
		//You can also continue calculating a new position after the previous solution, in this case it now continues from the last point
		$path->setDestination(5,2); //Destination coordinate
		$result=$path->returnPath(); //returns an array with coordinates (like 1x2 etc)
		
		//This is only for display purposes, I will be checking the array keys to see if the square was walked on or not
		$modifiedresult=array_flip($result);
		
		echo '<table>';
		for($x=1;$x<=5;$x++){
			echo '<tr>';
			for($y=1;$y<=5;$y++){
				echo '<td style="width:20px;height:20px;background-color:'.(($map[$x.'x'.$y]['weight']==100.0)?'#000080':'#c3daf9').';text-align:center;vertical-align:middle;">';
					//marking it with an X if it was included in path or if it was starting position
					if(isset($modifiedresult[$x.'x'.$y]) || $x.'x'.$y=='5x5'){
						echo 'x';
					} else {
						echo '&nbsp;';
					}
				echo '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	
	//---
	
		echo '<p style="font:12px Verdana; color:gray;">Example printout of path (top) and weight (bottom) arrays:</p>';
		echo '<pre>';
		print_r($result);
		print_r($result=$path->returnWeights()); //this only returns the weights of the last-solved path
		echo '</pre>';
	
	
	
?>