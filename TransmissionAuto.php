<?php
/**
 * Created by PhpStorm.
 * User: Андрій Михайлов
 * Date: 16.12.2017
 * Time: 16:23
 */

trait TransmissionAuto
{
    private function forward()
    {
        echo "Автоматическая коробока передач -  Режим езды вперед<br>";
    }

    private function back()
    {
        echo "Автоматическая коробока передач -  Режим езды назад<br>";
    }


    protected function chooseTransAuto($way)
    {
        if($way == 'вперед') {
            $this->forward();
        } elseif ($way == 'назад') {
            $this->back();
        } else {
            echo "Виберите путь - вперед или назад";
        }
        $this->offTrans();
    }
}