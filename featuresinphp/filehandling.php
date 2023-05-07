<?php
//enforce strict typing in PHP functions

// echo "Med i mathcen igen php<br>";
$filename = 'names.txt';

$data = array();
if (file_exists($filename))
{
    echo "File is present<br>";
    //Now open file in readmode
    $file = fopen($filename, "r");
    //File was successfully opened
    if ($file) {
        //Read one line each iteration and stop when EOF reached 
        $countLines = 0;
        while (($line = fgets($file)) !== false) {
            //Skip first line as it doesnt contain values
            if($countLines == 0) 
            {
                echo "First Line. Save all properties here<br>";
                echo $line . "<br>";
                echo "-------------------" . "<br>";
            }
            else 
            {
                //echo $line . "<br>";                
                $values = str_getcsv($line, ',', '"');
                echo $values[0] . " " . $values[1] . " " . $values[2] . " " . $values[3] . " " . $values[4] . "<br>";
            }
                        
            $countLines++;
        }
        fclose($file);
    } else {
        echo "Error opening file!";
    }

}
else 
{
    echo "File NOT FOUND<br>";
}

//Open in readmode
// $csvFile = fopen('names.txt', 'r');     
// // Initialize an empty array
// $data = array();
// //Success to open file
// if ($csvFile !== false) {
//     // Skip the first row
//     fgetcsv($csvFile);

//     // $data = array();
//     while (($row = fgetcsv($csvFile)) !== false) {
//         $data[] = $row;
//     }
//     fclose($csvFile);

//     // Print the data array
//     print_r($data);
// } else {
//     echo 'Unable to open file.';
// }

// echo "<br><br>";
// echo $data[2][1];



?>
