<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<?php

// $myfile = fopen("testsubject.txt", "a") or die("Unable to open file!");
// echo fread($myfile,filesize("testsubject.txt"));
// echo readfile("testsubject.txt");
// fclose($myfile);



// $myfile = fopen("webdictionary.txt", "a") or die("Unable to open file!");
// echo fgets($myfile);
// fclose($myfile);


// $file2 = fopen("2.txt", "w+") or die("Unable to open file!");
// $txt = "Hello\n";
// fwrite($file2, $txt);
// // echo $file;
// echo readfile("2.txt");

// // filesize("2.txt");
// fclose($file2);
// echo fgets($myfile);

// if(filesize('newfile.txt') > 0) {
//     $content = fread($myfile, filesize(('newfile.txt')));
// }

// $myfile = fopen('1.txt', "a") or die("Unable to open file!");
// $txt ="Hi\n"; 
// fwrite($myfile, $txt);
// fclose($myfile);



if(isset($_POST['submit'])) {
if(empty($_POST['text'])) {
    echo 'Must type something';
} else {
    $txt = $_POST['text'];
    // echo $_POST['text'];
    $file2 = fopen('doc.txt', "a+") or die("Unable to open file!");

fwrite($file2, $txt . "\n");
// echo $file;
// echo readfile("doc.txt");


fclose($file2);
}
}

if(isset($_POST['erase'])) {
    $file2 = fopen('doc.txt', "w+") or die("Unable to open file!");
    
    fclose($file2);
}




?>


<div class="main">
<form method="POST">
<input type="text" name="text" class="input">
<input type="submit" name="submit" value="Submit" class="submit">
<input type="submit" name="erase" value="Erase Contents" class="erase">


</form>




</div>





    
</body>
</html>