<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/PI_RegiaoNews-main/RGnews/Formatacao/estilo.css">
</head>
<body>
<h3><?php echo $titulo;?></h3>

<div id="sidebar">
<img id="img1" src="<?php echo '/PI_RegiaoNews-main/RGnews/Media/'.$foto;?>">
<p class="sidebar">'<?php echo $texto_completo;?>'</p>
<li><?php echo $texto_destaque;?></li>
</div>


</body>
</html>
