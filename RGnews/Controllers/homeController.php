<?php
class homeController extends Controller
{
    public function index()
    {
        //1) chamar um model
        //2) chamar uma Viwes
        //3) fazer  a junção de back end  com front end

        $this->carregarTemplate('home');
    }
}
