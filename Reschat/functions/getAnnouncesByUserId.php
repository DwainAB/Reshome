<?php

function getAnnouncesByUserId($userId) {
    global $bdd;
    $stmt = $bdd->prepare("SELECT * FROM Announce WHERE user_id = ?");
    $stmt->execute(array($userId));
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

