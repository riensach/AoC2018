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
foreach ($arrayInfo as $key => $value) {
    
    $newValue = explode(" ",$value);
    
    $stepFinished = $newValue[1];
    $stepBegin = $newValue[7];
    
    $splitArray[] = array('stepFinished' => $stepFinished, 'stepBegin' => $stepBegin);
    
    
}


foreach ($splitArray as $keyRef => $valueRef) {
    
    $stepsActualRequirements[$valueRef['stepBegin']][] = $valueRef['stepFinished'];
    
    
}



$length = count($splitArray);
for($key=0;$key<$length;$key++) {
   
    
    $candidateOptions = array();
  //  if($key<1) $key=0;    
   // if($key>count($splitArray)) break; // TEMP TO TEST
   // if($key>count($splitArray)) $key=0;
   // if(count($splitArray)==0) break;
    
    foreach ($stepsActualRequirements as $keyRef => $valueRef) {
        
        if(count($stepsActualRequirements)==0) break;
        if (empty($valueRef)) {
            // No requirements, consider it a candidate
            $candidateOptions[] = $keyRef;  
          //  echo "option $keyRef<br>";
        } else {        
            $allStepsDone = 1;
            foreach ($valueRef as $keyRefRequired => $valueRefRequired) {
                if($stepsDone[$valueRefRequired]==0) {
                    // At least one step is not done, consider it not done
                    $allStepsDone=0;
                }
            }

            if($allStepsDone==1) {
                // Steps are done. Consider it a candidate 
                $candidateOptions[] = $keyRef;  
            //    echo "option $keyRef<br>";
            }
        }
        
        
        
        
        
       // print_r($stepsActualRequirements);
       
        
        
    }
    ksort($candidateOptions);
    reset($candidateOptions);
    $nextStep = current($candidateOptions);
    $stepString .= $nextStep;
   // echo "Selected:$nextStep<br>";
    $stepsDone[$nextStep]=1;
    unset($stepsActualRequirements[$nextStep]);
    reset($stepsActualRequirements);
    
}
// IOSWXZAFJPQUVYDELMNTHBCRGK
// IOFSJQDUWAPXELNVZMHTBCRGK
// IOFSJQDUWAPXELNVYZMHTBCRGK


// START HERE


//$stepString = count_chars($stepString, 3);




echo "<br>STRING: $stepString<br>";
$var = print_r($stepsActualRequirements,true);
echo "<pre>$var</pre>";  


$var = print_r($stepsDone,true);
echo "<pre>$var</pre>";   
die();













$length = count($splitArray);
for($key=0;$key<$length;$key++) {
   
    
    $candidateOptions = array();
    if($key<1) $key=0;
    
    if($key>count($splitArray)) break; // TEMP TO TEST
    if($key>count($splitArray)) $key=0;
    if(count($splitArray)==0) break;
    
    
    foreach ($splitArray as $keyRef => $valueRef) {
        
        $stepsWithRequirements[$valueRef['stepBegin']]=1;
        if($stepsDone[$valueRef['stepFinished']]==1) {
            // Candidate move
           // echo "candidate<br>";
            $candidateOptions[] = array('stepFinished' => $valueRef['stepFinished'], 'stepBegin' => $valueRef['stepBegin'], 'refKey' => $keyRef);
        }
        //echo "".$stepsDone[$valueRef['stepFinished']]."-<br>";
        
        
    }
    
    foreach ($splitArray as $stepRef => $stepValue) {
        
        if($stepsWithRequirements[$stepValue['stepBegin']]==0){
            //echo "candidate2 - ";
            $candidateOptions[] = array('stepFinished' => $valueRef['stepFinished'], 'stepBegin' => $valueRef['stepBegin'], 'refKey' => $stepRef);
        }
       // echo "".$stepsWithRequirements[$stepValue['stepFinished']]."-".$stepValue['stepFinished']."<br>";
        
    }
    
    if (empty($candidateOptions)) {
        // No step candidates, so lets be manual
        $newOptions = array();
        foreach ($stepsWithRequirements as $stepRef => $stepValue) {
            if($stepValue==0 && $stepsDone[$stepRef]==0){
                $newOptions[array_search($stepRef, $alphabet)] = $stepRef;
            }
        }
        ksort($newOptions);
        reset($newOptions);
        $nextStep = current($newOptions);
        $stepString .= $nextStep;
        $stepsDone[$nextStep]=1;
        
        
    } else {
        
        $newOptions = array();
        foreach ($stepsWithRequirements as $stepRef => $stepValue) {
            if($stepValue==0 && $stepsDone[$stepRef]==0){
                $newOptions[array_search($stepRef, $alphabet)] = array('nextStep' => $stepRef, 'refKey' => "X");
            }
        }
        foreach ($candidateOptions as $stepRef => $stepValue) {
            if($stepValue['stepBegin']==0 && $stepsDone[$stepValue['stepBegin']]==0){
                $newOptions[array_search($stepValue['stepBegin'], $alphabet)] = array('nextStep' => $stepValue['stepBegin'], 'refKey' => $stepValue['refKey']);
            }
        }
        ksort($newOptions);
        reset($newOptions);
        $nextStep = current($newOptions);
        $nextStepAction = $nextStep['nextStep'];
        $stepString .= $nextStepAction;
        $stepsDone[$nextStepAction]=1;
        if($nextStep['refKey']!="X") {
            unset($splitArray[$nextStep['refKey']]);
        }
        //echo "OPTIONS - $nextStep - ".$nextStep['refKey']."<br>";
        
    }
    
    //break;
    
    
    //unset($data[$key]);
    //$data = array_values($data);
   // $key=$key-2;
    
    
    
    
    
    
    
}

echo "<br>STRING: $stepString<br>";
$var = print_r($stepsDone,true);
echo "<pre>$var</pre>";    
        
$var = print_r($stepsWithRequirements,true);
echo "<pre>$var</pre>";    
        
        
        
        
        
        
$var = print_r($candidateOptions,true);
echo "<pre>$var</pre>";





$var = print_r($splitArray,true);
echo "<pre>$var</pre>";



$var = print_r($stepsDone,true);
echo "<pre>$var</pre>";


