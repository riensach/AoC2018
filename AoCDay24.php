<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$immuneSystem = array();
$infection = array();

$immuneSystem['IS1'] = array('Type' => 'ImmuneSystem','Units' => 3578, 'Hit Points' => 3874, 'Weakness' => '', 'Immunity' => 'radiation', 'AttackType' => 'bludgeoning', 'AttackDamage' => 10, 'Initiative' => 17, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$immuneSystem['IS2'] = array('Type' => 'ImmuneSystem','Units' => 865, 'Hit Points' => 10940, 'Weakness' => 'bludgeoning,cold', 'Immunity' => '', 'AttackType' => 'cold', 'AttackDamage' => 94, 'Initiative' => 19, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$immuneSystem['IS3'] = array('Type' => 'ImmuneSystem','Units' => 3088, 'Hit Points' => 14516, 'Weakness' => '', 'Immunity' => 'cold', 'AttackType' => 'bludgeoning', 'AttackDamage' => 32, 'Initiative' => 4, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$immuneSystem['IS4'] = array('Type' => 'ImmuneSystem','Units' => 2119, 'Hit Points' => 6577, 'Weakness' => 'cold', 'Immunity' => 'slashing,fire', 'AttackType' => 'bludgeoning', 'AttackDamage' => 22, 'Initiative' => 6, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$immuneSystem['IS5'] = array('Type' => 'ImmuneSystem','Units' => 90, 'Hit Points' => 2089, 'Weakness' => '', 'Immunity' => 'bludgeoning', 'AttackType' => 'cold', 'AttackDamage' => 213, 'Initiative' => 14, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$immuneSystem['IS6'] = array('Type' => 'ImmuneSystem','Units' => 1341, 'Hit Points' => 4768, 'Weakness' => '', 'Immunity' => 'bludgeoning,radiation,cold', 'AttackType' => 'bludgeoning', 'AttackDamage' => 34, 'Initiative' => 1, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$immuneSystem['IS7'] = array('Type' => 'ImmuneSystem','Units' => 2846, 'Hit Points' => 5321, 'Weakness' => '', 'Immunity' => 'cold', 'AttackType' => 'cold', 'AttackDamage' => 17, 'Initiative' => 13, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$immuneSystem['IS8'] = array('Type' => 'ImmuneSystem','Units' => 4727, 'Hit Points' => 7721, 'Weakness' => 'radiation', 'Immunity' => '', 'AttackType' => 'fire', 'AttackDamage' => 15, 'Initiative' => 10, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$immuneSystem['IS9'] = array('Type' => 'ImmuneSystem','Units' => 1113, 'Hit Points' => 11891, 'Weakness' => 'fire', 'Immunity' => 'cold', 'AttackType' => 'fire', 'AttackDamage' => 80, 'Initiative' => 18, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$immuneSystem['IS10'] = array('Type' => 'ImmuneSystem','Units' => 887, 'Hit Points' => 5712, 'Weakness' => 'bludgeoning', 'Immunity' => '', 'AttackType' => 'slashing', 'AttackDamage' => 55, 'Initiative' => 15, 'EffectivePower' => 0, 'HaveAttacked' => 0);


$infection['I1'] = array('Type' => 'Infection','Units' => 3689, 'Hit Points' => 32043, 'Weakness' => 'cold,fire', 'Immunity' => 'slashing', 'AttackType' => 'cold', 'AttackDamage' => 16, 'Initiative' => 7, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$infection['I2'] = array('Type' => 'Infection','Units' => 33, 'Hit Points' => 10879, 'Weakness' => 'slashing', 'Immunity' => '', 'AttackType' => 'slashing', 'AttackDamage' => 588, 'Initiative' => 12, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$infection['I3'] = array('Type' => 'Infection','Units' => 2026, 'Hit Points' => 49122, 'Weakness' => 'bludgeoning', 'Immunity' => '', 'AttackType' => 'fire', 'AttackDamage' => 46, 'Initiative' => 16, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$infection['I4'] = array('Type' => 'Infection','Units' => 7199, 'Hit Points' => 9010, 'Weakness' => 'slashing', 'Immunity' => 'radiation,bludgeoning', 'AttackType' => 'slashing', 'AttackDamage' => 2, 'Initiative' => 8, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$infection['I5'] = array('Type' => 'Infection','Units' => 2321, 'Hit Points' => 35348, 'Weakness' => 'cold', 'Immunity' => '', 'AttackType' => 'radiation', 'AttackDamage' => 29, 'Initiative' => 20, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$infection['I6'] = array('Type' => 'Infection','Units' => 484, 'Hit Points' => 21952, 'Weakness' => '', 'Immunity' => '', 'AttackType' => 'radiation', 'AttackDamage' => 84, 'Initiative' => 9, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$infection['I7'] = array('Type' => 'Infection','Units' => 2531, 'Hit Points' => 24340, 'Weakness' => '', 'Immunity' => '', 'AttackType' => 'fire', 'AttackDamage' => 18, 'Initiative' => 3, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$infection['I8'] = array('Type' => 'Infection','Units' => 54, 'Hit Points' => 31919, 'Weakness' => '', 'Immunity' => 'bludgeoning,cold', 'AttackType' => 'radiation', 'AttackDamage' => 1178, 'Initiative' => 5, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$infection['I9'] = array('Type' => 'Infection','Units' => 1137, 'Hit Points' => 8211, 'Weakness' => 'cold', 'Immunity' => 'slashing,radiation,bludgeoning', 'AttackType' => 'bludgeoning', 'AttackDamage' => 14, 'Initiative' => 11, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$infection['I10'] = array('Type' => 'Infection','Units' => 2804, 'Hit Points' => 17948, 'Weakness' => '', 'Immunity' => '', 'AttackType' => 'radiation', 'AttackDamage' => 11, 'Initiative' => 2, 'EffectivePower' => 0, 'HaveAttacked' => 0);


// Do the boost!
// 24 - 30
// Not 25

$boostvariable = 31;
foreach($immuneSystem as $key => $value) {
    $immuneSystem[$key]['AttackDamage'] = $immuneSystem[$key]['AttackDamage'] + $boostvariable;
}

//Test Data
/*$immuneSystem['IS1'] = array('Type' => 'ImmuneSystem','Units' => 17, 'Hit Points' => 5390, 'Weakness' => 'radiation,bludgeoning', 'Immunity' => '', 'AttackType' => 'fire', 'AttackDamage' => 4507, 'Initiative' => 2, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$immuneSystem['IS2'] = array('Type' => 'ImmuneSystem','Units' => 989, 'Hit Points' => 1274, 'Weakness' => 'bludgeoning,slashing', 'Immunity' => 'fire', 'AttackType' => 'slashing', 'AttackDamage' => 25, 'Initiative' => 3, 'EffectivePower' => 0, 'HaveAttacked' => 0);

$infection['I1'] = array('Type' => 'Infection','Units' => 801, 'Hit Points' => 4706, 'Weakness' => 'radiation', 'Immunity' => '', 'AttackType' => 'bludgeoning', 'AttackDamage' => 116, 'Initiative' => 1, 'EffectivePower' => 0, 'HaveAttacked' => 0);
$infection['I2'] = array('Type' => 'Infection','Units' => 4485, 'Hit Points' => 2961, 'Weakness' => 'fire,cold', 'Immunity' => 'radiation', 'AttackType' => 'slashing', 'AttackDamage' => 12, 'Initiative' => 4, 'EffectivePower' => 0, 'HaveAttacked' => 0);

*/
$fightOver = 0;
$totalFights = 0;
while ($fightOver == 0) {
    
    // Target Selection
    // First, we need to update each groups effective power!
    updateEffectivePower($immuneSystem);
    updateEffectivePower($infection);
    // We need to select targets, with the team (from either side) with the highest initiative starting - so we need a combined array
    $combinedArray = array_merge($immuneSystem,$infection);
    array_multisort(array_column($combinedArray, 'EffectivePower'), SORT_DESC,
                    array_column($combinedArray, 'Initiative'), SORT_DESC,
                    $combinedArray);
    $infectionTargets = $infection; // Creating a seperate array to keep track of candidate targets
    $immuneSystemTargets = $immuneSystem; // Creating a seperate array to keep track of candidate targets
    // Now we loop through the combined array and where we are able to we select targets
    foreach($combinedArray as $teamID => $teamValues) {
        $targetID = null;
        if($teamValues['Type']=='ImmuneSystem') {
            if(count($infectionTargets)>0) {
                $targetID = selectTarget($infectionTargets,$teamValues);
                if($targetID <> null) {
                    //echo "target $targetID selected<Br>";
                    unset($infectionTargets[$targetID]);
                }
            }
            
        } else {
            if(count($immuneSystemTargets)>0) {
                $targetID = selectTarget($immuneSystemTargets,$teamValues);
                if($targetID <> null) {
                    //echo "target $targetID selected<Br>";
                    unset($immuneSystemTargets[$targetID]);
                }
            }
        }
        if($targetID <> null) {
            // We found a target. Update the combined array!
            $combinedArray[$teamID]['TargetID'] = $targetID;
        }
    }
    
    // Attacking
    array_multisort(array_column($combinedArray, 'Initiative'), SORT_DESC,
                    $combinedArray);
    $attackingTeamsCount = count($combinedArray);
    $i = 0;
    while ($i < $attackingTeamsCount) {
        $teamID = key($combinedArray);
        $attackingTeamValues = current($combinedArray); 
        if($combinedArray[$teamID]['Units']<1 || !isset($combinedArray[$teamID]['TargetID']) || $combinedArray[$teamID]['HaveAttacked']>0) {
            // We have no units left. Someone must have killed us, bastard! Go to the next team
            // Or we cannot target someone
            // Or they are already attacked 
            next($combinedArray);
            $i++;
            continue;
        }

        
        
        // As we re-build our array each round, we need to update the main arrays with unit numbers
        if($attackingTeamValues['Type']=='ImmuneSystem') {
            $remainingUnits = attackTeam($attackingTeamValues,$infection[$combinedArray[$teamID]['TargetID']]);
            $combinedArray[$combinedArray[$teamID]['TargetID']]['Units'] = $remainingUnits;
            $infection[$combinedArray[$teamID]['TargetID']]['Units'] = $remainingUnits;  
            if($remainingUnits==0) {
                unset($infection[$combinedArray[$teamID]['TargetID']]);
            }                      
        } else {            
            $remainingUnits = attackTeam($attackingTeamValues,$immuneSystem[$combinedArray[$teamID]['TargetID']]);
           // echo "Update ".$combinedArray[$teamID]['TargetID']." set remaining units to $remainingUnits <br>";
            $combinedArray[$combinedArray[$teamID]['TargetID']]['Units'] = $remainingUnits;
            $immuneSystem[$combinedArray[$teamID]['TargetID']]['Units'] = $remainingUnits; 
            if($remainingUnits==0) {
                unset($immuneSystem[$combinedArray[$teamID]['TargetID']]);
            }              
        }
        $combinedArray[$teamID]['HaveAttacked']==1;
        //unset($combinedArray[$teamID]);      
        $i++;
        next($combinedArray);
    }
    

   // echo "-- ROUND OVER -- <br>";
   $totalFights++;
   
   if($totalFights % 500  ==0) {
        $remainingImmuneUnits = 0;
        $remainingInfectionUnits = 0;
        foreach($immuneSystem as $id => $value) {
            $remainingImmuneUnits = $remainingImmuneUnits + $value['Units'];
        } 
        foreach($infection as $id => $value) {
            $remainingInfectionUnits = $remainingInfectionUnits + $value['Units'];
        } 
        echo "Done $totalFights fights. Immune units: $remainingImmuneUnits - Infection units: $remainingInfectionUnits<br>";
   }
    
    
    if(count($immuneSystem) < 1 || count($infection) < 1 ) {
        // One side has one. We need to do the final calculations and end the fight!
        $fightOver = 1;
        echo "done!";
    }
}
$remainingUnits = 0;
foreach($immuneSystem as $id => $value) {
    $remainingUnits = $remainingUnits + $value['Units'];
}
echo "Reamining units: $remainingUnits<br>";
// 17732 = too low
// 17738 = right!
$var = print_r($immuneSystem,true);
    echo "<pre>$var</pre>"; 

$var = print_r($infection,true);
    echo "<pre>$var</pre>"; 
    
function updateEffectivePower(&$groupArray) {
    foreach ($groupArray as $id => $value) {
        $groupArray[$id]['EffectivePower'] = $value['Units'] * $value['AttackDamage'];
    }
    return;
}

function selectTarget($targetGroup,$selectingTeam) {
    $attackingType = $selectingTeam['AttackType'];
    $selectingTeam['AttackDamage'];
    foreach ($targetGroup as $id => $value) {
        
        $weaknesses = explode(',',$value['Weakness']);
        $immunities = explode(',',$value['Immunity']);
        $candidateRanking = 50;
        if(in_array($attackingType,$immunities)) {
            // The target is immune to our damage type, so rank them very low
            $candidateRanking = 150;
        }
        if(in_array($attackingType,$weaknesses)) {
            // The target is vulnerable to our attack type, so rank them very high
            $candidateRanking = 1;
        }
        $targetGroup[$id]['candidateRanking'] = $candidateRanking;

    }
    array_multisort(array_column($targetGroup, 'candidateRanking'), SORT_ASC,
                    array_column($targetGroup, 'EffectivePower'), SORT_DESC,
                    array_column($targetGroup, 'Initiative'), SORT_DESC,
                    $targetGroup);
    $firstitem = current($targetGroup);

    if($firstitem['candidateRanking']==150) {
        return null;
    }   
    
    return key($targetGroup);
    //$var = print_r($targetGroup,true);
    //echo "<pre>$var</pre>"; 
}

function attackTeam($attackingTeam,$defendingTeam) {
    
    $attackingType = $attackingTeam['AttackType'];
    $attackingDamage = $attackingTeam['AttackDamage'];
    $attackingEP = $attackingTeam['Units'] * $attackingTeam['AttackDamage'];
    $defendingWeakness = $defendingTeam['Weakness'];
    $defendingHP = $defendingTeam['Hit Points'];
    $defendingUnits = $defendingTeam['Units'];
    $weaknesses = explode(',',$defendingWeakness);
    $damageDealt = $attackingEP;
    if(in_array($attackingType,$weaknesses)) {
        // Double Damage!
        $damageDealt = $attackingEP * 2;
    }
    
    $unitsLost = floor($damageDealt / $defendingHP);
    
    $unitsRemaining = $defendingUnits - $unitsLost;
    
    if($unitsRemaining < 0) $unitsRemaining = 0;
    
  //  echo $attackingTeam['Type']." is attacking ".$defendingTeam['Type'].". Using a $attackingType attack, "
  //          . "the defending team is weak to $defendingWeakness (and immune to ".$defendingTeam['Immunity']."). "
  //          . "<br>Attacking team EP is $attackingEP (".$attackingTeam['Units'].",".$attackingTeam['AttackDamage']."), "
  //          . "Damage dealt is $damageDealt killing $unitsLost units (Defending HP: $defendingHP) and leaving the defend team with $unitsRemaining units<br><br>";
    
    return $unitsRemaining;
}