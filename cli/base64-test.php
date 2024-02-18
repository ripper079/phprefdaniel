<?php

declare(strict_types=1);

//Run this code in cli mode
//php base64-test.php

$stringToEncode = "Hello World";

echo "Example of base64 Encoding and decoding" . PHP_EOL . PHP_EOL;
echo "Lets encode" . PHP_EOL;
echo $stringToEncode . PHP_EOL . PHP_EOL;

// Encoding to Base64
$base64EncodedString = base64_encode($stringToEncode);
echo "Encoded string is now" . PHP_EOL;
echo $base64EncodedString . PHP_EOL;

// Decoding from Base64
$decodedString = base64_decode($base64EncodedString);
echo "Decoded string is now" . PHP_EOL;
echo $decodedString . PHP_EOL . PHP_EOL;




//Lets encode a picture
// Specify the path to the picture file
$pictureFile = 'socks-pic.png'; // Can be of any type

// Read the contents of the picture file
$pictureData = file_get_contents($pictureFile);

// Encode the picture data to Base64
//$base64EncodedPicture = base64_encode($pictureData);                      //This will print a lot of characters

// Output the Base64 encoded picture data
echo $base64EncodedPicture;
// Decode the Base64 encoded picture data back to binary
$decodedPictureData = base64_decode($base64EncodedPicture);                 //Recreate

// Specify the path to the new picture file
$newPictureFile = 'new_copy_picture.jpg';

// Write the decoded binary data to the new picture file
file_put_contents($newPictureFile, $decodedPictureData);
