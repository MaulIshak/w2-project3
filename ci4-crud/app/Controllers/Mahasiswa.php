<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ModelMahasiswa;

class Mahasiswa extends BaseController
{
    public function index(): string
    {
      $model = new ModelMahasiswa();
      
      $data['mahasiswa'] = $model->getMahasiswa();

      return view('mahasiswa/index', $data);
    }

    public function create()
    {
      return view('mahasiswa/create');
    }
    
    public function store(){
      $model = new ModelMahasiswa();
      $data = [
        'nim' => $this->request->getPost('nim'),
        'nama_lengkap' => $this->request->getPost('nama_lengkap'),
        'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
      ];

      // Check if nim already exists
      $existingMahasiswa = $model->getMahasiswa($data['nim']);
      if ($existingMahasiswa) {
          session()->setFlashdata('error', 'NIM sudah terdaftar. Silakan gunakan NIM lain.');
          return redirect()->to('/mahasiswa');
      }

      $model->insertMahasiswa($data);
      session()->setFlashdata('success', 'Data berhasil ditambahkan!');
      return redirect()->to('/mahasiswa');
    }

    public function detail($nim): string{
      $model = new ModelMahasiswa();
      $data['mahasiswa'] = $model->getMahasiswa($nim);

      return view('mahasiswa/detail', $data);
    }

    public function edit($nim){
      $model = new ModelMahasiswa();
      $data['mahasiswa'] = $model->getMahasiswa($nim);

      return view('mahasiswa/edit', $data);
    }

    public function update($nim){
      $model = new ModelMahasiswa();
      $data = [
        'nim' => $this->request->getPost('nim'),
        'nama_lengkap' => $this->request->getPost('nama_lengkap'),
        'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
      ];

      $model->updateMahasiswa($nim, $data);

      return redirect()->to('mahasiswa/');
    }

    public function delete($nim){
      $model = new ModelMahasiswa();

      $model->deleteMahasiswa($nim);

      return redirect()->to('mahasiswa/');
    }

    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $model = new ModelMahasiswa();
        $data['mahasiswa'] = $model->searchMahasiswa($keyword);
        return view('mahasiswa/index', $data);
    }

}
