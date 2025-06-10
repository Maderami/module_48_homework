<?php

namespace Src\MachineClasses;

class PassengerVehicle extends Vehicle implements NitrousOxideSystem
{
    public function moveForward()
    {
        return 'Автомабиль - ' . $this->getNameVehicle() . ' движеться вперед со скростью' . $this->getMaxSpeedVehicle() . 'км/ч' . PHP_EOL;

    }
    public function showCustomizationVehicle()
    {
        return $this->customization;
    }

    public function getTypeActionVehicle()
    {
        return $this->typeActionVehicle;
    }

    public function getNameVehicle()
    {
        return $this->nameVehicle;
    }

    public function getMaxSpeedVehicle()
    {
        return $this->maxSpeedVehicle;
    }

    public function useSpecialAbility($typeActionVehicle)
    {
        switch ($typeActionVehicle) {
            case 'activateNOS':
                return $this->activateNOS();
                break;
            case 'deactivateNOS':
                return $this->deactivateNOS();
            case 'withoutSpecFun':
                return 'без особых функций движения';
        }
    }
    public function honk() {
        echo $this->getNameVehicle() . " сигналит: Би-бип!\n";
    }

    public function turnOnWipers() {
        echo $this->getNameVehicle() . " включает дворники\n";
    }
    public function activateNOS(): true
    {
        return true;
    }

    public function deactivateNOS(): false
    {
        return false;
    }

    public function moveBackward()
    {
            $this->maxSpeedVehicle = $this->getMaxSpeedVehicle() * 0 + 5;
            return 'Автомабиль - ' . $this->getNameVehicle() . ' движеться назад со скростью' . $this->getMaxSpeedVehicle() . 'км/ч' . PHP_EOL;
    }
}