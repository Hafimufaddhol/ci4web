<?php
namespace App\Controllers;
use App\Models\TableModel;

class Table extends BaseController {
    public function index() {
        $tableModel = new TableModel();
        $data = $tableModel->getSource();
        
        // Tampilkan data pengguna di view
        return view('Table',['data' => $data]);
    }
}
