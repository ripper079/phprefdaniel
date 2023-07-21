<?php

/* ---------- Filesystem and File Handling --------- */

$pathToFolder = __DIR__;
$dirContent = scandir($pathToFolder);     //Get all files and folder in the path
var_dump($dirContent[3]);
    
foreach($dirContent as $folder_content){
  if (is_dir($folder_content)){  //Check if it is a directory
    echo $folder_content . " is a folder<br>";
  }
  if (is_file($folder_content)){  //Check if it is a directory
    echo $folder_content . " is a File<br>";
  }
}

//Create a directory
mkdir("abcbrandCar"); 
mkdir("qwertycar/cara", recursive: true);       //With named argument
sleep(1);           //Check folder structure
//Delete a directory
rmdir("abcbrandCar");
rmdir("qwertycar/cara");
rmdir("qwertycar");

/*
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

//$file = '../featuresinphp/extras/users.txt';
$file = '..'. DIRECTORY_SEPARATOR . 'featuresinphp'. DIRECTORY_SEPARATOR . 'extras'. DIRECTORY_SEPARATOR . 'users.txt';
$fileStoreItems = '..'. DIRECTORY_SEPARATOR . 'featuresinphp'. DIRECTORY_SEPARATOR . 'extras'. DIRECTORY_SEPARATOR . 'items.txt';

// if(file_exists($file)) {
//   // Returns the content and number of bytes read from the file on success, or FALSE on failure.
//   echo readfile('extras/users.txt');
// }

// File Open, Read, Write, Close
if (file_exists($file)) {
    //echo readfile($file);
    // fopen() gives you more control over the file.
    // Modes: r, w, a, x, r+, w+, a+, x+ See below for details
    $handle = fopen($file, 'r');
    // fread() reads the file and returns the content as a string on success, or FALSE on failure.
    $contents = fread($handle, filesize($file));
    // fclose() closes the file resource on success, or FALSE on failure.
    fclose($handle);
    echo $contents;
} else {
    echo "Creating file...<br>";
    // Create the file(if it does NOT exist)
    $handle = fopen($file, 'w');      //Open file...     [resource]   
    // PHP_EOL is a constant that represents the end of line character.
    $contents = 'Brad is a boy' .  PHP_EOL . 'Sara is girl' .  PHP_EOL . 'Mike is a man' .  PHP_EOL . 'John is a boy' .  PHP_EOL;
    // fwrite() writes the contents to the file and returns the number of bytes written on success, or FALSE on failure.
    fwrite($handle, $contents);
    fclose($handle);                  //Close file      [resource]   
}

/*
r	- Open a file for read only. File pointer starts at the beginning of the file
w	- Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a	- Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x	- Creates a new file for write only. Returns FALSE and an error if file already exists
r+ -	Open a file for read/write. File pointer starts at the beginning of the file
w+ -	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
a+ -	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
x+	- Creates a new file for read/write. Returns FALSE and an error if file already exists
*/

//Another way of putting content into an existing file is
if (file_exists('dump_content.txt')){
  $stringToPutFile = "Hello Everybody" . PHP_EOL . "This is php" . PHP_EOL ;
  //Put everything
  file_put_contents('dump_content.txt', $stringToPutFile);
  //file_put_contents('dump_content.txt', 'Hello Everybody');   //This will overwrite previous statement
  file_put_contents('dump_content.txt', 'This is cool' . PHP_EOL , FILE_APPEND);    //Better Append   
}

//$noneExistFile = fopen('notafilethatexists.txt', 'r');       //Note that we are trying to READ file, will not create a one!

//Read a file line by line
//1. Open the file in readmode
$fileHandle = fopen($file, 'r');
//2. Iterate every line
$countLinesInfile = 0;
while(($line = fgets($fileHandle)) !== false){
  ++$countLinesInfile;
  echo "Line1=" . $line . "<br><br>";
}
fclose($fileHandle);

//Read a csvfile line by line - SCV
$delimiter = ',';
//1. Open the file in readmode
$fileHandleCsv = fopen($fileStoreItems, 'r');
//2. Iterate every line
// Skip the first line (header)
fgets($fileHandleCsv);
while(($line = fgetcsv($fileHandleCsv, separator: $delimiter)) !== false){
  foreach($line as $oneItem){
    echo " " . $oneItem . " ";
  }
  echo "<br>";
  
}
fclose($fileHandle);