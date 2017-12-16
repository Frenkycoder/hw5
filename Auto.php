<?php


require_once "Trait.php";

class Auto
{
    use Engine, TransmissionAuto, TransmissionManual;
    public function move($distance, $speed)
    {

          $this->engineOn($distance, $speed);
//        $this->transs($way, $transmission);
//        $this->engineOff();
//        $this->transsOff();

    }
}