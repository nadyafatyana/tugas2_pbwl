<?php

namespace App\Controllers;

use App\Core\Controller;

class Golongan extends Controller
{

      public function __construct()
      {
            $this->model = new \App\Models\Golongan();
      }

      public function index()
      {

            $data['rows'] = $this->model->all();
            $this->dashboard('golongan/index',$data);
      }
      

      public function tambah()
      {
       $this->dashboard('golongan/tambah');     
    
      }
public function tambah_proses()
{
if(isset($_POST['tambah'])){
        $gol_kode = $_POST['gol_kode'];
        $gol_nama = $_POST['gol_nama'];

        $result = $this->model->proses_tambah($gol_kode,$gol_nama);
        if($result)
        {
            $data['rows'] = $this->model->all();
            $this->dashboard('golongan/index',$data);          
            $this->dashboard('golongan/index');
            
        }else{

            $this->dashboard('golongan/tambah');

        }            
}
}      

      public function edit($gol_id)
      {
               if (isset($_GET['gol_id'])) {
       // Inisialisasi
       $gol_id = $_GET['gol_id'];
            $data = $this->model->data($gol_id);
            $this->dashboard('golongan/edit', $data);

      }
}

      public function edit_proses()
      {
    if(isset($_POST['edit'])){
      $gol_id = $_POST['gol_id'];
        $gol_kode = $_POST['gol_kode'];
        $gol_nama = $_POST['gol_nama'];


        $result = $this->model->proses_edit($gol_kode,$gol_nama,$gol_id);
        if($result)
        {
            $data['rows'] = $this->model->all();
            $this->dashboard('golongan/index',$data);
            
        }else{
          $data['rows'] = $this->model->all();
            $this->dashboard('golongan/index',$data);

        }            
}      
      }


      public function update($id)
      {
      }

      public function detail($id)
      {
      }

      public function delete($gol_id)
      {
               if (isset($_GET['gol_id'])) {
       // Inisialisasi
       $gol_id = $_GET['gol_id'];

        if($this->model->hapus($gol_id)){

            $data['rows'] = $this->model->all();
            $this->dashboard('golongan/index', $data);

            }else{
                die('something went wrong');
            }
      }
}
}
