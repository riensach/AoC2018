<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$inputData = ("Step O must be finished before step W can begin.
Step S must be finished before step V can begin.
Step Z must be finished before step B can begin.
Step F must be finished before step R can begin.
Step I must be finished before step D can begin.
Step W must be finished before step P can begin.
Step J must be finished before step E can begin.
Step P must be finished before step N can begin.
Step Q must be finished before step V can begin.
Step D must be finished before step K can begin.
Step X must be finished before step N can begin.
Step E must be finished before step B can begin.
Step L must be finished before step H can begin.
Step A must be finished before step T can begin.
Step U must be finished before step R can begin.
Step M must be finished before step T can begin.
Step V must be finished before step R can begin.
Step N must be finished before step C can begin.
Step T must be finished before step C can begin.
Step Y must be finished before step B can begin.
Step H must be finished before step B can begin.
Step B must be finished before step C can begin.
Step C must be finished before step K can begin.
Step R must be finished before step K can begin.
Step G must be finished before step K can begin.
Step Q must be finished before step K can begin.
Step U must be finished before step Y can begin.
Step L must be finished before step G can begin.
Step S must be finished before step D can begin.
Step E must be finished before step R can begin.
Step Z must be finished before step M can begin.
Step U must be finished before step K can begin.
Step Q must be finished before step H can begin.
Step T must be finished before step B can begin.
Step J must be finished before step Q can begin.
Step X must be finished before step V can begin.
Step Q must be finished before step U can begin.
Step T must be finished before step K can begin.
Step S must be finished before step B can begin.
Step L must be finished before step C can begin.
Step Q must be finished before step D can begin.
Step E must be finished before step K can begin.
Step N must be finished before step G can begin.
Step L must be finished before step T can begin.
Step E must be finished before step L can begin.
Step A must be finished before step N can begin.
Step V must be finished before step C can begin.
Step D must be finished before step L can begin.
Step O must be finished before step S can begin.
Step V must be finished before step Y can begin.
Step N must be finished before step T can begin.
Step I must be finished before step H can begin.
Step U must be finished before step N can begin.
Step O must be finished before step Y can begin.
Step J must be finished before step C can begin.
Step Y must be finished before step C can begin.
Step W must be finished before step A can begin.
Step M must be finished before step C can begin.
Step X must be finished before step E can begin.
Step S must be finished before step J can begin.
Step U must be finished before step C can begin.
Step H must be finished before step K can begin.
Step Q must be finished before step B can begin.
Step E must be finished before step G can begin.
Step N must be finished before step H can begin.
Step I must be finished before step J can begin.
Step P must be finished before step B can begin.
Step Z must be finished before step T can begin.
Step J must be finished before step M can begin.
Step C must be finished before step G can begin.
Step I must be finished before step B can begin.
Step D must be finished before step G can begin.
Step X must be finished before step T can begin.
Step O must be finished before step F can begin.
Step A must be finished before step Y can begin.
Step S must be finished before step G can begin.
Step X must be finished before step K can begin.
Step L must be finished before step M can begin.
Step A must be finished before step H can begin.
Step D must be finished before step H can begin.
Step U must be finished before step T can begin.
Step B must be finished before step K can begin.
Step S must be finished before step C can begin.
Step W must be finished before step R can begin.
Step M must be finished before step G can begin.
Step M must be finished before step H can begin.
Step J must be finished before step D can begin.
Step W must be finished before step Y can begin.
Step S must be finished before step Y can begin.
Step A must be finished before step G can begin.
Step P must be finished before step M can begin.
Step C must be finished before step R can begin.
Step Q must be finished before step Y can begin.
Step O must be finished before step H can begin.
Step O must be finished before step R can begin.
Step Q must be finished before step M can begin.
Step V must be finished before step B can begin.
Step H must be finished before step G can begin.
Step J must be finished before step V can begin.
Step M must be finished before step R can begin.
Step R must be finished before step G can begin.");

$arrayInfo = explode("\n",$inputData);


$splitArray = array();
$stepString = "";

$stepsDone = array("A"=>0,"B"=>0,"C"=>0,"D"=>0,"E"=>0,"F"=>0,"G"=>0,"H"=>0,"I"=>0,"J"=>0,"K"=>0,"L"=>0,"M"=>0,"N"=>0,"O"=>0,"P"=>0,"Q"=>0,"R"=>0,"S"=>0,"T"=>0,"U"=>0,"V"=>0,"W"=>0,"X"=>0,"Y"=>0,"Z"=>0);
$stepsWithRequirements = array("A"=>0,"B"=>0,"C"=>0,"D"=>0,"E"=>0,"F"=>0,"G"=>0,"H"=>0,"I"=>0,"J"=>0,"K"=>0,"L"=>0,"M"=>0,"N"=>0,"O"=>0,"P"=>0,"Q"=>0,"R"=>0,"S"=>0,"T"=>0,"U"=>0,"V"=>0,"W"=>0,"X"=>0,"Y"=>0,"Z"=>0);
$stepsActualRequirements = array("A"=>array(),"B"=>array(),"C"=>array(),"D"=>array(),"E"=>array(),"F"=>array(),"G"=>array(),"H"=>array(),"I"=>array(),"J"=>array(),"K"=>array(),"L"=>array(),"M"=>array(),"N"=>array(),"O"=>array(),"P"=>array(),"Q"=>array(),"R"=>array(),"S"=>array(),"T"=>array(),"U"=>array(),"V"=>array(),"W"=>array(),"X"=>array(),"Y"=>array(),"Z"=>array());
$alphabet = range('A', 'Z');

$workers = array("1"=>array(0=>0),"2"=>array(0=>0),"3"=>array(0=>0),"4"=>array(0=>0),"5"=>array(0=>0),);
$baseTime = 60;

foreach ($arrayInfo as $key => $value) {
    
    $newValue = explode(" ",$value);
    
    $stepFinished = $newValue[1];
    $stepBegin = $newValue[7];
    
    $splitArray[] = array('stepFinished' => $stepFinished, 'stepBegin' => $stepBegin);
    
    
}


foreach ($splitArray as $keyRef => $valueRef) {
    
    $stepsActualRequirements[$valueRef['stepBegin']][] = $valueRef['stepFinished'];
    
    
}

$totalSteps=0;
$totalTime=0;
$length = 10000;
$totalOverlapTime = 0;
for($key=0;$key<$length;$key++) {
   
    
    $candidateOptions = array();
  //  if($key<1) $key=0;    
   // if($key>count($splitArray)) break; // TEMP TO TEST
   // if($key>count($splitArray)) $key=0;
    if(count($stepsActualRequirements)==0) break;
    
    foreach ($stepsActualRequirements as $keyRef => $valueRef) {
       // $candidateOptions = array();
        if(count($stepsActualRequirements)==0) break;
        if (empty($valueRef)) {
            // No requirements, consider it a candidate
            $candidateOptions[] = $keyRef;  
           // echo "option $keyRef<br>";
        } else {        
            $allStepsDone = 1;
            foreach ($valueRef as $keyRefRequired => $valueRefRequired) {
                //if($stepsActualRequirements[$keyRef][$keyRefRequired]!="XXX"){
                if($valueRefRequired=="XXX") {
                    // Currently in progress
                    $allStepsDone=0;
                } elseif($stepsDone[$valueRefRequired]==0) {
                    // At least one step is not done, consider it not done
                   // echo "OIGOTHERE || $keyRef ||";
                    $allStepsDone=0;
                }
                //}
                //echo $stepsActualRequirements[$keyRef][$keyRefRequired]."-";
            }

            if($allStepsDone==1) {
                // Steps are done. Consider it a candidate 
               // echo " -- CANDIADTE $keyRef -- ";
                $candidateOptions[] = $keyRef;  
            //    echo "option $keyRef<br>";
            }
        }
        
        $var = print_r($stepsActualRequirements,true);
	//echo "<pre>$var</pre>"; 
       
        
        
    }
    ksort($candidateOptions);
    reset($candidateOptions);
   // echo "hi-";
    foreach($workers as $workerID => $workingOn) {
        
        $nextStep = current($candidateOptions);
        $nextStepKey = key($candidateOptions);
		//echo "$workingOn<br>";
        
        echo "-".current($workingOn)."-".key($workingOn)."-<br>";
        if(current($workingOn)===0 && key($workingOn)!="0") {
            // There was a previous item, mark it as done
            unset($stepsActualRequirements[key($workingOn)]);
            reset($stepsActualRequirements);
            $stepsDone[key($workingOn)]=1;
            $totalSteps++;
            $workers[$workerID] = array(0=>0);
                            echo "END STEP ".key($workingOn)."<br>";
                            
                                     $var = print_r($stepsDone,true);
           // echo "<pre>$var</pre>"; 
                                     $totalOverlapTime--;
        }
        
        
        if(current($workingOn)==0 && count($candidateOptions)>0) {
            //echo "free workinger $workerID<br>";
            // Worker is free, assign them work!
            // First, mark the previous item as done
            echo "Working on: ".key($workingOn);
             
            // echo "GOT HERE $nextStep - $nextStepKey ".key($workingOn);
            $var = print_r($candidateOptions,true);
			echo "<pre>$var</pre>"; 
            $stepString .= $nextStep;
            
            $timeRequired = $baseTime + 1 + array_search($nextStep, $alphabet);
            $totalTime = $totalTime+$timeRequired;
            //$workers[$workerID][$newkey] = $workers[$workerID][$oldkey];
            unset($workers[$workerID][key($workingOn)]);
            $workers[$workerID][$nextStep] = $timeRequired;
            $stepsActualRequirements[$nextStep]["XXX"] = "XXX";
            unset($candidateOptions[$nextStepKey]);
            ksort($candidateOptions);
            reset($candidateOptions);
			$var = print_r($candidateOptions,true);
			echo "<pre>$var</pre>"; 
			//$key=0;	
            echo "update string $stepString - $key<br>";
            $var = print_r($workers,true);
            echo "<pre>$var</pre>"; 
                        
        } elseif(current($workingOn)!=0) {
            
            $workers[$workerID][key($workingOn)] = $workers[$workerID][key($workingOn)]-1;
            echo "take off 1 from $workerID - ".key($workingOn)."-".current($workingOn)." - key:$key - options count:".count($candidateOptions)."<br>";
        }
        
       // echo"hello";
       // echo "Selected:$nextStep<br>";
        
        
        
    }
    $totalOverlapTime++;
	
    
}
// IOFSJQDUWAPXELNVZMHTBCRGK
// IOFSJQDUWAPXELNVYZMHTBCRGK


// START HERE


//$stepString = count_chars($stepString, 3);




echo "<br>STRING: $stepString :: TotalTime: $totalOverlapTime<br>";
$var = print_r($stepsActualRequirements,true);
echo "<pre>$var</pre>";  


$var = print_r($stepsDone,true);
echo "<pre>$var</pre>";   
die();






