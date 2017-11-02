<?php

class Personnage {

    private $_force = 20;
    private $_localisation;
    private $_experience = 0;
    private $_degats = 0;

    public function parler(){
        echo "<div>Je suis une fougère !</div>";
    }

    public function deplacer(){

    }

    public function frapper($persoAFrapper){
        $persoAFrapper->_degats += $this->_force;

    }

    public function gagnerExperience () {
       $this->_experience = $this->_experience + 1;
    }

      public function afficherExperience () {
        echo "<div>".$this->_experience."</div>";
    }
}

?>