<?php

namespace App\Models;

use App\Core\Model;

class Golongan extends Model
{

      public function all()
      {
            $sql = "SELECT * FROM tb_golongan";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $data = [];
            while ($rows = $stmt->fetch()) {
                  $data[] = $rows;
            }

            return $data;
      }
      public function proses_tambah($gol_kode,$gol_nama){


        //SQL
        $sql = "INSERT INTO tb_golongan (gol_kode, gol_nama) VALUES
        (:gol_kode, :gol_nama)";
        //bindParam
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":gol_kode", $gol_kode);
        $stmt->bindParam(":gol_nama", $gol_nama);
        $stmt->execute();
        return $stmt;
      }
      public function proses_edit($gol_kode,$gol_nama,$gol_id){


        //SQL
        $sql = "UPDATE tb_golongan SET gol_kode =:gol_kode,gol_nama=:gol_nama WHERE gol_id=:gol_id" ;

        //bindParam
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":gol_id", $gol_id);
        $stmt->bindParam(":gol_kode", $gol_kode);
        $stmt->bindParam(":gol_nama", $gol_nama);

        $stmt->execute();
        return $stmt;
      }


      public function data($gol_id)
      {
            $sql = "SELECT * FROM tb_golongan WHERE gol_id=:gol_id";
            $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":gol_id", $gol_id);            
            $stmt->execute();
            $rows = $stmt->fetch();

            return $rows;
      }      


      public function hapus($gol_id){


        //SQL
        $sql = "DELETE FROM tb_golongan WHERE gol_id=:gol_id";
        //bindParam
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":gol_id", $gol_id);
        $stmt->execute();
        return $stmt;
      }
}
