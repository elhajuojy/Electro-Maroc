<?php

namespace Core;

class Router{
    private string $uri ;
    private array $routes ;
    public string $basepath ; 
    
    public function routes(array $route,string $basebath){
        $this->routes = $route;
        $this->basepath = $basebath;
    }

    public function run(){
        $uri = parse_url($_SERVER['REQUEST_URI'])['path']; 
        if(array_key_exists($uri, $this->routes)){
            require $this->basepath. $this->routes[$uri];
        }else{
            
            // dd($this->routes);
            $this->abort();
        }
    }
    
    public function abort($code = 404) {
        http_response_code($code);
        require $this->basepath."views/{$code}.php";
        die();
    }
    
}