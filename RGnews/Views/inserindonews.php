<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova noticia</title>
</head>
<body>
    <h1>inserindonews teste</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label>NOME</label>
        <input type="text" name="name">
        <label>Texto Destaque</label>
        <input type="text" name="textodestaque">
        <label>Texto Completo</label>
        <input type="text" name="textocompleto">
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
    $idadminApioadoFK = 1;

    $imgobjeto = new RetornoImage($_FILES["foto"]);
    $foto = $imgobjeto->getNomeimage();
    $noticia = new Noticias(
        $titulo,
        $textoDestaque,
        $textoCompleto,
        $foto,
        $data,
        $idadminApioadoFK
    );
    $inserido = new ServicoNoticia();
    $inserido->salvar($noticia);
}

?>
