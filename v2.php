<?php

echo "<h1>COVID-19 Tracker</h1>";  
echo '<link href="style.css" rel="stylesheet"><br>';
echo 'Use CTRL + F to search for your country.';
$json = file_get_contents('https://api.covid19api.com/summary');

// I used the website for COVID-19 API.

// Change log 4-29
// ACK! The old good API is used got shut off so I switched. Stats are going to look a bit different.

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        echo "<h2>$key:</h2>";
    } else {
        echo "<strong>$key</strong> => $val<br><br>";
    }
}
?>