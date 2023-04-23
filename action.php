<?php
 $path = 'sugestii.txt';
 if (isset($_POST['sugestie'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['sugestie'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
    echo "Multumesc!";
 }
?>