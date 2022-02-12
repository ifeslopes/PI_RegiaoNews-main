<section class=" py-3 bg-light  text-center">
  <div class="container">
    <div class="my-9">
      <span class="h6 d-block  bg-dark  rounded mx-auto d-block font-weight-ligh 
        text-white  bgimagem ">
        <p class=" espelho2">SOBRE: Região News é um projeto com fins didáticos
        sem fins comerciais. Esse projeto se trata de um trabalho
         do curso Técnico de Informática do Instituto
        Federal do Espírito Santo(IFES).
        O objetivo principal do projeto é colocar em 
        prática todo conhecimento obtido através do curso.

        </p>

        <section class="container col-md-12 espelho2">
          <div class="my-5 text-center">

            <h3 class="display-5 text-primary ">Algumas Funcionalidades Do Sistemas </h3>
          </div>
          <div class="row justify-content-center">
            <div class="col-9" id="sistema" data-children=".pergunta">
              <div class="pergunta py-1">
                <a class="lead" data-toggle="collapse" data-parent="sistema" href="#sist1" aria-expanded="true" aria-controls="sist1">-> Controle de Sessões e Niveis de Acesso </a>
                <div id="sist1" class="collapse show " role="tabpanel">

                  <p>
                    <br> Níveis de Acesso são divididos em três.

                  <ul>

                    <li>Administrador</li>
                    <li>Apoiador</li>
                    <li>Visitante</li>
                  </ul>
                  </p>


                </div>
              </div>
              <div class="dropdown-divider"></div>
              <div class="pergunta py-2">
                <a class="lead" data-toggle="collapse" data-parent="sistema" href="#sist2" aria-expanded="true" aria-controls="sist2">-> Administrador </a>
                <div id="sist2" class="collapse" role="tabpanel">
                  <p>
                  
                    Niveis de Acesso:
                    Vai ter acesso e permissão para adicionar, editar e deletar usuários e notícias.
                  </p>
                </div>
              </div>
              <div class="dropdown-divider"></div>
              <div class="pergunta py-2">
                <a class="lead" data-toggle="collapse" data-parent="sistema" href="#sist3" aria-expanded="true" aria-controls="sist3">-> Apoiador</a>
                <div id="sist3" class="collapse" role="tabpanel">
                  <p>
                    Niveis de Acesso:
                    Vai ter acesso e permissão para adicionar, editar e deletar notícias
                  </p>
                </div>
              </div>
              <div class="dropdown-divider"></div>
              <div class="pergunta py-2">
                <a class="lead" data-toggle="collapse" data-parent="sistema" href="#sist4" aria-expanded="true" aria-controls="sist4">-> Visitantes </a>
                <div id="sist4" class="collapse" role="tabpanel">
                  <p>
                      Niveis de Acesso:
                    Só Vai ter acesso para ler as notícias e pagina sobre
                  </p>
                </div>
              </div>
              <div class="dropdown-divider"></div>
            </div>
          </div>
        </section>



      </span>

      <h2 class="display-4 text-primary text-muted py-3 ">Administrador e Apoiadores</h2>
    </div>
    <div class="row  justify-content-center">

      <?php for ($i = 0; $i < count($this->dados2); $i++) {
      ?>
        <div class="col-lg-3 col-md-3 shadow p-3 ml-3 mb-3 bg-white rounded box-shadow text-dark">
          <div style="height: 100px" class="d-flex justify-content-center ">
            <img src="/PI_RegiaoNews-main/RGnews/Media/<? echo $this->dados2[$i]['foto']; ?>" class="rounded-circle" style=" width:100px; height:100px">
          </div>
          <h3> <? echo $this->dados2[$i]['nomeCompleto']; ?></h3>
          <p>
            <? echo $this->dados2[$i]['resumoBio']; ?>
          </p>
        </div>

      <?php
      }
      ?>


      <footer blockquote-footer>

      </footer>
      </blockquote>
</section>