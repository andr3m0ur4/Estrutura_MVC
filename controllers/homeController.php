<?php

    class homeController extends Controller
    {
        public function __construct()
        {
            parent::__construct();
        }
        
        public function index()
        {
            $data = [];

            $usuarios = new Usuario();
            $data['usuarios'] = $usuarios->getAll();

            $this->loadTemplate('home', $data);
        }
    }
