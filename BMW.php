<?php
/**
 * Created by PhpStorm.
 * User: Андрій Михайлов
 * Date: 10.12.2017
 * Time: 18:39
 */

require_once "Auto.php";
require_once "TransmissionAuto.php";

class BMW extends Auto
{
    use TransmissionAuto;
}

$bmw = new BMW();
$speed = 20;
$bmw->move(200, $speed);
$bmw->chooseTransAuto('вперед');
