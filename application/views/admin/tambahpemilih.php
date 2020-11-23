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
        <button type="button" class="btn btn-danger btn-lg" onclick="history.go(-1);">Kembali</button>
        <h1 class="text-center">TAMBAH DATA CALON PEMILIH</h1>

        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nim">Silahkan cek Nomor Induk Mahasiswa</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM"><small id="penjelasan" class="form-text text-muted">Pastikan NIM Belum Terdaftar Sebagai Pemilih</small>
                <button class="btn btn-success btn-sm" type="button" onclick="autofill()"><i class="fas fa-search"></i>&nbsp;CEK</button>
            </div>
            <div class="form-group" id="nama_group" style="display : none;">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group" id="departemen_group" style="display : none;">
                <label for="departemen">Departemen</label>
                <select name="departemen" id="departemen" class="form-control" required>
                    <?php foreach($departemen as $row) : ?>
                        <option value="<?=$row['departemen_nama']?>"><?=$row['departemen_nama']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group" id="fakultas_group" style="display : none;">
                <label for="fakultas">Fakultas</label>
                <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Masukkan Fakultas Calon Pemilih" readonly>
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
        function autofill(){
            var nim =document.getElementById('nim').value;
            $.ajax({
                url:"<?php echo base_url();?>index.php/Page/get_data_nim",
                method : "POST",
                data: {nim: nim},
                dataType : 'json',
                success:function(data){
                //console.log(data);
                    if (data != false){ // nim ditemukan/ sudah terdaftar
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
                            text: 'NIM sudah terdaftar sebagai Mahasiswa Aktif 2020',
                            footer: '<a href="#">Hubungi Operator</a>'
                        });
                        
                    }else{// data tidak ada isinya / nim tidak belum pernah dipakai
                            //console.log('Tidak ditemukan');
                        document.getElementById('nama').value='';
                        document.getElementById('departemen').value='';
                        document.getElementById('fakultas').value='Sains dan Matematika';
                        document.getElementById('nama_group').style.display='block';
                        document.getElementById('departemen_group').style.display='block';
                        document.getElementById('fakultas_group').style.display='block';
                        document.getElementById('submit').disabled=false;
                    }       
                }
            });              
        }

    </script>
    <!-- END Script auto fill ragistrasi -->
</body>

</html>