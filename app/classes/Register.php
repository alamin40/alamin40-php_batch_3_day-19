<?php
namespace App\classes;
class Register
{
    protected $name;
    protected $email;
    protected $mobile;

    public function __construct($post = null)
    {
        $this->name = $post['full_name'];
        $this->email = $post['email'];
        $this->mobile = $post['mobile'];
    }


    public function add(){
//        session_start();
        $_SESSION['name'] = $this->name;
        $_SESSION['email'] = $this->email;
        $_SESSION['mobile'] = $this->mobile;

        return 'Data store succesfully';
    }

    public function allData(){

    }



}