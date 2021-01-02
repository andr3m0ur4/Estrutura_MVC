<?php

    class homeController extends Controller
    {
        public function index()
        {
            $dados = [
                'quantidade' => 5,
                'nome' => 'André Moura'
            ];

            $this->loadTemplate('home', $dados);
        }
    }
