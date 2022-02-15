  <section coass="conteiner-fluid ">
    <div class="row bg-dark text-white bgimagem">
      <div class="col-md-7 p-0">

        <div id="carouselCidade" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselCidade" data-slide-to="0" class="active"></li>
            <li data-target="#carouselCidade" data-slide-to="1"></li>
            <li data-target="#carouselCidade" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
              <a href="<?php echo '/PI_RegiaoNews-main/RGnews/noticias/news/'. $this->dados2[0]['idnoticias'];?>">
            <div class="carousel-item active">
              <img style=" width:600px; height:400px" class="d-block w-100" src="/PI_RegiaoNews-main/RGnews/Media/<? echo $this->dados2[0]['fotont'];?>" alt="<? echo $this->dados2[0]['titulo'];?>">
              <div class="carousel-caption p-6 mb-2 espelho">
                <h4 clas="display-4 "><? echo $this->dados2[0]['titulo'];?></h4>
              </div>
              </a>
            </div>
            <div class="carousel-item">
                <a href="<?php echo '/PI_RegiaoNews-main/RGnews/noticias/news/'. $this->dados2[1]['idnoticias'];?>">
              <img  style=" width:600px; height:400px" class="d-block w-100" src=" /PI_RegiaoNews-main/RGnews/Media/<? echo $this->dados2[1]['fotont'];?>" alt="<? echo $this->dados2[1]['titulo'];?>">
              <div class="carousel-caption p-3 mb-2 espelho">
                <h4 clas="display-4"><? echo $this->dados2[1]['titulo'];?></h4>
              </div>
                </a>
            </div>

            <div class="carousel-item">
                <a href="<?php echo '/PI_RegiaoNews-main/RGnews/noticias/news/'. $this->dados2[2]['idnoticias'];?>">
              <img style=" width:600px; height:400px" class="d-block w-100" src="/PI_RegiaoNews-main/RGnews/Media/<? echo $this->dados2[2]['fotont'];?>" alt="<? echo $this->dados2[2]['titulo'];?>"
              >
              <div class="carousel-caption p-3 mb-2 espelho ">
                <h4 clas="display-4 "><? echo $this->dados2[2]['titulo'];?></h4>
              </div>
                </a>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselCidade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselCidade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
      <div class="col-md-5 p-1 aling-seft-center espelho2 ">
        
      <div class="p-5">
        <h1 class="display-4 text-center">Região news  </h1>
        <blockquote>

          <p class="lead text-center display-5"><em>

            " Bem vindo ao mini portal de notícias da sua região.
            Aqui você vai encontra as noticias de utiliade publica das  sua região.
            Saúde, esporte, lazer e cidadania tudo isso é muito mais para você.
            "
          </em>
          </p>
        </blockquote>
      </div>

       
      </div>
    </div>
  </section>

  <section class=" py-5 bg-light text-center">
    <div class="container">
      <div class="my-5">
        <span class="h6 d-block">IFORMAÇÃO DE QUALIDADE </span>
        <h2 class="display-4 text-primary ">Aqui você encontra noticias da sua Região</h2>
      </div>

      
      <div class="row justify-content-md-center">
         <div class="input-group mb-3 col-3  aling-center"> 
       <input id="filtro" type="text" class="form-control text-white bg-dark" placeholder="Buscar Notícias"  > 
      </div>
       </div>


      <div class="row justify-content-md-center">

          <?php for($i=0;$i< count($this->dados2); $i++ ){
            ?>
            <a href="<?php echo '/PI_RegiaoNews-main/RGnews/noticias/news/'. $this->dados2[$i]['idnoticias'];?>" class="text-dark">
        <div class="col-lg-3 col-md-3 shadow p-3 ml-3 mb-3 bg-white rounded box-shadow text-dark noticias">
          <div style="height: 100px" class="d-flex justify-content-center ">
            <img src="/PI_RegiaoNews-main/RGnews/Media/<? echo $this->dados2[$i]['fotont'];?>" alt="passaporte">
          </div>
          <h3 class="titulo"> <? echo $this->dados2[$i]['titulo'];?></h3>
          <p class=" text-truncate">
            <? echo $this->dados2[$i]['texto_completo'];?>
          </p>
        </a>
        </div>

        <?php
          }
        ?>
       
  
    </blockquote>
  </section>










