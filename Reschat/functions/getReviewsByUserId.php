<?php

function getReviewsByUserId($userId) {
    global $bdd;
    $stmt = $bdd->prepare("SELECT * FROM Review WHERE user_id = ?");
    $stmt->execute(array($userId));
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
