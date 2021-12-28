<?php
session_start();

$tipoUsuario =1;

  if($_SESSION['tipoUsuario'] != $tipoUsuario || !isset($_SESSION['idAdminApoiado']))
    {
      echo $_SESSION['tipoUsuario'];
     
      header("location: home/login");
      exit;
    }

?>
<div class='noticias'>
    <?php 
    for($i=0; $i < count($this->dados2);$i++) {
        ?>
        <a href="<?php echo 'adminApoiado/biografia/'. $this->dados2[$i]['idAdminApoiado'];?>">

       
    <div>
        <img src="<?php echo 'Media/'.$this->dados2[$i]['foto'];?>">
        <h3><?php echo $this->dados2[$i]['nomeCompleto'];?></h3>
        <h3>EMAIL</h3>
        <h4><?php echo $this->dados2[$i]['email'];?></h4>
    </div>
   </a>
   <br>
   <div>
    <a href="<?php echo 'adminApoiado/editandousuario/'. $this->dados2[$i]['idAdminApoiado'];?>" class="button">Editar</a>
    <a href="<?php echo 'adminApoiado/deletandousuario/'. $this->dados2[$i]['idAdminApoiado'];?>" class="button1">Deletar</a>
    <br>
    <a href="<?php echo 'adminApoiado/newsapoiado/'. $this->dados2[$i]['idAdminApoiado'];?>" class="button1">Noticias Postadas</a>
   </div>
 <?php
    }
    ?>

</div>
<a href="<?php echo 'adminApoiado/inserindousuario' ;?>" class="button">Criar Noticia</a>
<a href="<?php echo 'home/sair' ;?>" class="button">Sair</a>


<?php
echo $_SESSION['tipoUsuario'];

echo'<pre>';
print_r($this->dados2);
echo'<pre>';
?>