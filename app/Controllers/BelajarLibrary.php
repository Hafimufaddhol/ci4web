<?php

namespace App\Controllers;
use App\Libraries\CustomLib;

class BelajarLibrary extends BaseController{

    public function index(){
        return view('v_belajarLibrary');
    }
    public function login(){
        $session = session();
        $newData=[
            'username'=>'johndoe',
            'email'=>'johndoe@gmail.com',
            'logged_in'=>true
        ];
        $session->set($newData);
        return redirect()->to('/belajarlibrary');
    }
    public function logout(){
        $session =session();
        $session->destroy();
        return redirect()->to('/belajarlibrary');
    }
    public function cobaLib(){
        $obj=new CustomLib();
        echo $obj->nama_saya();
        echo "<br/>";
        echo $obj->nama_kamu("jane");

    }
}