<?php
/**
 * Created by PhpStorm.
 * User: Андрій Михайлов
 * Date: 10.12.2017
 * Time: 20:38
 */

trait Engine {

    private $horsepower = 100;
    private $speed_Of_1_Horse = 2;
    private $temperature;
    private $maxTemp = 90;

    protected function engineOn ($distance,$speed,$temperature = 0)
    {

        for ($start = 0, $log = true;$start <= $distance;$start+=$speed) {
            if ($temperature == 90) {
                $temperature = $this->enginFros($temperature);
            }
            if($start / 10) {
                $stepTemp = floor($start / 10);
                $temperature = $stepTemp * 5;
            }
            $time = $start / $speed;
            echo "Я проехал $start метров за $time секунд<br>";
            echo "Температура двигателя сейчас $temperature градусов за Цельсием<br>";
        }
        $temperature = $this->engineOff();
        echo "Температура двигателя сейчас $temperature градусов за Цельсием<br>";
    }
    private function engineOff ()
    {
        $temperature = 0;
        return $temperature;
    }
    private function enginFros ($temperature)
    {
        $temperature-=10;
        echo "<p style='color: blue;'>Температура двигателя после охлаждения $temperature</p><br>";
        return $temperature;
    }
}
