<?php

function getUserById($userId) {
    global $bdd;
    $stmt = $bdd->prepare("SELECT * FROM User WHERE user_id = ?");
    $stmt->execute(array($userId));
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

