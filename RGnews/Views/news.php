<?php
$dateBR = implode( '/', array_reverse( explode( '-', $dataNoticia ) ) );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

 <div class="container">
  <div class="newspage h-0">
    <div class="row ">
      <div class="col-md-7 col-lg-7 ">
        <div class="card card-inverse card-primary py-4 box-shadow">
       
            <div style="height: 70px" class="d-flex justify-content-center">
                <p> Publicado Por:<? echo $nomeCompleto;?>

                    <img src="/PI_RegiaoNews-main/RGnews/Media/<? echo $foto;?>"
                    class= "rounded-circle" style=" width:50px; height:50px" >
                </p>
            </div>
            
            
            <img src="<?php echo '/PI_RegiaoNews-main/RGnews/Media/'.$fotont;?>" class="img-fluid" alt="Responsive image">

            <h7 style="margin-top: 1rem; float: left " class="bg-secondary text-white"> <?php echo" Data da publicação: ".$dateBR ;?> </h7>  
        </div>
        <h7 style="margin-top: 2rem; float: left"> <h3><?php echo $titulo;?></h3> </h7>
        <hr class="style14">

        <p style="margin-top: 4rem;">
        <?php echo $texto_completo;?>

            
        </p>
      </div>

      <div class="col-md-5 col-lg-5 py-4 ">
        <div class="row h-50 m-0 ">
          <h4>Outras noticias</h4>

          <?php for($i=0;$i< count($this->dados2); $i++ ){
            ?>
            <a href="<?php echo '/PI_RegiaoNews-main/RGnews/noticias/news/'. $this->dados2[$i]['idnoticias'];?>">
          <div class="col-md-12 pb-2  col-lg-12">
            <div class="row h-100">
              <div class="card box-shadow col-md-5 mr-0 mr-md-2 ">
                <img src="/PI_RegiaoNews-main/RGnews/Media/<? echo $this->dados2[$i]['fotont'];?>" class="img-fluid" alt="Responsive image">
              </div>
              <p>
                
               <h5 class="box-shadow text-dark col-lg-5 text-center  "> <? echo $this->dados2[$i]['titulo'];?></h5>
              
              </p>
            </div>
          </div>
          </a>
          <?php }?>
          
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
