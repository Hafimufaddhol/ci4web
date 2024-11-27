<?php 
namespace App\Models;
use CodeIgniter\Model;

 class MahasiswaModel extends Model{
    public function getAllData(){
        $db = \Config\Database::connect();
        $builder = $db->table('mahasiswa');
        return $builder->get()->getResult();
    }
    public function insertData($data){
        $db = \Config\Database::connect();
        $builder = $db->table('mahasiswa');
        return $builder->insert($data);
    }
 }