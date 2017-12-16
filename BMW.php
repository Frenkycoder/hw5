<?php
/**
 * Created by PhpStorm.
 * User: Андрій Михайлов
 * Date: 10.12.2017
 * Time: 18:39
 */

require_once "Auto.php";


class BMW extends Auto
{
    public $Transmission;

    public function __construct($Transmission)
    {
    $this->Transmission = $Transmission;
    }

}

$bmw = new BMW('TransmissionAuto');
$bmw->engineOn(15,100);