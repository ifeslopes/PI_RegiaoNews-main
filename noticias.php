<div class='noticias'>
    <?php 
    for($i=0; $i < count($this->dados2);$i++) {
        ?>
        <a href="<?php echo 'noticias/news/'. $this->dados2[$i]['idnoticias'];?>">

       
    <div>
        <img src="<?php echo 'Media/'.$this->dados2[$i]['foto'];?>">
        <h3><?php echo $this->dados2[$i]['titulo'];?></h3>
        <h3>DATA</h3>
        <h4><?php echo $this->dados2[$i]['dataNoticia'];?></h4>
    </div>
   </a>
   <br>
    <a href="<?php echo 'noticias/editandonews/'. $this->dados2[$i]['idnoticias'];?>" class="button">Editar</a>
    <a href="<?php echo 'noticias/deletandonews/'. $this->dados2[$i]['idnoticias'];?>" class="button1">Deletar</a>
 <?php
    }
    ?>

  <a href="<?php echo 'noticias/inserindonews' ;?>" class="button">Link Button</a>
</div>


<?php

echo'<pre>';
print_r($this->dados2);
echo'<pre>';
?>