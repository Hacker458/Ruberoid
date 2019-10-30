<?php

class Ruberoid
{
    private static $USD;
    private static $EUR;

    private $courses;
    private $data = [];

    public function __constructor()
    {
        $this->courses = json_decode(file_get_contents("exchange.json"), true);
        foreach ($this->courses as $key => $value) {
            if ($value['r030'] == 840) self::$USD = $value['rate'];
            else if ($value['r030'] == 978) self::$EUR = $value['rate'];
        }
    }

    public function init()
    {
        if ($this->CheckFields()) {
            echo "Стоимость 1 рубероида = ". floor($this->FinalCost()) ." грн.";
        }
    }

    private function GetCostMaterials()
    {
        return $this->USDToUAH($this->data['polymer']) +
            $this->USDToUAH($this->data['card-board']) +
            $this->EURToUAH($this->data['bitumen']) + $this->data['sand'];
    }

    private function FinalCost()
    {
        $work_cost = $this->WorkerSalary() + $this->GetCostMaterials();
        return $work_cost + ($work_cost * 0.2);
    }

    private function CheckFields()
    {
        $status = false;
        foreach ($_POST as $key => $value) {
            if (!empty($value)) {
                $this->data[$key] = $value;
                $status = true;
            }
        }
        return $status;
    }

    private function WorkerSalary()
    {
        return $this->data['salary'] / (22 * 8) / 3.5;
    }

    private function USDToUAH($cash)
    {
        return self::$USD * $cash;
    }

    private function EURToUAH($cash)
    {
        return self::$EUR * $cash;
    }


}

