<?php

namespace Core;

class App
{

    /**
     * This stores the only instance of this class.
     *
     * @var boolean|object
     */
    private static bool|object $instance = false;
    protected Database|null $db = null;
    protected Router|null $router  = null;





    public static function getInstance(): App {
        // If we have no instance, create one.
        if (!self::$instance) {
            self::$instance = new static();
        }

        // Late Static Binding,
        // Allows Pattern to be Re-used
        return self::$instance;
    }

    public function setRoutes(array $routes = [],string $basepath){
       if($this->router == null){
            $this->router = new Router();
       }
       
       $this->router->routes($routes,$basepath);
    }

    public function run(){
        $this->router->run();
    }

    public function setDatabase($dbConfig): void
    {
        $this->db = new Database($dbConfig);
    }
    public function getDatabase() : Database {
        try {
            if($this->db == null){
                throw new \Exception("Database not initialized");
            }
            return self::$instance->db;


        }catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    public  int $count = 0;
    public function counter():int
    {
        $this->count++;
        return $this->count;
    }
    /**
     * Don't allow the "new Class" construct
     */
    protected function __construct() {}


}