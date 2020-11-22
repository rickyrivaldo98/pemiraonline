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
    <script src="https://cdn.tiny.cloud/1/l5ya0mb0dsp3tg59gn44unx60vt7q0dwfe5bq0t7u66ojw6d/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>Tambah Calon Ketua Bem</title>
</head>

<body>
    <?php $this->load->view('template/navbar') ?>

    <div class="container ">
        <br>
        <br>
        <br>
        <button type="button" class="btn btn-danger btn-lg" onclick="history.go(-1);">Kembali</button>
        <h1 class="text-center mt-4 mt-md-0">SUBMIT CALON KETUA BEM FSM</h1>
        <br><br>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nim">NIM Ketua BEM</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
                <button class="btn btn-success btn-sm" type="button" onclick="autofill_ketua()"><i class="fas fa-search"></i>&nbsp;CEK</button>
                <?php if (form_error('nim')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= form_error('nim'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group" id="nama_group" style="display: none;">
                <label for="nama">Nama Calon Ketua BEM</label>
                <input type="text" class="form-control" id="nama" name="nama" readonly>
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <div class="form-group" id="departemen_group" style="display: none;">
                <label for="departemen">Departemen Ketua BEM</label>
                <input type="text" class="form-control" id="departemen" name="departemen" readonly>
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <br><br>

            <div class="form-group">
                <label for="nim">NIM Wakil Ketua BEM</label> 
                <input type="text" class="form-control" id="nim2" name="nim2" placeholder="Masukkan NIM">
                <button class="btn btn-success btn-sm" type="button" onclick="autofill_wakil()"><i class="fas fa-search"></i>&nbsp;CEK</button>
                <?php if (form_error('nim2')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= form_error('nim2'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group" id="nama_group2" style="display: none;">
                <label for="nama2">Nama Calon Wakil Ketua BEM</label>
                <input type="text" class="form-control" id="nama2" name="nama2" readonly>
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <div class="form-group" id="departemen_group2" style="display: none;">
                <label for="departemen2">Departemen Wakil Ketua BEM</label>
                <input type="text" class="form-control" id="departemen2" name="departemen2" readonly>
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <br>
            <br>
            <!-- <div class="form-group">
                <label for="fakultas">Fakultas</label>
                <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Masukkan Departemen Calon Pemilih">
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <br><br> -->
            <div class="form-group">
                <label for="gambar">Foto Kedua Calon</label>
                <input type="file" class="form-control-file" id="foto" name="foto">
                <small class="form-text text-muted">File foto yang diupload harus sesuai dengan fomat JPG / JPEG / PNG max 2mb</small>
            </div>

            <div class="form-group">
                <label for="visimisi">Visi dan Misi</label>
                <textarea id="visimisi" name="visimisi"></textarea>
            </div>

            <br><br>
            <div class="text-center ayo-pilih">
                <button type="submit" id="submit" class="btn btn-primary btn-lg" disabled>Submit</button>
            </div>
        </form>
        <br>
        <br>
        <br>
    </div>

    <?php $this->load->view('template/footer') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <?php if ($this->session->flashdata('gagal_upload_foto')) : ?>
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Tambah Calon Gagal..',
                text: 'Foto tidak sesuai format atau ukuran melebihi 2 mb !',
            });
        </script>
    <?php endif; ?>


    <?php if ($this->session->flashdata('no_foto')) : ?>
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Tambah Calon Gagal...',
                text: 'Silahkan masukan foto calon terlebih dahulu!',
            });
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('submit_gagal')) : ?>
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Tambah Calon Gagal...',
                text: 'Salah satu NIM sudah digunakan sebagai calon Ketua dan Wakil Ketua BEM FSM!',
            });
        </script>
    <?php endif; ?>

     <!-- Script auto fill ketua -->
        
     <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            menubar: false,
            plugins: "link code lists",
            toolbar: "undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | numlist bullist | outdent indent | link | code",

            toolbar_mode: 'floating',
        });
        function autofill_ketua(){
            var nim =document.getElementById('nim').value;
            var nim2 = document.getElementById('nim2').value;
            if (nim == '' && nim2 == ''){
                Swal.fire({
                    icon: 'info',
                    title: 'Perhatian',
                    text: 'Harap Masukan NIM !'
                });
            }else if (nim == ''){
                Swal.fire({
                    icon: 'info',
                    title: 'Perhatian',
                    text: 'Harap Masukan NIM !'
                });
            }else if (nim == nim2){
                Swal.fire({
                    icon: 'info',
                    title: 'Perhatian',
                    text: 'NIm ketua dan wakil ketua tidak boleh sama !'
                });
            }else {
                $.ajax({
                    url:"<?php echo base_url();?>Page/get_data_nim",
                    method : "POST",
                    data: {nim: nim},
                    dataType : 'json',
                    success:function(data){
                    if (data != false){ // nim ditemukan
                            $.each(data, function(key,val){
                                document.getElementById('nama').value=val.nama;
                                document.getElementById('departemen').value=val.departemen;
                                document.getElementById('nama_group').style.display='block';
                                document.getElementById('departemen_group').style.display='block';
                                document.getElementById('submit').disabled=false;   
                            });
                        }else{// data tidak ada isinya / nim tidak ditemukan
                            //console.log('Tidak ditemukan');
                            document.getElementById('nama').value='';
                            document.getElementById('departemen').value='';
                            document.getElementById('nama_group').style.display='none';
                            document.getElementById('departemen_group').style.display='none';
                            document.getElementById('submit').disabled=true;
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Maaf NIM tidak terdaftar sebagai Mahasiswa Aktif 2020',
                                footer: '<a href="#">Hubungi Operator</a>'
                            });
                        }
                        
                    }
                }); 
            }             
        }

    </script>
    <!-- END Script auto fill ketua -->

    <!-- Script auto fill wakil -->
        
    <script type="text/javascript">
        function autofill_wakil(){
            var nim =document.getElementById('nim').value;
            var nim2 = document.getElementById('nim2').value;
            if (nim == '' && nim2 == ''){
                Swal.fire({
                    icon: 'info',
                    title: 'Perhatian',
                    text: 'Harap Masukan NIM !'
                });
            }else if (nim2 == ''){
                Swal.fire({
                    icon: 'info',
                    title: 'Perhatian',
                    text: 'Harap Masukan NIM !'
                });
            }else if (nim == nim2){
                Swal.fire({
                    icon: 'info',
                    title: 'Perhatian',
                    text: 'NIm ketua dan wakil ketua tidak boleh sama !'
                });
            }else {
                $.ajax({
                    url:"<?php echo base_url();?>Page/get_data_nim",
                    method : "POST",
                    data: {nim: nim2},
                    dataType : 'json',
                    success:function(data){
                    if (data != false){ // nim ditemukan
                            $.each(data, function(key,val){
                                document.getElementById('nama2').value=val.nama;
                                document.getElementById('departemen2').value=val.departemen;
                                document.getElementById('nama_group2').style.display='block';
                                document.getElementById('departemen_group2').style.display='block';
                                document.getElementById('submit').disabled=false;   
                            });
                        }else{// data tidak ada isinya / nim tidak ditemukan
                            //console.log('Tidak ditemukan');
                            document.getElementById('nama2').value='';
                            document.getElementById('departemen2').value='';
                            document.getElementById('nama_group2').style.display='none';
                            document.getElementById('departemen_group2').style.display='none';
                            document.getElementById('submit').disabled=true;
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Maaf NIM tidak terdaftar sebagai Mahasiswa Aktif 2020',
                                footer: '<a href="#">Hubungi Operator</a>'
                            });
                        }
                        
                    }
                }); 
            }             
        }

    </script>
    <!-- END Script auto fill wakil -->
</body>

</html>