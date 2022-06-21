<?php

namespace App\Models;

use App\Core\Model;

class Pelanggan extends Model
{

      public function all()
      {
            $sql = "SELECT * FROM tb_pelanggan";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            $data = [];
            while ($rows = $stmt->fetch()) {
                  $data[] = $rows;
            }

            return $data;
      }
      public function proses_tambah($pel_nama,$pel_id_gol,$pel_alamat,$pel_hp,$pel_ktp,$pel_seri,$pel_meteran,$pel_id_user){


        //SQL
        $sql = "INSERT INTO tb_pelanggan (pel_nama,pel_id_gol,pel_alamat,pel_hp,pel_ktp,pel_seri,pel_meteran,pel_aktif,pel_id_user) VALUES
        (:pel_nama,:pel_id_gol,:pel_alamat,:pel_hp,:pel_ktp,:pel_seri,:pel_meteran,'Y',:pel_id_user)";
        //bindParam
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pel_nama", $pel_nama);
        $stmt->bindParam(":pel_id_gol", $pel_id_gol);
        $stmt->bindParam(":pel_alamat", $pel_alamat);
        $stmt->bindParam(":pel_hp", $pel_hp);
        $stmt->bindParam(":pel_ktp", $pel_ktp);
        $stmt->bindParam(":pel_seri", $pel_seri);
        $stmt->bindParam(":pel_meteran", $pel_meteran);
        $stmt->bindParam(":pel_id_user", $pel_id_user);        

        $stmt->execute();
        return $stmt;
      }

      public function proses_edit($pel_nama,$pel_id,$pel_id_gol,$pel_alamat,$pel_hp,$pel_ktp,$pel_seri,$pel_meteran){


        //SQL
        $sql = "UPDATE tb_pelanggan SET pel_nama =:pel_nama,pel_id_gol=:pel_id_gol,pel_alamat=:pel_alamat,pel_hp=:pel_hp,pel_ktp=:pel_ktp,pel_seri=:pel_seri,pel_meteran=:pel_meteran WHERE pel_id=:pel_id" ;

        //bindParam
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pel_id", $pel_id);
        $stmt->bindParam(":pel_nama", $pel_nama);
        $stmt->bindParam(":pel_id_gol", $pel_id_gol);
        $stmt->bindParam(":pel_alamat", $pel_alamat);
        $stmt->bindParam(":pel_hp", $pel_hp);
        $stmt->bindParam(":pel_ktp", $pel_ktp);
        $stmt->bindParam(":pel_seri", $pel_seri);
        $stmt->bindParam(":pel_meteran", $pel_meteran);

        $stmt->execute();
        return $stmt;
      }


      public function data($pel_id)
      {
            $sql = "SELECT * FROM tb_pelanggan WHERE pel_id=:pel_id";
            $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pel_id", $pel_id);            
            $stmt->execute();
            $rows = $stmt->fetch();

            return $rows;
      }      
      public function hapus($pel_id){


        //SQL
        //bindParam
        $sql = "DELETE FROM tb_pelanggan WHERE pel_id=:pel_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pel_id", $pel_id);
        $stmt->execute();
        return $stmt;
      }
}
