<?php

namespace Hetic\ReshomeH\model\Manager;

use Hetic\ReshomeH\Model\Bases\BaseManager;
use Hetic\ReshomeH\Model\Class\Announce;

class AnnounceManager extends BaseManager
{
    public function addAnnounce(Announce $announce)
    {
        $query = $this->db->prepare("INSERT INTO Announce (title, description, neighborhood, arrondissement, bedroom_number, capacity, `type`, area) VALUES (:title, :description, :neighborhood, :arrondissement, :bedromm_number, :capacity, :`type`, :area)");

        $query->bindValue(":title", $announce->getTitle());
        $query->bindValue(":description", $announce->getDescription());
        $query->bindValue(":neighborhood", $announce->getNeighborhood());
        $query->bindValue(":arrondissement", $announce->getArrondissement());
        $query->bindValue(":bedroom_number", $announce->getBedroomNumber());
        $query->bindValue(":capacity", $announce->getCapacity());
        $query->bindValue(":type", $announce->getType());
        $query->bindValue(":area", $announce->getArea());

        $query->execute();
    }

    public function getAllAnnounces() :array
    {
        $query = $this->db->query("SELECT * FROM Announce");
        $query->setFetchMode(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, Announce::class);

        return $query->fetchAll();
    }

    public function getAnnounceById(int $id) :\PDO
    {
        $query = $this->db->prepare("SELECT * FROM Announce WHERE id = :id");
        $query->bindValue(":id", $id);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, Announce::class);

        return $query->fetch();
    }

    public function update()
    {

    }

    public function deleteAnnounceByID(int $id) :bool
    {
        $query = $this->db->prepare("DELETE * FROM Announce WHERE id = :id");
        $query->bindValue(":id", $id);
        return $query->execute();
    }
}