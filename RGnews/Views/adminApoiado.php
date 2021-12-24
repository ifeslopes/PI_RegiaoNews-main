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
    <a href="<?php echo 'noticias/editandonews/'. $this->dados2[$i]['idnoticias'];?>" class="button">Editar</a>
    <a href="<?php echo 'noticias/deletandonews/'. $this->dados2[$i]['idnoticias'];?>" class="button1">Deletar</a>
   </div>
 <?php
    }
    ?>

  <a href="<?php echo 'adminApoiado/inserindousuario' ;?>" class="button">Criar Noticia</a>
</div>


<?php

echo'<pre>';
print_r($this->dados2);
echo'<pre>';
?>