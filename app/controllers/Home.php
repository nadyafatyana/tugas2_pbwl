<?php

namespace App\Controllers;

use App\Core\Controller;

class Home extends Controller
{
      public function __construct()
      {
            $this->model = new \App\Models\Home();
      }
	public function index()
	{
		$this->home('home/index');
	}
	public function daftar()
	{
		$this->home('home/daftar');
	}
public function login(){

    if(isset($_POST['login'])){
        $user_nama = $_POST['user_nama'];
        $user_password = $_POST['user_password'];
        
        $result = $this->model->proses_login($user_nama,$user_password);
        if($result)
        {
        	$this->dashboard('dashboard/index');
            
        }else{
        $this->home('home/index');
        }
    }
}
public function daftar_proses(){
    if(isset($_POST['daftar'])){
        $user_nama = $_POST['user_nama'];
        $user_password = $_POST['user_password'];
        $user_email = $_POST['user_email'];
        $user_alamat = $_POST['user_alamat'];
        $user_hp = $_POST['user_hp'];
        $user_pos = $_POST['user_pos'];

        $result = $this->model->proses_daftar($user_nama,$user_password,$user_email,$user_alamat,$user_hp,$user_pos);
        if($result)
        {

            $this->home('home/index');
            
        }else{
            $this->home('home/daftar');

        }            
}      
      }

}
