<?php

require_once('./ex_01CHALLENGER.php');
require_once('./ex_01IPPO.php');

class Fight{
    private $stMaxIppo;
    private $stMaxChallenger;

    public function __construct($ippo, $challenger)
    {
        $this->stMaxIppo = $ippo->stamina;
        $this->stMaxChallenger = $challenger->stamina2;
    }

    private function combatFin($ippo, $challenger){
        if($ippo->stamina > $challenger->stamina2){
            return " The winner is ". $ippo->name ." SHEEEESH 🏆!!!\n";
        }else{
            return "The winner is ". $challenger->name2 ." SHEEEESH 🏆!!!\n";
        }
    }

    private function surprise_ko($round, $ippo, $challenger){
        if(rand(1,20) === 1){
            $ippo->strengh = $challenger->stamina2;
            $challenger->stamina2 = $challenger->stamina2 - $ippo->strengh;

            echo "Let's get it for the round " . $round . " !\n";

            echo "It's amazing ". ($ippo->name) . " it's the ko " . ($challenger->name2) . " at $round ROOOOUUND \n";

            echo "A terrible uppercut to the chin !!!! \n";
            echo "Stamina " . $ippo->name . " : " . $ippo->stamina . " sur " . $this->stMaxIppo . "\n";
            echo "Stamina " . $challenger->name2 . " : " . $challenger->name2 . " sur " . $this->stMaxChallenger . "\n";

            echo $this->combatFin($ippo, $challenger);
            exit();


        }
        elseif(rand(1, 20) === 2){
            $challenger->enchainement = $ippo->stamina;
            $ippo->stamina = $ippo->stamina - $challenger->enchainement;

            echo "Let's get it for the round " . $round . "!\n";

            echo " It's amazing ". ($challenger->name2) . " it's the ko " . ($ippo->name) . " at $round ROOOOUUND \n";

            echo " A terrible uppercut to the chin !!!! \n";
            echo "Stamina " . $ippo->name . " : " . $ippo->stamina . " sur " . $this->stMaxIppo . "\n";
            echo "Stamina " . $challenger->name2 . " : " . $challenger->name2 . " sur " . $this->stMaxChallenger . "\n";

            echo $this->combatFin($ippo, $challenger);
            exit();

        }
    }


    public function fighting($ippo, $challenger){
        for($round=1; $round<=10; $round++){
            $this->surprise_ko($round, $ippo, $challenger);

        if($challenger->speed2 > $ippo->speed){
            echo " Let's go for the round " . $round . "!\n";
            $ippo->stamina = $ippo->stamina - $challenger->strengh2;
            
            echo "Don King : What a jab of " . $challenger->name2 . " !!! wooow \n";
            echo "Stamina " . $ippo->name . " : " . $ippo->stamina . " sur " . $this->stMaxIppo . "\n";

            $challenger->stamina2 = $challenger->stamina2 - $ippo->strengh;
            echo "Don King : The response of " . $challenger->name2 . " what an amazin blow  ! \n";
            echo "Stamina " . $challenger->name2 . " : " . $challenger->stamina2. " sur " . $this->stMaxChallenger . "\n";
            echo "Don King : End of the rouuuuuuund " . $round . "  SHEEEESH ! \n";
         }else{
            $challenger->stamina2 = $challenger->stamina2 - $ippo->strengh;

            echo "Don King : What a jab of " . $ippo->name . "!!! wooow \n";
            echo "Stamina " . $challenger->name2 . " : " . $challenger->stamina2 . " sur " .$this->stMaxIppo . "\n";

            $ippo->stamina = $ippo->stamina - $challenger->strengh2;

            echo "Don King : The response of " . $challenger->name . " what an amazin blow  ! \n";
            echo "Stamina " . $challenger->name . " : " . $challenger->stamina2. " sur " . $this->stMaxChallenger . "\n";
            echo "Don King : End of the rouuuuuuund " . $round . "  SHEEEESH ! \n";
         }
         if($round === 10) echo $this->combatFin($ippo, $challenger);
        }
    }
    
}

$fight = new Fight($ippo, $challenger);
echo $fight->fighting($ippo, $challenger);






?>