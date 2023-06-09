<?php

function getBookingsForLogement($logementId) {
    global $bdd;

    $stmt = $bdd->prepare("SELECT starting_date, ending_date FROM booking WHERE anounce_id = ?");
    $stmt->execute(array($logementId));

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}
