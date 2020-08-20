<?php

namespace ElevatorScript;

class OutsideDisplay implements DisplayInterface
{
    protected int $currentFloor;
    private array $numberOfFloors = [];

    public function __construct($elevatorIsOnThisFloor, $numberOfFloors)
    {
        $this->currentFloor = $elevatorIsOnThisFloor;
        $this->numberOfFloors = $numberOfFloors;
    }

    public function showPassingFloorsUp(int $requiredFloor): void
    {
        while ($this->currentFloor <= $requiredFloor) {
            print_r('Elevator is on the floor ' . $this->currentFloor . '<br>');
            $this->currentFloor++;
        }
    }

    public function showPassingFloorsDown(int $requiredFloor): void
    {
        while ($this->currentFloor > $requiredFloor) {
            print_r('Elevator is on the floor ' . $this->currentFloor . '<br>');
            $this->currentFloor--;
        }
    }
}