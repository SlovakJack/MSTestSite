<?php

/* Configure the variables */

$composerScript = $_POST["composerScript"];
$composerFile = $_POST["composerFile"];



$myfile = fopen("composertest/".$composerFile.".html", "w") or die("Unable to open file!");
$txt = '
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Managed Services Simple Composer Test Site</title>

        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../example.css">

'.$composerScript.'
</head>
    <body>
    Use the id - piano-modal-window for an inline template
    <div id="piano-modal-window" ></div>
    </body>
</html>

';
fwrite($myfile, $txt);
fclose($myfile);
?>

<html>
<body>
    
    <a href="composertest/<?= $composerFile?>.html" target="_blank">Open Composer</a>
    <script>
        window.location.replace("composertest/<?= $composerFile?>.html");
    </script>
</body>
</html>