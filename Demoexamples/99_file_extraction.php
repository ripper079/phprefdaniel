<?php
 echo "CSV extract demo<br>";


function populateArrayFromCSVFile(){
/*
        "firstname", "lastname", "age", "salary", "hiredate"
        "Daniel", "Oikarainen", "43", "22345.65", "2023-04-20 15:21:25"
        "Jenny", "Oikarainen", "39", "43000.15", "2020-04-20 15:21:25"
*/
    $filename = 'names.txt';

    
    
    $data = array();
    if (file_exists($filename))
    {
        //echo "File is present<br>";
        //Now open file in readmode
        $file = fopen($filename, "r");
        //File was successfully opened
        if ($file) {
            //Read one line each iteration and stop when EOF reached 
            $countLines = 0;
            while (($line = fgets($file)) !== false) {
                //Skip first line as it doesnt contain relevant values
                if($countLines === 0) 
                {
                    // echo "First Line. Column names from DB<br>";
                    $values = str_getcsv($line, ',', '"');
                    $columnCount = count($values);
                    echo "Displaying columns names [" . $columnCount . "entry(ies)]<br>";
                    echo $values[0] . " | " . $values[1] . " | " . $values[2] . " | " . $values[3] . " | " . $values[4] . "<br>";
                }
                else 
                {
                    //Splitting up string with delimiters
                    $values = str_getcsv($line, ',', '"');
                    //array_push($data, new OrderQuantity($values[1],$values[2],$values[3],$values[4],$values[5],$values[6],$values[7],$values[8],$values[9],$values[10],$values[11]));
                    foreach($values as $aPost)
                    {
                        echo $aPost . " | ";
                    }
                    echo "<br>";
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

    return $data;
}


populateArrayFromCSVFile();

?>
