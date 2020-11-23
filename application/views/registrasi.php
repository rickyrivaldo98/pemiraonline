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

    <title>Registrasi</title>
</head>

<body>
    <?php $this->load->view('template/navbar') ?>

    <div class="container ">
        <br>
        <br>
        <br>
        <h1 class="text-center">REGISTRASI CALON PEMILIH</h1>

        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nim">Silahkan cek Nomor Induk Mahasiswa</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
                <button class="btn btn-success btn-sm" type="button" onclick="autofill_registrasi()"><i class="fas fa-search"></i>&nbsp;CEK</button>
                <?php if (form_error('nim')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= form_error('nim'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group" id="nama_group" style="display: none;">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" readonly>
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <div class="form-group" id="departemen_group" style="display: none;">
                <label for="departemen">Departemen</label>
                <input type="text" class="form-control" id="departemen" name="departemen" placeholder="Masukkan Departemen Calon Pemilih" readonly>
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <div class="form-group" id="fakultas_group" style="display: none;">
                <label for="fakultas">Fakultas</label>
                <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Masukkan Fakultas Calon Pemilih" readonly>
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
            </div>
            <div class="form-group">
                <label for="password">Masukan Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
                <?php if (form_error('password')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= form_error('password'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="email">Masukan Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email">
                <small id="penjelasan" class="form-text text-muted">Pihak Panitia Tidak Akan Membocorkan Informasi Pengguna</small>
                <?php if (form_error('email')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= form_error('email'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="gambar">Bukti Foto Selfie dengan KTM</label>
                <input id="foto" name="foto" type="file" class="form-control-file" />
                <small class="form-text text-muted">File foto yang diupload harus sesuai dengan fomat JPG / JPEG / PNG max 2mb</small>
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
                title: 'Registrasi Gagal..',
                text: 'Foto tidak sesuai format atau ukuran melebihi 2 mb !',
            });
        </script>
    <?php endif; ?>


    <?php if ($this->session->flashdata('no_foto')) : ?>
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Registrasi Gagal...',
                text: 'Silahkan masukan foto selfie dengan ktm anda terlebih dahulu!',
            });
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('gagal_email_sama')) : ?>
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Registrasi Gagal...',
                text: 'Email sudah terdaftar, silahkan gunakan email yang berbeda!',
            });
        </script>
    <?php endif; ?>

    <!-- Script auto fill ragistrasi -->
        
    <script type="text/javascript">
        function autofill_registrasi(){
            var nim =document.getElementById('nim').value;
            $.ajax({
                url:"<?php echo base_url();?>index.php/Page/get_data_nim",
                method : "POST",
                data: {nim: nim},
                dataType : 'json',
                success:function(data){
                //console.log(data);
                if (data != false){ // nim ditemukan
                        $.each(data, function(key,val){
                            if (val.registrasi == 1){
                                document.getElementById('nama').value='';
                                document.getElementById('departemen').value='';
                                document.getElementById('fakultas').value='';
                                document.getElementById('nama_group').style.display='none';
                                document.getElementById('departemen_group').style.display='none';
                                document.getElementById('fakultas_group').style.display='none';
                                document.getElementById('submit').disabled=true;
                                Swal.fire({
                                    icon: 'info',
                                    title: 'Registrasi Sedang Diproses',
                                    text: 'Registrasi NIM anda sedang diproses!'
                                });
                            }else if (val.registrasi == 2){
                                document.getElementById('nama').value='';
                                document.getElementById('departemen').value='';
                                document.getElementById('fakultas').value='';
                                document.getElementById('nama_group').style.display='none';
                                document.getElementById('departemen_group').style.display='none';
                                document.getElementById('fakultas_group').style.display='none';
                                document.getElementById('submit').disabled=true;
                                Swal.fire({
                                    icon: 'info',
                                    title: 'NIM sudah Diverifikasi !',
                                });
                            }else{
                                document.getElementById('nama').value=val.nama;
                                document.getElementById('departemen').value=val.departemen;
                                document.getElementById('fakultas').value=val.fakultas;
                                document.getElementById('nama_group').style.display='block';
                                document.getElementById('departemen_group').style.display='block';
                                document.getElementById('fakultas_group').style.display='block';
                                document.getElementById('submit').disabled=false;
                            }
                            
                        });
                    }else{// data tidak ada isinya / nim tidak ditemukan
                        //console.log('Tidak ditemukan');
                        document.getElementById('nama').value='';
                        document.getElementById('departemen').value='';
                        document.getElementById('fakultas').value='';
                        document.getElementById('nama_group').style.display='none';
                        document.getElementById('departemen_group').style.display='none';
                        document.getElementById('fakultas_group').style.display='none';
                        document.getElementById('submit').disabled=true;
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Maaf NIM anda tidak terdaftar sebagai Mahasiswa Aktif 2020',
                            footer: '<a href="https://www.instagram.com/pemirafsm_2020/">Hubungi Operator</a>'
                        });
                    }
                    
                }
            });              
        }

    </script>
    <!-- END Script auto fill ragistrasi -->
</body>

</html>