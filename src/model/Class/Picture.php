<?php

namespace Hetic\ReshomeH\Model\Class;
use Fano\Reshome\model\Bases\BaseClass;

class Picture extends BaseClass
{
    private $announce_id;
    private $picture_path;
    private $picture_id;

    public function getAnnounceId()
    {
        return $this->announce_id;
    }

    public function setAnnounceId($announce_id)
    {
        $this->announce_id = $announce_id;
    }

    public function getPicturePath()
    {
        return $this->picture_path;
    }

    public function setPicturePath($picture_path)
    {
        $this->picture_path = $picture_path;
    }

    public function getPictureId()
    {
        return $this->picture_id;
    }

    public function setPictureId($picture_id)
    {
        $this->picture_id = $picture_id;
    }

    public static function create($data)
    {
    }

    public static function find($picture_id)
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
