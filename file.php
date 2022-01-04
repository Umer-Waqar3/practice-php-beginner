<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("webdictionary.txt", "a") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
echo fgets($myfile);
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
  }
while(!feof($myfile)) {
    echo fgetc($myfile);
}
 
fclose($myfile);

?>

</body>
</html>