<?php

class Announce {
    private $title;
    private $description;
    private $neighborhood;
    private $arrondissement;
    private $bedroom_number;
    private $capacity;
    private $type;
    private $area;
    private $announce_id;

    public function __construct($data = []) {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getNeighborhood() {
        return $this->neighborhood;
    }

    public function setNeighborhood($neighborhood) {
        $this->neighborhood = $neighborhood;
    }

    public function getArrondissement() {
        return $this->arrondissement;
    }

    public function setArrondissement($arrondissement) {
        $this->arrondissement = $arrondissement;
    }

    public function getBedroomNumber() {
        return $this->bedroom_number;
    }

    public function setBedroomNumber($bedroom_number) {
        $this->bedroom_number = $bedroom_number;
    }

    public function getCapacity() {
        return $this->capacity;
    }

    public function setCapacity($capacity) {
        $this->capacity = $capacity;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getArea() {
        return $this->area;
    }

    public function setArea($area) {
        $this->area = $area;
    }

    public function getAnnounceId() {
        return $this->announce_id;
    }

    public function setAnnounceId($announce_id) {
        $this->announce_id = $announce_id;
    }
    
    public static function create($data) {
    }

    public static function find($announce_id) {
    }

    public function update() {
    }

    public function delete() {
    }
}
