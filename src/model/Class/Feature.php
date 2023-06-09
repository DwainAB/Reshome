<?php

namespace Hetic\ReshomeH\Model\Class;
class Feature
{
    private $content;
    private $feature_id;

    public function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getFeatureId()
    {
        return $this->feature_id;
    }

    public function setFeatureId($feature_id)
    {
        $this->feature_id = $feature_id;
    }

    public static function create($data)
    {
        // Code pour créer une nouvelle caractéristique
    }

    public static function find($feature_id)
    {
        // Code pour trouver une caractéristique par son ID de caractéristique
    }

    public function update()
    {
        // Code pour mettre à jour cette caractéristique
    }

    public function delete()
    {
        // Code pour supprimer cette caractéristique
    }
}
