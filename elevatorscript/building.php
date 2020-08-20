<?php

namespace ElevatorScript;

class Building
{
    protected array $floorList = [];

    public function __construct(int $numberOfFloors = 10)
    {
        $this->floorList = range(1, $numberOfFloors);
    }

    public function getFloorList(): array
    {
        return $this->floorList;
    }
}