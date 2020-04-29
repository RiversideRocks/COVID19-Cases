<?php
echo "<i>Not working at the moment...";
echo "<h1>COVID-19 Tracker</h1>";  
echo '<link href="style.css" rel="stylesheet">';
$json = file_get_contents('https://covid2019-api.herokuapp.com/v2/current');

// I used the website for COVID-19 API.


$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        echo "<h2>$key:</h2>";
    } else {
        echo "<tr><th><strong>$key</strong></th> => <th>$val</th></tr><br><br>";
    }
}
?>