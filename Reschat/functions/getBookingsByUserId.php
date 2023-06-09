<?php

function getBookingsByUserId($userId) {
    global $bdd;
    $stmt = $bdd->prepare("SELECT * FROM Booking WHERE user_id = ?");
    $stmt->execute(array($userId));
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

