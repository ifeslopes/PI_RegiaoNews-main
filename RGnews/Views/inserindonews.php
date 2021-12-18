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
<?php
if(isset($_POST['name'])){
    $titulo = $_POST['name'];
    $textoDestaque = $_POST['textodestaque'];
    $textoCompleto = $_POST['textocompleto'];
     $nome_arquivo ;
    $data  =  date("Y-m-d");
    $idadminApioadoFK=1;
    
    //------------------------------

    if($_FILES['foto']['type'] == 'image/png')
    {
         $nome_arquivo = md5($_FILES['foto']['name'].rand(1,99)).'.png';
         if(isset($_FILES['foto']))
            {
                move_uploaded_file( $_FILES['foto']['tmp_name'], 'Media/'.$nome_arquivo);
                echo 'imagem enviada com sucesso!';
            }
    }
    elseif($_FILES['foto']['type'] == 'image/jpeg'){


        $nome_arquivo = md5($_FILES['foto']['name'].rand(1,99)).'.jpg';

        if(isset($_FILES['foto']))
            {
                move_uploaded_file( $_FILES['foto']['tmp_name'], 'Media/'.$nome_arquivo);
                echo 'imagem enviada com sucesso!';
            }
    }
    else{
        echo"só e possivel enviar arquivos jpg e png!";
        exit;
    }
    //-------------------------------------

    if(isset($_FILES['foto']))
    {
        move_uploaded_file( $_FILES['foto']['tmp_name'], 'Media/'.$nome_arquivo);
        echo 'emagigem enviada com sucesso!';
    }
}
$noticia = new Noticias($titulo,$textoDestaque,$textoCompleto,$nome_arquivo,$data,$idadminApioadoFK);
$inserido= new ServicoNoticia();
$inserido->salvar($noticia);

?>