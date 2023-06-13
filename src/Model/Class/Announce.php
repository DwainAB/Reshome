<?php

namespace Hetic\ReshomeH\Model\Class;
use Hetic\ReshomeH\model\Bases\BaseClass;

class Announce extends BaseClass
{
    protected string $title;
    protected string $description;
    protected string $neighborhood;
    protected int $arrondissement;
    protected int $bedroom_number;
    protected int $capacity;
    protected string $type;
    protected int $area;
    protected float $price;
    protected int $id;

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

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}
