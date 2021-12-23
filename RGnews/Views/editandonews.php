<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova noticia</title>
</head>
<body>
    <h1>Editandonews teste</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label>NOME</label>
        <input type="text" name="name" value="<?php echo $titulo?>">
        <label>Texto Destaque</label>
        <input type="text" name="textodestaque" value="<?php echo $texto_destaque?>">
        <label>Texto Completo</label>
        <input type="text" name="textocompleto" value="<?php echo $texto_completo?>">
        <input type="file" name="foto">
        
        <input type="submit" >
    </form>
    
</body>
</html>

<?php if (isset($_POST["name"])) {
    $titulo = $_POST["name"];
    $textoDestaque = $_POST["textodestaque"];
    $textoCompleto = $_POST["textocompleto"];
    $nome_arquivo;
    $data = date("Y-m-d");
    $idadminApioadoFK = $adminApoiadoFK;

    if(!empty($_FILES['foto']['name'])){
    $imgobjeto = new RetornoImage($_FILES["foto"]);
    $fotoLocal = $imgobjeto->getNomeimage();
    }else{
        $fotoLocal = $foto;
    }
   
    $noticia = new Noticias(
        $titulo,
        $textoDestaque,
        $textoCompleto,
        $fotoLocal,
        $data,
        $idadminApioadoFK
    );
    $inserido = new ServicoNoticia();
    $inserido->editar($noticia, $idnoticias);
}

?>
