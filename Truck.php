<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private $storage;
    private $charge;
    private $energy;

    public function __construct(string $color, int $nbSeats, int $storage, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->storage = $storage;
        $this->energy = $energy;
    }

    public function getCharge(): string
    {
        return $this->charge;
    }

    public function setCharge(int $charge): void
    {
        $this->charge = $charge;
    }

    public function filling(): string
    {
        if($this->charge < $this->storage){
            return "in filling";
        }else {
            return 'full';
        }
    }
}