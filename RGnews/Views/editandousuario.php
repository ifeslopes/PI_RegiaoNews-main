<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova noticia</title>
</head>
<body>
    <h1>inserindo USUARIO teste</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label>NOME COMPLETO</label>
        <input type="text" name="name" value="<?php echo $nomeCompleto;?> ">
        <label>EMAIL</label>
        <input type="text" name="email"  value="<?php echo $email;?> ">
        <label>SENHA</label>
        <input type="text" name="senha"  value="<?php echo $senha;?> ">
        <label>TIPO USUARIO</label>
         <select name="tipoUsuario" >
            <option value="0">Apoiador</option>
            <option value="1">Administrador</option>
         </select>
         <br>
        <label>BIOGRAFRIA</label>
        <input type="text" name="biografia"  value="<?php echo $resumoBio;?> ">

        <input type="file" name="foto">
        
        <input type="submit" >
    </form>
    



</body>
</html>

<?php if (isset($_POST["name"])) {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $tipoUsuario = $_POST["tipoUsuario"];
    $biografia = $_POST["biografia"];

     if(!empty($_FILES['foto']['name'])){
    $imgobjeto = new RetornoImage($_FILES["foto"]);
    $fotoLocal = $imgobjeto->getNomeimage();
    }else{
        $fotoLocal = $foto;
    }

    $noticia = new AdminApoiado(
        $nome,
        $senha,
        $email,
        $tipoUsuario,
        $biografia,
        $fotoLocal
    );
    $inserido = new ServicoAdminApoiado();
    $inserido->editar($noticia, $idAdminApoiado);
}
 

?>
