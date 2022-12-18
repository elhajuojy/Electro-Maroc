<?php
namespace  Core;
use Core\App;


abstract class  Model {


    private Database  $db ;

    protected string $table ;
    protected string $classname ;

    public function __construct($table)
    {
        
        $this->table =$table;
        $this->table =  trim($this->table,"Model\\");
        $this->db = App::getInstance()->getDatabase();
        $this->classname = $table;
    }

    public function findAll(){

        return $this->db->query("SELECT * FROM ".$this->table)->find($this->classname);
    }

    public function findById(int $id){
             return $this->db->query("SELECT * FROM ".$this->table." WHERE id = :id",['id'=>$id])->findOne($this->classname);
    }

    public function removeById(int $id): Database
    {
        return $this->db->query("DELETE FROM ".$this->table." WHERE id = :id",['id'=>$id]);
    }


    public function insert(array $data): Database
    {
        $sql = "INSERT INTO ".$this->table." (";
        $i = 0;
        foreach ($data as $key => $value) {
            $sql .= $key;
            if($i < count($data)-1){
                $sql .= ",";
            }
            $i++;
        }
        $sql .= ") VALUES (";
        $i = 0;
        foreach ($data as $key => $value) {
            $sql .= ":".$key;
            if($i < count($data)-1){
                $sql .= ",";
            }
            $i++;
        }
        $sql .= ")";
        
        $params = [];
        foreach ($data as $key => $value) {
            $params[":".$key] = $value; 
        }
        return $this->db->query($sql,$params);
    }
    public function update(int $id, array $data): Database
    {

        $sql = "UPDATE ".$this->table." SET ";
        $i = 0;
        foreach ($data as $key => $value) {
            $sql .= $key." = :".$key.",";  
        }
        $sql = trim($sql,",");
        $params = [];
        $sql .= " WHERE id = :id";
        $params[':id'] = $id;
        foreach ($data as $key => $value) {
            $params[":".$key] = $value; 
        }
        return $this->db->query($sql,$params);
    }

    public function findByUsername(string $username){
        return $this->db->query("SELECT * FROM ".$this->table." WHERE username = :username",['username'=>$username])->findOne($this->classname);
    }

    public function toJson(): false|string
    {
        return json_encode($this);
    }

}