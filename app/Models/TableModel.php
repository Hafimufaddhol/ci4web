<?php

namespace App\Models;

use CodeIgniter\Model;

class TableModel extends Model
{
    public function getSource() {
        $source = array(
            array(
                'name' => 'paijo',
                'email' => 'paijo@gmail.com',
                'status' => 'Active',
                'regdate' => '2022-09-01'
            ),
            array(
                'name' => 'Inem',
                'email' => 'inem@gmail.com',
                'status' => 'Active',
                'regdate' => '2022-08-01'
            ),
        );
    
        return $source;
    }
}
