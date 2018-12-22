<?php

$trackGridInput = 
'seti 123 0 5
bani 5 456 5
eqri 5 72 5
addr 5 3 3
seti 0 0 3
seti 0 5 5
bori 5 65536 2
seti 10362650 3 5
bani 2 255 4
addr 5 4 5
bani 5 16777215 5
muli 5 65899 5
bani 5 16777215 5
gtir 256 2 4
addr 4 3 3
addi 3 1 3
seti 27 4 3
seti 0 3 4
addi 4 1 1
muli 1 256 1
gtrr 1 2 1
addr 1 3 3
addi 3 1 3
seti 25 2 3
addi 4 1 4
seti 17 7 3
setr 4 0 2
seti 7 8 3
eqrr 5 0 4
addr 4 3 3
seti 5 1 3';
$instructionPointer = 3;

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
$registerValues = array(0=>7,1=>0,2=>0,3=>0,4=>0,5=>0);

$puzzleRows = explode("\n",$trackGridInput);
$instructions = array();

foreach($puzzleRows as $rowID => $rowValues) {
    $instructions[] = explode(" ",$rowValues);
}
$time_pre = microtime(true);
$var = print_r($instructions,true);
//echo "<pre>$var</pre>"; 
$instructionID = 0;
//for($i=60000000;$i<100000000;$i++) {

    $registerValues = array(0=>0,1=>0,2=>0,3=>0,4=>0,5=>0);
    $iterations = 0;
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
            $testValue = ((int)$registerValues[$inputA] & (int)$inputB);
            $registerValues[$outputC] = $testValue;  
        } elseif($opcode=='borr') {
            // OppCode - borr - C=A|B
            $testValue = ((int)$registerValues[$inputA] | (int)$registerValues[$inputB]);
            $registerValues[$outputC] = $testValue;  
        } elseif($opcode=='bori') {
            // OppCode - bori - C=A|1
            $testValue = ((int)$registerValues[$inputA] | (int)$inputB);
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
            echo "Before: Register 3 - ". $registerValues[4]." $instructionPointer; IPValues ".$registerValues[$instructionPointer]." - iterations: $iterations<br>";
            $registerValues[$outputC] = $testValue;  
            echo "After: Register 3 - ". $registerValues[4]." $instructionPointer; IPValues ".$registerValues[$instructionPointer]." - iterations: $iterations<br>";
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
            //echo "Done iteration $iterations in $exec_time seconds<Br>";
            flush();
            ob_flush();
        }
        if($iterations % 10000000000 ==0) {
            echo "Failed to finish before the end count using register 0 value of <br>";
            //break 1;
        }
    }
    if($instructionID >= count($puzzleRows)) {
        echo "Finished :: IP = $instructionPointer; IPValues = ".$registerValues[$instructionPointer]." - RegisterValues: ".$registerValues[0]." ".$registerValues[1]." ".$registerValues[2]." ".$registerValues[3]." ".$registerValues[4]." ".$registerValues[5]."<br><br>";
    }
//}

echo "After :: IP = $instructionPointer; IPValues = ".$registerValues[$instructionPointer]." - RegisterValues: ".$registerValues[0]." ".$registerValues[1]." ".$registerValues[2]." ".$registerValues[3]." ".$registerValues[4]." ".$registerValues[5]."<br><br>";
    