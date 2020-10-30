<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/fontawesome/css/all.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/aos/aos.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/animate.css/animate.min.css' ?>">

    <title>Pemira Online</title>
</head>

<body>
    <?php $this->load->view('template/navbar') ?>

    <div class="container ">
        <br>
        <br>
        <br>
        <button type="button" class="btn btn-danger btn-lg" onclick="history.go(-1);">Kembali</button>
        <h1 class="text-center mt-4 mt-md-0">SUBMIT CALON KETUA BEM UNDIP</h1>
        <br><br>
        <form>
            <div class="form-group">
                <label for="nama">Nama Calon Ketua BEM</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="nim">NIM Ketua BEM</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <div class="form-group">
                <label for="fakultas">Fakultas Ketua BEM</label>
                <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Masukkan Fakultas">
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <div class="form-group">
                <label for="departemen">Departemen Ketua BEM</label>
                <input type="text" class="form-control" id="departemen" name="departemen" placeholder="Masukkan Departemen Calon Pemilih">
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <br><br>
            <div class="form-group">
                <label for="nama2">Nama Calon Wakil Ketua BEM</label>
                <input type="text" class="form-control" id="nama2" name="nama2" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="nim2">NIM Wakil Ketua BEM</label>
                <input type="text" class="form-control" id="nim2" name="nim2" placeholder="Masukkan NIM">
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <div class="form-group">
                <label for="fakultas2">Fakultas Wakil Ketua BEM</label>
                <input type="text" class="form-control" id="fakultas2" name="fakultas2" placeholder="Masukkan Fakultas">
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <div class="form-group">
                <label for="departemen2">Departemen Wakil Ketua BEM</label>
                <input type="text" class="form-control" id="departemen2" name="departemen2" placeholder="Masukkan Departemen Calon Pemilih">
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <br><br>
            <div class="form-group">
                <label for="gambar">Foto Kedua Calon</label>
                <input type="file" class="form-control-file" id="ktm" name="ktm">
            </div>

            <br><br>
            <div class="text-center ayo-pilih">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
        <br>
        <br>
        <br>
    </div>

    <?php $this->load->view('template/footer') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>