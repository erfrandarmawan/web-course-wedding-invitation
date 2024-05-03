<?php
  function formatDate($dateString, $format) {
    if (!$dateString){
      return "";
    }

    try {
      $date = new DateTime($dateString);
      $timezone = new DateTimeZone("Asia/Jakarta");
      $date->setTimezone($timezone);
      
      return $date->format($format);
    } catch (Exception $e){
      return "";
    }
  }

  function countdown($dateString){
    $weddingDate = new DateTime($dateString);
    $weddingDate->setTime(0, 0);
    $now = new DateTime();
    $now->setTime(0, 0);

    $countdown = $now->diff($weddingDate)->format("%r%a");
    if ($countdown < 0){
      $countdown = 0;
    }

    return $countdown;
  }
?>