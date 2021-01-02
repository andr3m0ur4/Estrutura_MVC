<?php

    class galeriaController extends Controller
    {
        public function index()
        {
            $dados = [
                'qt' => 129
            ];

            $this->loadTemplate('galeria', $dados);
        }
    }
