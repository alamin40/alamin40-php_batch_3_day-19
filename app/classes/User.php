<?php
namespace App\classes;
class User
{
    public function getAllUser(){
        return [
            0 => [
                'id'          => 1,
                'name'        => 'Shahabuddin Khan',
                'email'       =>  'admin@gmail.com',
                'password'    =>  '123456',
            ],
            1 => [
                'id'          => 2,
                'name'        => 'Rafa',
                'email'       =>  'rafa@gmail.com',
                'password'    =>  '012345',
            ],

        ];
    }
}