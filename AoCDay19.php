<?php

$trackGridInput = 
'addi 5 16 5
seti 1 8 4
seti 1 5 3
mulr 4 3 1
eqrr 1 2 1
addr 1 5 5
addi 5 1 5
addr 4 0 0
addi 3 1 3
gtrr 3 2 1
addr 5 1 5
seti 2 5 5
addi 4 1 4
gtrr 4 2 1
addr 1 5 5
seti 1 2 5
mulr 5 5 5
addi 2 2 2
mulr 2 2 2
mulr 5 2 2
muli 2 11 2
addi 1 8 1
mulr 1 5 1
addi 1 18 1
addr 2 1 2
addr 5 0 5
seti 0 7 5
setr 5 0 1
mulr 1 5 1
addr 5 1 1
mulr 5 1 1
muli 1 14 1
mulr 1 5 1
addr 2 1 2
seti 0 0 0
seti 0 9 5';
$instructionPointer = 5;

 /*$trackGridInput = 
'seti 5 0 1
seti 6 0 2
addi 0 1 0
addr 1 2 3
setr 1 0 0
seti 8 0 4
seti 9 0 5';
$instructionPointer = 0;
  * 
  */

 
$instructionPointerValue = 0; 
$registerValues = array(0=>1,1=>0,2=>0,3=>0,4=>0,5=>0);

$puzzleRows = explode("\n",$trackGridInput);
$instructions = array();

foreach($puzzleRows as $rowID => $rowValues) {
    $instructions[] = explode(" ",$rowValues);
}
$time_pre = microtime(true);
$var = print_r($instructions,true);
echo "<pre>$var</pre>"; 
$iterations = 0;
$instructionID = 0;
while($instructionID < count($puzzleRows)) {
    
    $opcode = $instructions[$instructionID][0];
    $inputA = $instructions[$instructionID][1];
    $inputB = $instructions[$instructionID][2];
    $outputC = $instructions[$instructionID][3];
    $registerValues[$instructionPointer] = $instructionPointerValue;
    //echo "Opcode: $opcode Before :: IP = $instructionPointer; IPValues = ".$registerValues[$instructionPointer]." - RegisterValues: ".$registerValues[0]." ".$registerValues[1]." ".$registerValues[2]." ".$registerValues[3]." ".$registerValues[4]." ".$registerValues[5]."<br>";

    if($opcode=='addr') {        
        // OppCode - addr - C=A+B
        $testValue = $registerValues[$inputA] + $registerValues[$inputB];
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='addi') {
        // OppCode - addi - C=A+1
        $testValue = $registerValues[$inputA] + $inputB;
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='mulr') {
        // OppCode - mulr - C=A*B
        $testValue = ($registerValues[$inputA] * $registerValues[$inputB]);
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='muli') {
        // OppCode - muli - 'C=A*1
        $testValue = ($registerValues[$inputA] * $inputB);
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='banr') {
        // OppCode - banr - C=A&B
        $testValue = ($registerValues[$inputA] & $registerValues[$inputB]);
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='bani') {
        // OppCode - bani - C=A&1
        $testValue = ($registerValues[$inputA] & $inputB);
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='borr') {
        // OppCode - borr - C=A|B
        $testValue = ($registerValues[$inputA] | $registerValues[$inputB]);
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='bori') {
        // OppCode - bori - C=A|1
        $testValue = ($registerValues[$inputA] | $inputB);
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='setr') {
        // OppCode - setr - C=A
        $testValue = $registerValues[$inputA];
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='seti') {
        // OppCode - seti - C=0
        $testValue = $inputA;
        $registerValues[$outputC] = $testValue;         
    } elseif($opcode=='gtir') {
        // OppCode - gtir - C=(0>B) ? 1:0
        $testValue = ($inputA>$registerValues[$inputB]) ? 1:0;
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='gtri') {
        // OppCode - gtri - C=(A>1) ? 1:0
        $testValue = ($registerValues[$inputA]>$inputB) ? 1:0;
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='gtrr') {
        // OppCode - gtrr - C=(A>B) ? 1:0
        $testValue = ($registerValues[$inputA]>$registerValues[$inputB]) ? 1:0;
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='eqir') {
        // OppCode - eqir - C=(0==B) ? 1:0
        $testValue = ($inputA==$registerValues[$inputB]) ? 1:0;
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='eqri') {
        // OppCode - eqri - C=(A==1) ? 1:0
        $testValue = ($registerValues[$inputA]==$inputB) ? 1:0;
        $registerValues[$outputC] = $testValue;  
    } elseif($opcode=='eqrr') {
        // OppCode - eqrr - C=(A==B) ? 1:0
        $testValue = ($registerValues[$inputA]==$registerValues[$inputB]) ? 1:0;
        $registerValues[$outputC] = $testValue;  
    } else {
        echo "ERRORRR";
    }
    //echo "After :: IP = $instructionPointer; IPValues = ".$registerValues[$instructionPointer]." - RegisterValues: ".$registerValues[0]." ".$registerValues[1]." ".$registerValues[2]." ".$registerValues[3]." ".$registerValues[4]." ".$registerValues[5]."<br><br>";
    
    $instructionPointerValue = $registerValues[$instructionPointer];
    $instructionPointerValue++;
    $instructionID = $instructionPointerValue;
    $iterations++;
    
    if($iterations % 100000 ==0) {
        $time_post = microtime(true);
        $exec_time = $time_post - $time_pre;
        echo "Done iteration $iterations in $exec_time seconds<Br>";
        flush();
        ob_flush();
    }
    
}


echo "After :: IP = $instructionPointer; IPValues = ".$registerValues[$instructionPointer]." - RegisterValues: ".$registerValues[0]." ".$registerValues[1]." ".$registerValues[2]." ".$registerValues[3]." ".$registerValues[4]." ".$registerValues[5]."<br><br>";
    