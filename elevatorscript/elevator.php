<?php

namespace ElevatorScript;

class Elevator implements ElevatorInterface
{
    private int $currentFloor = 1;
    private bool $isTheDoorOpen = false;
    private array $floorSelectionButtons = [];
    private bool $isTheLightOn = false;

    public function __construct(array $floorList, int $elevatorIsOnThisFloor = 1)
    {
        $this->currentFloor = $elevatorIsOnThisFloor;
        $this->floorSelectionButtons = $floorList;
    }

    public function acceptTheCall(int $callingFromThisFloor): int
    {
        if (!(in_array($callingFromThisFloor, $this->floorSelectionButtons))) {
            throw new \Exception('Floor does not exist');
        }

        return $needToGoToThisFloor = $callingFromThisFloor;
    }

    public function getCurrentFloor(): int
    {
        return $this->currentFloor;
    }

    public function arriveOnCall(int $needToGoToThisFloor): void
    {
        $this->currentFloor = $needToGoToThisFloor;
    }

    public function turnOnTheLight(): void
    {
        $this->isTheLightOn = true;
    }

    public function openTheDoor(): void
    {
        $this->isTheDoorOpen = true;
    }

    public function closeTheDoor(): void
    {
        $this->isTheDoorOpen = false;
    }

    public function arriveAtTheRequiredFloor(int $requiredFloor): void
    {
        $this->currentFloor = $requiredFloor;
    }

    public function turnOffTheLight(): void
    {
        $this->isTheLightOn = false;
    }
}