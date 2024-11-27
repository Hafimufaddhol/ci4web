<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php echo form_open('mahasiswa/submit')?>
    <div class="mb-3">
      <label for="nim" class="form-label">nim</label>
      <input type="text" class="form-control" name="nim" id="nim">
      <?php form_input()?>
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">nama</label>
      <input type="text" name="nama" id="nama" class="form-control">
      <?php form_input()?>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-primary">SIMPAN</button>
    </div>
    <?php echo form_close()?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>