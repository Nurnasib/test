<?php


namespace App\classes;


class User
{
    public function getAllUser()
    {
        return[
            0 => [
                'id' => 1,
                'name' => 'SREEJON',
                'email' => 'sree@gmail.com',
                'password' => '12345'
            ],
            1 => [
                'id' => 2,
                'name' => 'Fardin',
                'email' => 'fardin320@gmail.com',
                'password' => '12346'
            ],
        ];
    }
}