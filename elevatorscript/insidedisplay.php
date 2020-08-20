<?php

namespace ElevatorScript;

class InsideDisplay extends OutsideDisplay
{
    private bool $isDisplayOn = false;

    public function turnOnTheDisplay()
    {
        $this->isDisplayOn = true;
    }

    public function turnOffTheDisplay()
    {
        $this->isDisplayOn = false;
    }

    public function showPassingFloorsUp(int $requiredFloor): void
    {
        while ($this->currentFloor <= $requiredFloor) {
            print_r('User is on the floor ' . $this->currentFloor . '<br>');
            $this->currentFloor++;
        }
    }

    public function showPassingFloorsDown(int $requiredFloor): void
    {
        while ($this->currentFloor > $requiredFloor) {
            print_r('User is on the floor ' . $this->currentFloor . '<br>');
            $this->currentFloor--;
        }
    }
}