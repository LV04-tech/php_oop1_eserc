<?php


// crea una struttura a classi sfruttando l’ereditarieta' e seguendo queste semplici regole:

// le classi non devono avere attributi;
// ogni classe avra' un metodo specifico protected per stampare la sua specializzazione;
// non puoi realizzare metodi definiti public per stampare il risultato;
// l’unico metodo public ammesso e' il costrutture.

// $magikarp = new Fish();
// //Nel terminale visaulizzerete:
// Sono un animale Vertebrato
// Sono un animale a Sangue Freddo
// Splash!


class Vertebrate {
  
  public function __construct()
  {
    $this->printVertebrate();
  }
  protected function printVertebrate(){
    echo "Sono un animale vertebrato \n";
  }
}

// warm-blooded 

class WarmBlood extends Vertebrate {
  
  public function __construct()
  {
    parent::__construct();
    $this->printWarmBlood();
  }
  protected function printWarmBlood(){
    echo " Sono un animale a sangue Caldo \n";
  }
}

// cold-blooded 
class ColdBlood extends Vertebrate{
  
  public function __construct()
  {
    parent::__construct();
    $this->printColdBlood();
  }
  protected function printColdBlood(){
    echo "Sono un animale a sangue freddo \n";
    
  }
}

// Animali sangue freddo sottoclasse cold-blooded (3 amphibians, reptiles, fish)
class Amphibians extends ColdBlood{
  
  public function __construct()
  {
    parent::__construct();
    $this->printAmphibians();
  }
  protected function printAmphibians()
  {
    echo "sono anfibio \n";
  }
}

class Reptiles extends ColdBlood{
  
  public function __construct()
  {
    parent::__construct();
    $this->printReptiles();
  }
  protected function printReptiles()
  {
    echo "sono un rettile \n";
  }
}

class Fish extends ColdBlood{
  
  public function __construct()
  {
    parent::__construct();
    $this->printFish();
  }
  protected function printFish()
  {
    echo"sono un pesce \n";
  }
}

// Animali sangue caldo,sottoclasse Warm-blooded(2 bird, mammals) 
class Mammals extends WarmBlood{
  
  public function __construct()
  {
    parent::__construct();
    $this->printMammal();
  }
  protected function printMammal()
  {
    echo"Sono un mammifero \n";
  }
  
}

class Bird extends WarmBlood{
  public function __construct()
  {
    parent::__construct();
    $this->printBird();
  }
  protected function printBird()
  {
    echo "Sono un volatile \n";
  }
}

//  $magikarp = new Fish();
//  $bird = new Bird ();
// $Mammals = new Mammals ();




