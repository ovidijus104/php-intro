<?php

function addPrefixForNameNoStrict($sufixForName = 'Nenustatyta', $name)
{
    return "Atsakingas asmuo: $sufixForName $name.\n";
}

function salaryWhitCommissionNoStrict($commision, $salary)
{
    $names = array();
    if (func_num_args() > 2) {
        for($i = 0; $i < func_num_args()-2; $i++) {
            $names[] = func_get_arg($i+2);
        }
    }

    $salary = $salary * $commision;
    foreach ($names as $value) {
        $peopleList[] = $value .'   '.$salary ;
    }

    return $peopleList;
}