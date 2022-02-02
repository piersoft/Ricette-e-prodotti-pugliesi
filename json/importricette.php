<?php

// eventi su https://dati.puglia.it/ckan/dataset/ ricette  importati su google sheet
// https://docs.google.com/spreadsheets/d/1nPH0wR9zYo2Iqo9GfqPgawO3uJ5hUodR1gRsfmsXoR0/edit#gid=1709353583
$tot=file_get_contents("https://docs.google.com/spreadsheets/d/e/2PACX-1vTF99JmvTENBv1YySl98szcIi2hsUqY9Z-mtBdc8cY5N9w4AoUsVqroKrP8R7EFM3VZ-vzF_fe42k7D/pub?gid=1709353583&single=true&output=csv");
echo $tot;

?>
