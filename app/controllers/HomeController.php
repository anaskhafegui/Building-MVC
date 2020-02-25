<?php

class HomeController extends Controller
{
    public function index($name='',$id='')
    {
        echo $name . ' ' . $id;
    }

}