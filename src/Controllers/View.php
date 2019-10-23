<?php
namespace App\Controllers;
class View{
    public function __construct($page){
        $goto='Location: ../resources/view/'.$page;
        header("$goto");
        exit;
    }
}