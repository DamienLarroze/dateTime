<?php
$presentTime = new DateTime();
echo $presentTime->format('F d Y g:i A');
echo "<br>";
$destinationTime = new DateTime('06-05-2025 15:24');
echo $destinationTime->format('F d Y g:i A');
echo "<br>";
echo "Il reste : <br>";
$interval = date_diff($presentTime, $destinationTime);
echo $interval->format('%Y an(s), %m mois, %d jours, %H heures et %I minutes');
echo "<br>";
echo "En minutes :<br>";
$min = $interval->days * 24 * 60;
$min += $interval->h * 60;
$min += $interval->i;
echo $min . " minutes<br>";
$result = round($min / 1000);
echo "Il faudra donc : $result L de carburants.<br>";
