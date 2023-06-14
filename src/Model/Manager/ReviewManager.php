<?php

namespace Hetic\ReshomeH\Model\Manager;

use Hetic\ReshomeH\Model\Bases\BaseManager;

class ReviewManager extends BaseManager
{
    public function getReviewsByAnnounceId(int $announce_id) : array
    {
        $query = $this->db->prepare("SELECT * FROM Review WHERE announce_id =:announceId");
        $query->bindValue(":announceId", $announce_id);
        $query->setFetchMode(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, "Review");

        return $query->fetchAll();
    }

    public function addReview(Review $review) : bool
    {
        $query = $this->db->prepare("INSERT INTO Review (announce_id, user_id, rate, comment) VALUES (:announceId, :userId, :rate, :comment)");
        $query->bindValue(":announceId", $review->getAnnounceId());
        $query->bindValue(":user_id", $review->getUserId());
        $query->bindValue(":rate", $review->getRate());
        $query->bindValue(":comment", $review->getComment());

        return $query->execute();
    }

    public function updateReview(Review $review) : bool
    {
        $query = $this->db->prepare("UPDATE Review SET rate = :rate, comment = :comment WHERE id = :reviewId");
        $query->bindValue(":reviewId", $review->getReviewId());
        $query->bindValue(":rate", $review->getRate());
        $query->bindValue(":comment", $review->getComment());

        return $query->execute();
    }

    public function deleteReview(Review $review) : bool
    {
        $query = $this->db->prepare("DELETE * FROM Review WHERE id = :reviewId");
        $query->bindValue(":reviewId", $review->getReviewId());

        return $query->execute();
    }
}