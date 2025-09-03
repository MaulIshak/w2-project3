<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    protected $table = 'biodata';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim','nama_lengkap', 'jenis_kelamin', 'tanggal_lahir'];

    public function getMahasiswa($nim = false){
      if($nim){
        return $this->where(['nim' => $nim])->first(); // kalau ada parameter nim, maka ambil data sesuai nim
      }else{
        return $this->findAll();
      }
    }

    public function searchMahasiswa($keyword){
      return $this->like('nama_lengkap', $keyword)
                  ->orLike('nim', $keyword)
                  ->findAll();
    }

    // Insert data
    public function insertMahasiswa($data){
      return $this->insert($data);
    }

    // Delete data
    public function deleteMahasiswa($nim){
      return $this->delete($nim);
    }

    // Update data
    public function updateMahasiswa($nim, $data){
      return $this->update($nim, $data);
    }


  }