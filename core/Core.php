<?php

    class Core
    {
        public function run()
        {
            $url = '/';
            $url .= $_GET['url'] ?? '';

            if (!empty($url) && $url != '/') {
                $url = explode('/', $url);
                array_shift($url);
                
                $currentController = $url[0] . 'Controller';

                if (isset($url[1]) && !empty($url[1])) {
                    $currentAction = $url[1];
                } else {
                    $currentAction = 'index';
                }
            } else {
                $currentController = 'homeController';
                $currentAction = 'index';
            }
            print_r($url);

            echo '<hr>';
            echo "CONTROLLER: {$currentController} <br>";
            echo "ACTION: {$currentAction}";
        }
    }