<?php
$file = 'count.txt';

//Get the number from the file
$uniq = file_get_contents($file);

//add +1
$id = $uniq + 1 ;

// Add that new value to text file again for next use
file_put_contents($file, $id);

// Your unique id ready
echo $id;
?>