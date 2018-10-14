<?php
declare(strict_types=1);

    /**
     * @param string $sufixForName
     * @param string $name
     * @return string
     */
function addPrefixForName(string $name, string $sufixForName = 'Nenustatyta' ) : string
    {
        return $sufixForName . ' ' . $name;
    }


    /**
     * @param float $commision
     * @param float $salary
     * @param string[] ...$names
     * @return array
     */
function salaryWhitCommission(float $commision, float $salary, string ...$names) : array
    {
        $salary = $salary * $commision;
        foreach ($names as $value) {
            $peopleList[] = $value .'   '.$salary ;
        }

        return $peopleList;
    }