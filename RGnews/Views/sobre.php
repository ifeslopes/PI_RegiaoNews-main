<section class=" py-3 bg-light text-center">
    <div class="container">
      <div class="my-5">
        <span class="h6 d-block  bg-dark col-7 rounded mx-auto d-block font-weight-ligh 
        text-white  ">SOBRE: Região News é um projeto com fins didáticos 
        sem fins comerciais. Esse projeto se trata de um trabalho
         final do curso Técnico de Informática do Instituto 
         Federal do Espírito Santo(IFES).
        </span>
        <h2 class="display-4 text-primary text-muted py-3 ">Administrador e Apoiadores</h2>
      </div>
      <div class="row  ">

          <?php for($i=0;$i< count($this->dados2); $i++ ){
            ?>
        <div class="col-xl-4 col-md-6 box-shadow">
          <div style="height: 100px" class="d-flex justify-content-center ">
            <img src="/PI_RegiaoNews-main/RGnews/Media/<? echo $this->dados2[$i]['foto'];?>"
            class= "rounded-circle" style=" width:100px; height:100px" >
          </div>
          <h3> <? echo $this->dados2[$i]['nomeCompleto'];?></h3>
          <p>
            <? echo $this->dados2[$i]['resumoBio'];?>
          </p>
        </div>

        <?php
          }
        ?>
       
  
      <footer blockquote-footer>
        
      </footer>
    </blockquote>
  </section>

