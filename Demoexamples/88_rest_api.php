<?php
// The URL for the Star Wars API endpoint to get information about Luke Skywalker
$url = "https://swapi.dev/api/people/1/";

// Make the GET request and get the response
$response = file_get_contents($url);

// Decode the JSON response to an associative array
$data = json_decode($response, true);

// Output the response
echo "<pre>";
print_r($data);
echo "</pre>";
?>
