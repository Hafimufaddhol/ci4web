<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
 class Mahasiswa extends BaseController{
    public function show(){
        $model = new MahasiswaModel();
        $data = [
            'title' =>'mahasiswa',
            'content'=>'v_mahasiswa',
            'getData'=> $model->getAllData()
        ];
        return view('template',$data);
    }
    public function submit(){
        $data = array(
            'nim'=>$this->request->getPost('nim'),
            'nama_mhs'=>$this->request->getPost(('nama_mhs'))
        );
        $model = new MahasiswaModel();
        $result = $model->insertData($data);
        if($result){
            return redirect()->to('mahasiswa/show');
        }else{
            echo "data gagal disimpan";
        }
    }
    public function edit($id){
        helper('form');
        $model = new MahasiswaModel();
        $data = [
            'title' =>'mahasiswa',
            'content'=>'v_mahasiswa',
            'getData'=> $model->getDataById($id)
        ];
        return view('template',$data);
    }
 }