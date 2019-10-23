<?php
namespace App\Controllers;
use App\Models\Database;
use App\Controllers\View;

class UserController{
    public function index()
    {
        new View('index');

        //$View->index('index');
        /*$user = new User;
        $user->all();
        echo "Ini adalah output dari class UserController method index \n";*/
    }
}