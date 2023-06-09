<?php

class AnnounceFeature {
    private $announce_id;
    private $feature_id;

    public function __construct($data = []) {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function getAnnounceId() {
        return $this->announce_id;
    }

    public function setAnnounceId($announce_id) {
        $this->announce_id = $announce_id;
    }

    public function getFeatureId() {
        return $this->feature_id;
    }

    public function setFeatureId($feature_id) {
        $this->feature_id = $feature_id;
    }

    public static function create($data) {
    }

    public static function find($announce_id, $feature_id) {
    }

    public function update() {
    }

    public function delete() {
    }
}
