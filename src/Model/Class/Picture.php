<?php

namespace Hetic\ReshomeH\Model\Class;
use Hetic\ReshomeH\model\Bases\BaseClass;

class Picture extends BaseClass
{
    private int $announce_id;
    private string $picture_path;
    private int $picture_id;

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

}
