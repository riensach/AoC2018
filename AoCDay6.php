<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$inputData = ("177, 51
350, 132
276, 139
249, 189
225, 137
337, 354
270, 147
182, 329
118, 254
174, 280
42, 349
96, 341
236, 46
84, 253
292, 143
253, 92
224, 137
209, 325
243, 195
208, 337
197, 42
208, 87
45, 96
64, 295
266, 248
248, 298
194, 261
157, 74
52, 248
243, 201
242, 178
140, 319
69, 270
314, 302
209, 212
237, 217
86, 294
295, 144
248, 206
157, 118
155, 146
331, 40
247, 302
250, 95
193, 214
345, 89
183, 206
121, 169
79, 230
88, 155");

$arrayInfo = explode("\n",$inputData);
$splitArray = array();
$baseBoxArea = array();
$baseBoxAreaPart2 = array();
$xheight = 0;
$yheight = 0;

foreach ($arrayInfo as $key => $value) {
    $value = str_replace(" ","",$value);
    $coords = explode(",",$value);
    $xcoord = $coords[0];
    $ycoord = $coords[1];

    if($xcoord>$xheight) $xheight=$xcoord;
    if($ycoord>$yheight) $yheight=$ycoord;
    $splitArray[] = array('id' => $key, 'xcoord' => $xcoord, 'ycoord' => $ycoord, 'foundCount' => 0, 'isInfinate' => 0, 'distanceToAllCoords' => 0);
    /*print_r($newValue);
    echo "<br><br>";
    print_r($splitArray);
    echo "<br><br>";
     * 
     */
    
}



$c = 0;
$r = 0;
while($c <= $xheight) {
    while ($r <= $yheight)  {
        
        //$baseBoxArea[$c] = array($r);
        if(!isset($baseBoxArea[$c])) $baseBoxArea[$c] = array();
        $baseBoxArea[$c][$r] = array("x"=>0);
        
        if(!isset($baseBoxAreaPart2[$c])) $baseBoxAreaPart2[$c] = array();
        $baseBoxAreaPart2[$c][$r] = 0;
        //array_push($baseBoxArea[$c],$r);
        $r++;
        
    }
    $c++;
    $r=0;
}


//echo "$xheight - $yheight<br>";



foreach ($splitArray as $key => $value) {
    
    $c = 0;
    $r = 0;

    while($c <= $xheight) {
        while ($r <= $yheight)  {
            $proposedDifference = abs($c-$value['xcoord']) + abs($r-$value['ycoord']);
            
            //part 2
            /*foreach ($splitArray as $keyNew => $valueNew) {
                
                $newRange = abs($valueNew['xcoord']-$value['xcoord']) + abs($valueNew['ycoord']-$value['ycoord']);
                $value['distanceToAllCoords'] = $value['distanceToAllCoords']+$newRange;
            }
             * 
             */
            
            
            
            $existingDifference = current($baseBoxArea[$c][$r]);
            if(key($baseBoxArea[$c][$r])==="x") {
                // Default take over location
                $baseBoxArea[$c][$r] = array($key=>$proposedDifference);
                // echo "DEFAULT ".$existingDifference."-$proposedDifference - $key-".key($baseBoxArea[$c][$r])."<br>";
            } elseif($existingDifference===$proposedDifference) {
                // Set location as equal                
                if(key($baseBoxArea[$c][$r])=="0") {
                   // echo "EQUAL LOCATION!!! $key - $proposedDifference - ".key($baseBoxArea[$c][$r])." - $existingDifference - r:$r - ".$value['ycoord']." - c:$c - ".$value['xcoord']."<br>";
                    }
                $baseBoxArea[$c][$r] = array("."=>$proposedDifference);
                
            } elseif($proposedDifference>$existingDifference) {
                // Do nothing - the current place is closer
               // echo "NOTHING ".$newDifference."-$itemDifference<br>";
            } else  {
                // Update location, it's further away
                if(key($baseBoxArea[$c][$r])=="0") {
                   // if($proposedDifference>$existingDifference) {
                   // echo "UPDATE LOCATION!!! $key - $proposedDifference - ".key($baseBoxArea[$c][$r])." - $existingDifference - $r - $c<br>";
                   // }
                }
                $baseBoxArea[$c][$r] = array($key=>$proposedDifference);
            }
            $r++;
        }
        $c++;
        $r=0;
    }
    
    
    
    
}
$newSplit = $splitArray;
    $c = 0;
    $r = 0;
$splitArray["."] = array('id' => ".", 'xcoord' => "0", 'ycoord' => "0", 'foundCount' => 0, 'isInfinate' => 0);
    while($c <= $xheight) {
        while ($r <= $yheight)  {
            $key = key($baseBoxArea[$c][$r]);
            //if($key!="."){
                $splitArray[$key]['foundCount'] = $splitArray[$key]['foundCount']+1;
                if($c==0 || $r==0 || $c==$xheight || $r==$yheight){
                    //echo "INFINATE - $key - $r - $c<Br>";
                    $splitArray[$key]['isInfinate']=1;
                }
            //}
            
            
            $r++;
        }
        $c++;
        $r=0;
    }


//$var = print_r($splitArray,true);
//echo "<pre>$var</pre>";

//$var = print_r($baseBoxArea,true);
//echo "<pre>$var</pre>";


// PART 2

$c = 0;
$r = 0;
while($c <= $xheight) {
    while ($r <= $yheight)  {
        
        
        foreach ($newSplit as $key => $value) {
            
            $newRange = abs($c-$value['xcoord']) + abs($r-$value['ycoord']);
            $baseBoxAreaPart2[$c][$r] = $baseBoxAreaPart2[$c][$r]+$newRange;
            //echo "$newRange<br>";
            
            
        }
           if($baseBoxAreaPart2[$c][$r]>=10000) $baseBoxAreaPart2[$c][$r] = -1;
        $r++;
        
    }
    $c++;
    $r=0;
}

$c = 0;
$r = 0;
$totalArea=0;
while($c <= $xheight) {
    while ($r <= $yheight)  {
        if($baseBoxAreaPart2[$c][$r]>=0) {
            $totalArea++;
        }
        
            $r++;
        
    }
    $c++;
    $r=0;
}

echo "TOTAL AREA COUNT:$totalArea";

$var = print_r($baseBoxAreaPart2,true);
echo "<pre>$var</pre>";



die();





