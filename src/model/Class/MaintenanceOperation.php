<?php

namespace Hetic\ReshomeH\Model\Class;
class MaintenanceOperation
{
    private $announce_id;
    private $status;
    private $operation_id;

    public function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function getAnnounceId()
    {
        return $this->announce_id;
    }

    public function setAnnounceId($announce_id)
    {
        $this->announce_id = $announce_id;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getOperationId()
    {
        return $this->operation_id;
    }

    public function setOperationId($operation_id)
    {
        $this->operation_id = $operation_id;
    }

    public static function create($data)
    {
    }

    public static function find($announce_id, $operation_id)
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
