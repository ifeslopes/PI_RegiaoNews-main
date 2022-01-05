<?php

//bloco que  limita usuario ter acesso as arias restrita 

$tipoUsuario =1;

  if(!isset($_SESSION['idAdminApoiado'])){

    
    header("location:/PI_RegiaoNews-main/RGnews/home");
    exit;
    
  }
  if( !$_SESSION['tipoUsuario']==$tipoUsuario)
   {
         
     if($_SESSION['idAdminApoiado'] != $this->dados[0]['adminApoiadoFK']){
   
             header("location:/PI_RegiaoNews-main/RGnews/home");
             exit;
           }
   }
  

?>



<section class=" py-5 bg-light text-center">
    <div class="container">
      <div class="my-5">
             <div style="height: 100px" class="d-flex justify-content-center">
            <img src=" /PI_RegiaoNews-main/RGnews/Media/<? echo $this->dados[0]['foto'];?>" alt="passaporte">
          </div>
        <span class="h6 d-block">TUDO DE MELHOR PARA </span>
        <h2 class="display-4 text-primary ">Aproveite as Vantagens</h2>
      </div>
      <div class="row">

          <?php for($i=0;$i< count($this->dados); $i++ ){
            ?>
            <a href="<?php echo '../../noticias/news/'. $this->dados[$i]['idnoticias'];?>">
        <div class="col-xl-4 col-md-6">
          <div style="height: 100px" class="d-flex justify-content-center">
            <img src=" /PI_RegiaoNews-main/RGnews/Media/<? echo $this->dados[$i]['fotont'];?>" alt="passaporte">
          </div>
          <h3> <? echo $this->dados[$i]['titulo'];?></h3>
          <p>
            <? echo $this->dados[$i]['texto_completo'];?>
          </p>
          </a>
          
          <div>

              <a href="<?php echo '/PI_RegiaoNews-main/RGnews/noticias/editandonews/'. $this->dados[$i]['idnoticias'];?> ">
                <button  type="button" class="btn btn-info ">Editar</button>
              </a>

              <a href="<?php echo 'noticias/deletandonews/'. $this->dados[$i]['idnoticias'];?>">
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