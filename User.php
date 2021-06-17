<?php
class User
{
    protected string $name;
    protected string $email;
    public int $role;

    public function __construct(string $name,string $email, int $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getInfo() : string
    {
        return $this->name.':'.$this->email;
    }
    public function isAdmin($role)
    {
        $this->role = $role;
        if($role == 1)
        {
            echo "admin";
        } else if ($role == 2)
        {
            echo "user";
        }
    }
}
