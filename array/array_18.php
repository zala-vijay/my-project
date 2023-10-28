<?php
// 18. Remove a city of your choice from the array and display the updated list. 

$future_cities_visit = array("madrid","sydney","las_vegas"," San_Francisco");
unset($future_cities_visit[2]);
print_r($future_cities_visit);
?>