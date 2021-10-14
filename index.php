<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simuladores</title>
</head>
<body>
    
<?php

require_once "Foto.php";


$temporada=1;
$capitulo=random_int(1,3);
$lista=Foto::DeserializarJson("./img/".$capitulo . ".json");
$len=count($lista);
$indice=random_int(0,$len-1);
$foto=$lista[$indice]->link;
echo("<img src="."\"" . $foto . "\"");
echo("<h1>" . $capitulo ."</h1>");
echo("<h1>" . $indice ."</h1>");


?>

</body>
</html>