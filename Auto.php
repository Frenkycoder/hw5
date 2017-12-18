<?php


require_once "Engine.php";
require_once "TransmissionAuto.php";
require_once "TransmissionManual.php";

class Auto
{
    use Engine, TransmissionAuto, TransmissionManual;
    public function move($distance, $speed)
    {
          $this->engineOn($distance, $speed);
    }
    public function trans($transmission, $way, $speed)
    {
        if($transmission == 'TransmissionAuto') {
            $this->chooseTransAuto($way);
        } elseif ($transmission == 'TransmissionManual') {
            $this->chooseTransManual($way, $speed);
        }

    }

}