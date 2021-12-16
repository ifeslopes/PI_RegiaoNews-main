<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="MVC2/Formatacao/estilo.css">
</head>
<body>
<h3><?php echo $titulo;?></h3>

<div id="sidebar">
<img id="img1" src="<?php echo '/MVC2/Media/'.$nome_imagem;?>">
<p class="sidebar">'<?php echo $texto;?>'</p>
<li><?php echo $descricao;?></li>
</div>


</body>
</html>
