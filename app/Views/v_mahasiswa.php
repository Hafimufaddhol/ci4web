<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nim</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;foreach($getData as $row){?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row->nim?></td>
                    <td><?php echo $row->nama_mhs?></td>
                    <td><?php echo $row->jenis_kelamin?></td>
                    <td><?php echo date('d/m/y',strtotime($row->tanggal_lahir))?></td>
                    <td>
                        <a href="<?php echo site_url('mahasiswa/edit/.'.$row->nim)?>">ubah</a>
                        <a href="<?php echo site_url('mahasiswa/delete/.'.$row->nim)?>">hapus</a>
                    </td>
                </tr>
                <?php $i++; }?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>