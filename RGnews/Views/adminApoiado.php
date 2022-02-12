<?php


$tipoUsuario = 1;

if ($_SESSION['tipoUsuario'] != $tipoUsuario || !isset($_SESSION['idAdminApoiado'])) {
  echo $_SESSION['tipoUsuario'];

  header("location: home");
  exit;
}

?>



<section class=" py-3 bg-light text-center">
  <div class="container">
    <div class="my-5">
      <a href="<?php echo 'adminApoiado/inserindousuario'; ?>" class="button">
        <button type="button" class="btn btn-success">Nova Conta +</button>
      </a>

      <h2 class="display-4 text-primary text-muted py-3 ">Administrador e Apoiadores</h2>
        <?php 
      if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
      }
      ?>
    </div>
    <div class="row">
    

      <?php for ($i = 0; $i < count($this->dados2); $i++) {
      ?>
        <div class=" col-md-4 py-2">
          <div class="justify-content-center ">
            <img src="/PI_RegiaoNews-main/RGnews/Media/<? echo $this->dados2[$i]['foto']; ?>" class="rounded-circle" style=" width:100px; height:100px">
          </div>
          <h3> <? echo $this->dados2[$i]['nomeCompleto']; ?></h3>
          <p>
            <? echo $this->dados2[$i]['resumoBio']; ?>
          </p>

          <div>

            <a href="<?php echo 'adminApoiado/editandousuario/' . $this->dados2[$i]['idAdminApoiado']; ?> ">
              <button type="button" class="btn btn-info ">Editar</button>
            </a>

          <?php
            if($this->dados2[$i]['email']!='admin@admin.com'){

            
            ?>
            <a href="<?php echo 'adminApoiado/deletandousuario/' . $this->dados2[$i]['idAdminApoiado']; ?>
          " data-href="<?php echo 'adminApoiado/deletandousuario/' . $this->dados2[$i]['idAdminApoiado']; ?>" data-toggle="modal" data-target="#confirm-delete">
              <button type="button" class="btn btn-danger">Deletar</button>
            </a>

            <?php } ?>


            <a href="<?php echo 'adminApoiado/newsapoiado/' . $this->dados2[$i]['idAdminApoiado']; ?>">
              <button type="button" class="btn btn-success">Noticias Postada</button>
            </a>
          </div>

        </div>

      <?php
      }
      ?>
    </div>
  </div>


  <footer blockquote-footer>

  </footer>
  </blockquote>
</section>