<?php
// Specify the target URL to redirect the cron job
$targetUrl = 'https://snav.rf.gd/back_php/birthday_check.php';

// Use cURL to make a request to the target URL
$ch = curl_init($targetUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// Execute cURL session and close
curl_exec($ch);
curl_close($ch);
?>
