<?php

namespace Src\MachineClasses;

class Bulldozer extends Vehicle implements BucketControllable
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

    public function controlBucket()
    {
        return $this->getNameVehicle() . " размахивает ковшом\n";
    }

    public function useSpecialAbility($typeActionVehicle)
    {
        switch ($typeActionVehicle) {
            case 'swingBucket':
                return $this->controlBucket();
        }
    }
    public function honk() {
        echo $this->getNameVehicle() . " сигналит: Би-бип!\n";
    }

    public function turnOnWipers() {
        echo $this->getNameVehicle() . " включает дворники\n";
    }

    public function moveForward()
    {
        return 'Бульдозер - ' . $this->getNameVehicle() . ' движеться вперед со скростью' . $this->getMaxSpeedVehicle() . 'км/ч' . PHP_EOL;
    }

    public function moveBackward()
    {
        $this->maxSpeedVehicle = $this->getMaxSpeedVehicle() * 0 + 5;
        return 'Бульдозер - ' . $this->getNameVehicle() . ' движеться назад со скростью' . $this->getMaxSpeedVehicle() . 'км/ч' . PHP_EOL;
    }
}