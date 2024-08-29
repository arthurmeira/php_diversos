<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    include 'arquivo.php';
    echo "Primeira chamada: " , $x , "<br>"; 
    
    include 'arquivo.php';
    echo "Segunda chamada: " , $x; 
?>
    
</body>
</html>