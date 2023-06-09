<?php

namespace Hetic\ReshomeH\Model\Class;
class Announce
{
    private string $title;
    private string $description;
    private string $neighborhood;
    private int $arrondissement;
    private int $bedroom_number;
    private int $capacity;
    private string $type;
    private int $area;
    private int $id;

    public function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    public function setNeighborhood($neighborhood): void
    {
        $this->neighborhood = $neighborhood;
    }

    public function getArrondissement(): int
    {
        return $this->arrondissement;
    }

    public function setArrondissement($arrondissement): void
    {
        $this->arrondissement = $arrondissement;
    }

    public function getBedroomNumber(): int
    {
        return $this->bedroom_number;
    }

    public function setBedroomNumber($bedroom_number): void
    {
        $this->bedroom_number = $bedroom_number;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity($capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }

    public function getArea(): int
    {
        return $this->area;
    }

    public function setArea($area): void
    {
        $this->area = $area;
    }

    public function getAnnounceId(): int
    {
        return $this->id;
    }

    public function setAnnounceId($announce_id): void
    {
        $this->id = $announce_id;
    }
}
