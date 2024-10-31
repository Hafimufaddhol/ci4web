<?PHP

namespace App\Controllers;

use App\Controllers\BaseController;

class BelajarHelper extends BaseController{
    public function index()
    {
        helper('form');
        return view('v_belajarhelper');
    }

    public function helper(){
        helper('belajar');
        helper('number');
        $amount = number_to_currency(10000000,'IDR','id_ID',2);
        echo belajar($amount);
    }
    public function KonversiTanggal(){
        helper('tanggal');
        $date=date('Y-m-d');
        echo tanggal($date);
    }
}