<?php
/**
 * Created by PhpStorm.
 * User: Андрій Михайлов
 * Date: 16.12.2017
 * Time: 16:25
 */

trait TransmissionManual
{

    private function firstManual()
    {
        echo "Ручная  коробока передач -  первая передача, едим - вперед<br>";
    }

    private function secManual()
    {
        echo "Ручная  коробока передач -  вторая передача, едим - вперед</br>";
    }

    private function goBack()
    {
        echo "Ручная  коробока передач - едим назад<br>";
    }
    private function offTrans()
    {
        echo "Виключили передачу";
    }

    protected function chooseTransManual($way, $speed)
    {
        if ($way == 'вперед') {
            if ($speed < 20) {
                $this->firstManual();
            } else {
                $this->secManual();
            }
        } elseif ($way == 'назад') {
            $this->goBack();
        } else {
            echo "Виберите путь - вперед или назад";
        }
        $this->offTrans();
    }
}