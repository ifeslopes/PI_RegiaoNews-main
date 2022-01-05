<?php
/*
echo $_SESSION['idAdminApoiado'];
if(!isset($_SESSION['idAdminApoiado']))
{
    header("location: home/login");
    exit;
}









<div class='noticias'>
    <?php 
    for($i=0; $i < count($this->dados2);$i++) {
        ?>
        <a href="<?php echo 'noticias/news/'. $this->dados2[$i]['idnoticias'];?>">

       
    <div>
        <img src="<?php echo './Media/'.$this->dados2[$i]['foto'];?>">
        <h3><?php echo $this->dados2[$i]['titulo'];?></h3>
        <h3>DATA</h3>
        <h4><?php echo $this->dados2[$i]['dataNoticia'];?></h4>
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

  <a href="<?php echo 'noticias/inserindonews' ;?>" class="button">Criar Noticia</a>
  <a href="<?php echo 'home/sair' ;?>" class="button">Sair</a>
</div>
*/
?>

<section class=" py-5 bg-light text-center">
    <div class="container">
      <div class="my-5">
        <span class="h6 d-block">TUDO DE MELHOR PARA </span>
        <h2 class="display-4 text-primary ">Aproveite as Vantagens</h2>
      </div>
      <div class="row">

          <?php for($i=0;$i< count($this->dados2); $i++ ){
            ?>
        <div class="col-xl-4 col-md-6">
          <div style="height: 100px" class="d-flex justify-content-center">
            <img src="Media/<? echo $this->dados2[$i]['fotont'];?>" alt="passaporte">
          </div>
          <h3> <? echo $this->dados2[$i]['titulo'];?></h3>
          <p>
            <? echo $this->dados2[$i]['texto_completo'];?>
          </p>
          
          <div>

              <a href="<?php echo 'noticias/editandonews/'. $this->dados2[$i]['idnoticias'];?> ">
                <button  type="button" class="btn btn-info ">Editar</button>
              </a>

              <a href="<?php echo 'noticias/deletandonews/'. $this->dados2[$i]['idnoticias'];?>">
                    <button type="button" class="btn btn-danger">Deletar</button>
              </a>
            </div>
        </div>

        <?php
          }
        ?>
       
  
      <footer >
      </footer>
    </blockquote>
  </section>

