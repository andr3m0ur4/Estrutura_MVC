<?php

    class Core
    {
        public function run()
        {
            $url = '/';
            $url .= $_GET['url'] ?? '';
            $params = [];

            if (!empty($url) && $url != '/') {
                $url = explode('/', $url);
                array_shift($url);
                
                $currentController = $url[0] . 'Controller';
                array_shift($url);

                if (isset($url[0]) && !empty($url[0])) {
                    $currentAction = explode('-', $url[0]);

                    if (count($currentAction) > 1) {
                        $currentAction = $currentAction[0] . ucfirst($currentAction[1]);
                    } else {
                        $currentAction = $currentAction[0];
                    }
                    
                    array_shift($url);
                } else {
                    $currentAction = 'index';
                }

                if (count($url) > 0) {
                    $params = $url;
                }
            } else {
                $currentController = 'homeController';
                $currentAction = 'index';
            }
            
            if (
                !file_exists("controllers/{$currentController}.php") || 
                !method_exists($currentController, $currentAction))
            {
                $currentController = 'notFoundController';
                $currentAction = 'index';
            }

            $controller = new $currentController();

            call_user_func_array([$controller, $currentAction], $params);

        }
    }
