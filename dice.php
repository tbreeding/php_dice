<?php

class dice {
    public $currVal = 1;
    public $numSides = 6;

    public function roll() {
        $this->currVal = rand(1, $this->numSides);
        return $this->currVal;
    }
    public function __toString() {
        return"<div style='height: 50px; width: 50px; border: 2px solid black; display: flex; justify-content: center; align-items: center; font-size: 2rem; margin: 5px'>" . $this->currVal ."</div>";
    }
    
}

