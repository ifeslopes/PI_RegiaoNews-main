<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova noticia</title>
</head>
<body>
    <div id="corpo-form-cad">
    <h1>inserindo USUARIO teste</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label>NOME COMPLETO</label>
        <input type="text" name="name">
        <label>EMAIL</label>
        <input type="text" name="email">
        <label>SENHA</label>
        <input type="text" name="senha"> 
        <label>TIPO USUARIO</label>
         <select name="tipoUsuario" >
            <option value="0">Apoiador</option>
            <option value="1">Administrador</option>
         </select>
         <br>
        <label>BIOGRAFRIA</label>
        <input type="text" name="biografia">

        <input type="file" name="foto">
        
        <input type="submit" >
    </form>
</div>
    
</body>
</html>

<?php if (isset($_POST["name"])) {
    $nome = $_POST["name"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $tipoUsuario = $_POST["tipoUsuario"];
    $biografia = $_POST["biografia"];

    $imgobjeto = new RetornoImage($_FILES["foto"]);
    $foto = $imgobjeto->getNomeimage();
    $noticia = new AdminApoiado(
        $nome,
        $senha,
        $email,
        $tipoUsuario,
        $biografia,
        $foto
    );
    $inserido = new ServicoAdminApoiado();
    $inserido->salvar($noticia);
}

?>
