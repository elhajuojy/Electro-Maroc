<?php
namespace  Model;
use Core\Model;

class  Client extends  User {

    public  string $fullname ;
    public  int $phone;
    public  string $address;
    public  string $city;
    public function __construct()
    {

        parent::__construct(get_class($this));

    }

    public function add(string $username,string $email,$password,string $fullname, int $phone, string $address, string $city){
        $this->username = $username;
        $this->email = $email;
        $this->password =hashPassword( $password);
        $this->fullname = $fullname;
        $this->phone = $phone;
        $this->address = $address;
        $this->city = $city;
        $this->insert($this->toArray());
    }
    public function toArray(): array
    {
        return [
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'fullname' => $this->fullname,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
        ];
    }


    
}