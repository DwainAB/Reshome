<?php

function getTagsByAnnounceId($announceId) {
    global $bdd;
    $stmt = $bdd->prepare("SELECT * FROM Tags WHERE tag_id IN (SELECT tag_id FROM AnnounceTags WHERE announce_id = ?)");
    $stmt->execute(array($announceId));
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
