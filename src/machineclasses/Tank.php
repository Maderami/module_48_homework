<?php

namespace Src\MachineClasses;
class Tank extends Vehicle
{
    public function getNameVehicle()
    {
        return $this->nameVehicle;
    }

    public function getMaxSpeedVehicle()
    {
        return $this->maxSpeedVehicle;
    }

    public function getTypeActionVehicle()
    {
        return $this->typeActionVehicle;
    }
    public function honk() {
        echo $this->getNameVehicle() . " сигналит: Би-бип!\n";
    }
    public function useSpecialAbility($typeActionVehicle)
    {
        switch ($typeActionVehicle) {
            case 'cannonShot':
                return $this->nameVehicle . " стреляет из пушки!\n";
        }
    }

    public function turnOnWipers() {
        echo $this->getNameVehicle() . " включает очистители смотровых щелей\n";
    }
    public function moveForward()
    {
            return 'Танк - ' . $this->getNameVehicle() . ' движеться вперед со скростью' . $this->getMaxSpeedVehicle() . PHP_EOL;
    }

    public function moveBackward()
    {
        return 'Танк - ' . $this->getNameVehicle() . ' движеться назад со скростью' . $this->getMaxSpeedVehicle() . PHP_EOL;
    }
}