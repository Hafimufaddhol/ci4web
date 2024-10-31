<?php
    $nama = [
        'name' => 'nama',
        'placeholder' => 'masukan nama anda'
    ];
    $opsi = [
        'sma' => 'Sekolah Menengah Atas',
        's1' => 'Strata 1'
    ];

    echo form_open();
    echo 'Nama: ';
    echo form_input($nama);
    echo '<br/>';
    echo 'Pendidikan:   ';
    echo form_dropdown('pendidikan', $opsi, 'sma');
    echo form_close();
?>