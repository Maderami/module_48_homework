<?php
namespace Src\MachineClasses;
class Customization {
    private $interior;  // отделка салона
    private $color;     // цвет кузова
    private $decals;    // наклейки/декали

    public function __construct($interior, $color, $decals = null) {
        $this->interior = $interior;
        $this->color = $color;
        $this->decals = $decals;
    }

    public function getDescription() {
        $desc = "Цвет: {$this->color}, Салон: {$this->interior}";
        if ($this->decals) {
            $desc .= ", Наклейки: {$this->decals}";
        }
        return $desc;
    }
}