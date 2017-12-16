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

    public function engineOn ($speed, $distance,$temperature = 0)
    {

        for ($start = 0;$start <= $distance;$start+=$speed) {
            if($start / 10) {
                $stepTemp = floor($start / 10);
                $temperature = $stepTemp * 5;
            }
            if ($temperature == 90) {
                $this->enginFros($temperature);
            }
            $time = $start / $speed;
            echo "Я проехал $start метров за $time секунд<br>";
            echo "Температура двигателя сейчас $temperature градусов за Цельсием<br>";
        }
        $this->engineOff();
        echo "Температура двигателя сейчас $temperature градусов за Цельсием<br>";
    }
    public function engineOff ()
    {
        $temperature = 0;
        return $temperature;
    }
    private function enginFros ($temperature)
    {
        $temperature-=10;
        return $temperature;
    }
}

trait TransmissionAuto {

    private function forward()
    {
        echo "Автоматическая коробока передач -  Режим езды вперед";
    }

    private function back()
    {
        echo "Автоматическая коробока передач -  Режим езды назад";
    }

    public function chooseTransAuto($way)
    {
        if($way == 'вперед') {
            self::forward();
        } elseif ($way == 'назад') {
            self::back();
        } else {
            echo "Виберите путь - вперед или назад";
        }
    }


}

trait TransmissionManual {

    private function firstManual()
{
        echo "Ручная  коробока передач -  первая передача, едим - вперед";
}

    private function secManual()
    {
            echo "Ручная  коробока передач -  вторая передача, едим - вперед";
    }

    private function goBack()
    {
        echo "Ручная  коробока передач - едим назад";
    }

    public function chooseTransManual($way, $speed)
    {
        if ($way == 'вперед') {
            if ($speed < 20) {
                self::firstManual();
            } else {
                self::secManual();
            }
        } elseif ($way == 'назад') {
            self::goBack();
        } else {
            echo "Виберите путь - вперед или назад";
        }
    }

}
