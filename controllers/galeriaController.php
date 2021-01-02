<?php

    class galeriaController
    {
        public function index()
        {
            echo "Listando todas as galerias...";
        }

        public function abrir($id)
        {
            echo "Abrindo galeria: {$id}";
        }
    }