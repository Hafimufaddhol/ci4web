<?PHP

namespace App\Controllers;

class Blog extends BaseController{
    public function index(){
        echo 'hello world';
        return view('BlogView');
    }
}