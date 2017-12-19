<?php


require_once "Engine.php";

class Auto
{
    use Engine;
    public function move($distance, $speed)
    {
          $this->engineOn($distance, $speed);
    }

}