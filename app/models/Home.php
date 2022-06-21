<?php

namespace App\Models;

use App\Core\Model;

class Home extends Model
{

      public function proses_login($user_nama,$user_password)
      {
            $sql = "SELECT * FROM tb_users WHERE user_nama= :user_nama AND user_password= :user_password";

    $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_nama", $user_nama);
        $stmt->bindParam(":user_password", $user_password);
        $stmt->execute();
    
    $row = $stmt->rowCount();

    if($row > 0){
        return $row;
      }
      else{
        return false;
        }

  }

      public function proses_daftar($user_nama,$user_password,$user_email,$user_alamat,$user_hp,$user_pos){


        //SQL
        $sql = "INSERT INTO tb_users (user_nama,user_password,user_email,user_alamat,user_hp,user_pos,user_role,user_aktif) VALUES
        (:user_nama,:user_password,:user_email,:user_alamat,:user_hp,:user_pos,1,1)";
        //bindParam
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":user_nama", $user_nama);
        $stmt->bindParam(":user_password", $user_password);
        $stmt->bindParam(":user_email", $user_email);
        $stmt->bindParam(":user_alamat", $user_alamat);
        $stmt->bindParam(":user_hp", $user_hp);
        $stmt->bindParam(":user_pos", $user_pos);
        $stmt->execute();
        return $stmt;
      }

}
