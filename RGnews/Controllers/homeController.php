<?php
class homeController extends Controller
{
    public function index()
    {
        //1) chamar um model
        //2) chamar uma Viwes
        //3) fazer  a junção de back end  com front end

        $n = new ServicoNoticia();
        $dados = $n->listar();

        $this->carregarTemplate('home',array(), $dados);
    }
     public function login(){


        $this->carregarTemplate('login');

     }

     public function sair(){


        $this->carregarTemplate('sair');

     }

       public function sobre(){
         

         $n = new ServicoAdminApoiado();
        $dados = $n->listar();
       

           $this->carregarTemplate('sobre',array(),$dados);

     }
}
