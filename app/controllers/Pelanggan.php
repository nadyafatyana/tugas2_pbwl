<?php

namespace App\Controllers;

use App\Core\Controller;

class Pelanggan extends Controller
{

      public function __construct()
      {
            $this->model = new \App\Models\Pelanggan();
      }

      public function index()
      {

            $data['rows'] = $this->model->all();
            $this->dashboard('pelanggan/index', $data);
      }
            public function tambah()
      {

            $this->dashboard('pelanggan/tambah');
      }
      public function tambah_proses()
      {     
    if(isset($_POST['tambah'])){
        $pel_nama = $_POST['pel_nama'];
        $pel_id_gol = $_POST['pel_id_gol'];
        $pel_alamat = $_POST['pel_alamat'];
        $pel_hp = $_POST['pel_hp'];
        $pel_ktp = $_POST['pel_ktp'];
        $pel_seri = $_POST['pel_seri'];
        $pel_meteran = $_POST['pel_meteran'];
        $pel_id_user = $_POST['pel_id_user'];


        $result = $this->model->proses_tambah($pel_nama,$pel_id_gol,$pel_alamat,$pel_hp,$pel_ktp,$pel_seri,$pel_meteran,$pel_id_user);
        if($result)
        {
            $data['rows'] = $this->model->all();
            $this->dashboard('pelanggan/index', $data);
            
        }else{

            $this->dashboard('pelanggan/tambah');

        }            
}      
      }

      public function edit($pel_id)
      {
               if (isset($_GET['pel_id'])) {
       // Inisialisasi
       $pel_id = $_GET['pel_id'];
            $data = $this->model->data($pel_id);
            $this->dashboard('pelanggan/edit', $data);

      }
}

      public function edit_proses()
      {
    if(isset($_POST['edit'])){
      $pel_id = $_POST['pel_id'];
        $pel_nama = $_POST['pel_nama'];
        $pel_id_gol = $_POST['pel_id_gol'];
        $pel_alamat = $_POST['pel_alamat'];
        $pel_hp = $_POST['pel_hp'];
        $pel_ktp = $_POST['pel_ktp'];
        $pel_seri = $_POST['pel_seri'];
        $pel_meteran = $_POST['pel_meteran'];


        $result = $this->model->proses_edit($pel_nama,$pel_id,$pel_id_gol,$pel_alamat,$pel_hp,$pel_ktp,$pel_seri,$pel_meteran);
        if($result)
        {
            $data['rows'] = $this->model->all();
            $this->dashboard('pelanggan/index',$data);
            
        }else{
        $data['rows'] = $this->model->all();
            $this->dashboard('pelanggan/index',$data);

        }            
}      
      }



      public function delete($pel_id)
      {
               if (isset($_GET['pel_id'])) {
       // Inisialisasi
       $pel_id = $_GET['pel_id'];

        if($this->model->hapus($pel_id)){

            $data['rows'] = $this->model->all();
            $this->dashboard('pelanggan/index', $data);

            }else{
                die('something went wrong');
            }
      }
}
}
