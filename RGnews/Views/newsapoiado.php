<?php
session_start();

$tipoUsuario =1;

  if($_SESSION['tipoUsuario'] != $tipoUsuario || !isset($_SESSION['idAdminApoiado']))
    {
      echo $_SESSION['tipoUsuario'];
     
      header("location: ../../home/login");
      exit;
    }

?>

<div class='noticias'>
    <?php 
    for($i=0; $i < count($this->dados);$i++) {
        ?>
        <a href="<?php echo '../../noticias/news/'. $this->dados[$i]['idnoticias'];?>">

       
    <div>
        <img src="<?php echo '../../Media/'.$this->dados[$i]['foto'];?>">
        <h3><?php echo $this->dados[$i]['titulo'];?></h3>
        <h3>DATA</h3>
        <h4><?php echo $this->dados[$i]['dataNoticia'];?></h4>
    </div>
   </a>
   <br>
   <div>
    <a href="<?php echo '../../noticias/editandonews/'. $this->dados[$i]['idnoticias'];?>" class="button">Editar</a>
    <a href="<?php echo '../../noticias/deletandonews/'. $this->dados[$i]['idnoticias'];?>" class="button1">Deletar</a>
   </div>
 <?php
    }
    ?>

  <a href="<?php echo '../../noticias/inserindonews' ;?>" class="button">Criar Noticia</a>
  <a href="<?php echo '../../home/sair' ;?>" class="button">Sair</a>
</div>


<?php
echo $_SESSION['id_usuario'];

echo'<pre>';
print_r($this->dados2);
echo'<pre>';
?>