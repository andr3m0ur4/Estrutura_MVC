<?php

    class homeController extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }
        
        public function index()
        {
            $anuncios = new Anuncio;
            $usuarios = new Usuario;

            $dados = [
                'quantidade' => $anuncios->getQuantidade(),
                'nome' => $usuarios->getName()
            ];

            $this->loadTemplate('home', $dados);
        }
    }
