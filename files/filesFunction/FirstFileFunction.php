<?php
    include "../config/config.php";
    if (file_exists("../assets/1.txt")) {
        printValue("yes; this file is exist");
    } else {
        printValue("no; this file is not exist"); 
    }
    if (is_file('../assets/1.txt')){
        printValue("yes; this is file");
    } else {
        printValue("no; this is not file ");
    }
    if (is_dir('../assets')){
        printValue("yes; this is directory");
    } else {
        printValue("no; this is not directory ");
    }
   @unlink("../assets/delete/2.php");
    $dir="../assets/1.txt";
   $fileOpen=fopen($dir,"r");
//    fwrite($fileOpen,"fuck u more ");
//    fclose($fileOpen);
   for ($i=0; $i <10; $i++) { 
    fwrite($fileOpen,"Log {$i} =>".date("Y-m-d",time()).PHP_EOL);
   }
   for ($i=0; $i < 5; $i++) { 

    echo fgetc($fileOpen);
   }
   fclose($fileOpen);
   echo "<br>";
   echo fgets(fopen($dir,"r")); 
   fclose(fopen($dir,"r"));
   

