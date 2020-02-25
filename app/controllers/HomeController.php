<?php

class HomeController extends Controller
{
    public function index($name='')
    {
        $this->view('home/index',['name' => $name]);
    }
    public function create($username='',$email='')
    {
       User::create([
            'name' => $username,
            'email'  => $email,
            'password' => '123456',
        ]);
    }

}