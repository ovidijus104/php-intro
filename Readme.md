
**Kaip dependency panaudotas TWIG varikliukas**

**file1.php** faile pateiktas kodas yra lengviau skaitomas (geriau suprantamas kitiems programuotojams), 
dėl jame panaudotų kintamųjų tipų, kitas tokio kodo privalumas - leidžia išvengti klaidų kada į funkciją 
yra paduodami netinkamo tipo duomenys pvz. turime funkciją iš pirmojo failo: 

    /**
     * @param float $commision
     * @param` float $salary
     * @param string[] ...$names
     * @return array
     
     function salaryWhitCommission(float $commision, float $salary, string ...$names) : array
          {
              $salary = $salary * $commision;
              foreach ($names as $value) {
                  $peopleList[] = $value .'   '.$salary ;
              }
      
              return $peopleList;
          }
     */

**Bandant iškviesti funkciją salaryWhitCommission(10, '500', 'Tomas', 'Jonas')**

Gausime Fatal Error klaidą iš PHP, kad $salary reikšmė turėtų būti float, ko pasakoje išvengsime neteisingų 
rezultatų ateityje.


**file2.php** faile nepanaudoti kintamųjų tipai ko pasakoje į funkcijas galime paduoti įvairių tipų duomenis 
pvz. į antrame faile esančia funkcija padavus sekančius duomenis **salaryWhitCommissionNoStrict("2O5.2", 223, 'Tomas', 'Jonas', 'Petras')**
galima suklysti dėl skaičiau 205.2 kuris iš tikrųjų dėl panaudotos O raidės pavirs į 2 (nuskaitoma tik pradžia iki string simbolio)

Faile esančioje funkcijoje **addPrefixForNameNoStrict()** taip pat neteisingai panaudotas default argumento tipas, ko pasakoje negalima jo panaudoti.

    
    function addPrefixForNameNoStrict($sufixForName = 'Nenustatyta', $name)
    {
        return "Atsakingas asmuo: $sufixForName $name.\n";
    }
   

antrame faile esančioje funkcijoje **salaryWhitCommissionNoStrict($commision, $salary)** taip pat nenaudojamas Variadic argumentas, ko pasakoje funkcijos kodas tampa sudėtingesnis ir ilgesnis
 
    //Funkcija nepanaudojus Variadic argumento
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
    
    //Tą patį atliekanti funkcija su Variadic argumentu ir strict kintamaisiais
    function salaryWhitCommission(float $commision, float $salary, string ...$names) : array
        {
            $salary = $salary * $commision;
            foreach ($names as $value) {
                $peopleList[] = $value .'   '.$salary ;
            }
    
            return $peopleList;
        }