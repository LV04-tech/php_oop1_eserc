

<?php
//? <!-- Crea una classe Company che abbia i seguenti attributi pubblici:
// name: nome dell’azienda;
// location: stato in cui e' ubicata la sede dell’azienda;
// tot_employees: numero di dipedenti assunti in quella sede (di default, 0);
// Crea 5 istanze di 5 aziende diverse
// Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendendi, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“;
// Implementa un nuovo metodo che, per ogni oggetto Company istanziati, calcoli la spesa annuale e la stampi per ogni oggetto.
// Implementa un nuovo metodo che e' in grado di calcolare l’insieme totale delle spese di tutte le aziende create.
// Implementa un metodo statico che permetta di stampare a terminale questo totale assoluto di tutte le aziende messe insieme.  -->

class Company{

  public $name;
  public $location;
  public $tot_employees;
  public static $salary = 1200;
  public static $total = 0;



    public function __construct($_name, $_location, $_person)
    { 
      $this->name =$_name;
      $this->location = $_location;
      $this->tot_employees = $_person;
      
  }

// Metodo 
  public function check($col1,$col2){
    if ($col1 > $col2){
      return true;
    }
    return false; 
}
//  calc dipedneti 
  public function printEmployees($num=0){
    if($this->check($this->tot_employees, $num)){
      echo" L'azienda $this->name con sede in $this->location ha ben $this->tot_employees dipendenti. \n";
    }else{
      echo "L'azienda $this->name con sede in $this->location non ha abbastanza dipedenti. \n";
    }
  }
// totale del costo calc
  public function calcAnnualCost($col){
    return $this->tot_employees * (self::$salary * $col);
  }
  public function printcalcAnnualCost($month = 12){
    echo"$this->name .\n";
    echo "il costo annuale dell'ufficio $this->name è di\n" .$this->calcAnnualCost($month) . "euro \n";
   }
    
   public function calcTotalCost($month= 12){
    return self::$total += $this->calcAnnualCost($month);
   }
  //  metodo statico 
  public static function printTotalCost(){
    echo " l'azienda ha una previsione di spese pari a :"  .self::$total . "\n";
  }
}

$amazon = new Company("Amazon","Francia", 30);
$google = new Company ("Google","America", 20);
// $apple = new Company ("Apple", "Silicon Valley",40);
// $aulab = new Company("Aulab", "Italia", 35);

$amazon->printEmployees();
$amazon->printcalcAnnualCost();
$amazon->calcTotalCost();
$google->printEmployees();
$google->printcalcAnnualCost();
$google->calcTotalCost();

Company::printTotalCost();
