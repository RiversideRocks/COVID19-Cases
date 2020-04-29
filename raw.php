<?php
    $data = file_get_contents('https://api.covid19api.com/summary');
    echo "<h1>COVID-19 Data</h1> <br><br> " . $data;

// This makes the raw JSON file.

?>