<?PHP

namespace App\Controllers;
use App\Models\BelajarModel;

class Belajar extends BaseController{
    public function index(){
        echo "Hello, saya sedang belajar CodeIgniter";
    }
    public function kali($a,$b) {
        $hasil=$a*$b;
        return "Hasil Kali : ".$hasil;
    }
    public function bagi($a,$b) {
        $hasil=$a/$b;
        return "Hasil bagi : ".$hasil;
    }
    public function pesan(){
        $data=[
            'title'=>'Belajar CodeIgniter',
            'pesan'=>'Saya Sedang Belajar View Pada CodeIgniter'
        ];
        return view('v_belajar_pesan',$data);
    }
    public function calculator(){
        $a=5;
        $b=9;
        $model= new BelajarModel();
        $hasil=$model->hasilKali($a,$b);
        echo "--Perkalian--";
        echo "<br/>";
        echo "hasil perkalian $a x $b =".$hasil;
    }
}