<!DOCTYPE html>
<html lang="en">
<!-- tesss -->

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

    <title>Admin Pemira Online</title>
</head>

<body>
    <?php $this->load->view('template/navbar') ?>

    <div class="container-fluid dashboard">
        <br>
        <br>
        <br>
        <h1 class="text-center">SELAMAT DATANG <span style="text-transform: uppercase;"><?= ($this->session->userdata('nama')) ?></span></h1>
        <h1 class="text-center">DI DASHBOARD PEMIRA ONLINE 2020</h1>

        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-12 col-md-3 text-center mb-5 mb-md-0">
                <a href="<?php echo base_url() . 'page/verifikasi' ?>">
                    <img class="gambar_dashboard mx-auto d-block" src="<?php echo base_url() . 'assets/img/7.png' ?>" alt="">
                    <h1>Verifikasi</h1>
                </a>
            </div>
            <div class="col-12 col-md-3 text-center">
            <!-- data-toggle="modal" data-target="#pilih" -->
                <a href="<?php echo base_url() . 'page/tambahcalonketuabemf' ?>" >   
                    <img class="gambar_dashboard mx-auto d-block" src="<?php echo base_url() . 'assets/img/4.png' ?>" alt="">
                    <h1>Submit Calon</h1>
                </a>
                <a href="<?php echo base_url() . 'page/listcalonketuabem' ?>" class="btn btn-danger btn-lg mb-5 mb-md-0">List Calon Ketua Bem</a>
            </div>
            <div class="col-12 col-md-3 text-center mb-5 mb-md-0">
                <a href="<?php echo base_url() . 'page/log' ?>">
                    <img class="gambar_dashboard mx-auto d-block" src="<?php echo base_url() . 'assets/img/8.png' ?>" alt="">
                    <h1>Lihat Log</h1>
                </a>
            </div>
            <div class="col-12 col-md-3 text-center">
                <a href="<?php echo base_url() . 'page/hasilvoteAdmin' ?>">
                    <img class="gambar_dashboard mx-auto d-block" src="<?php echo base_url() . 'assets/img/6.png' ?>" alt="">
                    <h1>Lihat Hasil</h1>
                </a>
                <?php if($status == 0) :?>
                    <a href="#" class="btn btn-danger btn-lg mb-5 mb-md-0" onclick="bukaPemilihan()">Pemilihan Belum Dibuka</a>
                <?php elseif($status == 1 && ($now < $waktu)) : ?>
                    <button class="btn btn-info btn-lg mb-5 mb-md-0" disabled>Pemilihan Sedang Berlangsung</button>
                <?php elseif($status == 2) : ?>
                    <button class="btn btn-success btn-lg mb-5 mb-md-0" disabled>Pemilihan Telah Berakhir</buttona>
                <?php endif; ?>
            </div>
        </div>
    <br>
    <br>
    <br>
    </div>
    <div class="modal fade" id="pilih" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top: 20%; margin-bottom:auto;">
            <div class="modal-content">
                <div class="modal-body text-center">
                    Silahkan Memilih Ingin Menambah Calon Apa
                </div>
                <div class="text-center" style="color: white;">
                    <a href="<?php echo base_url() . 'page/tambahcalonketuabemundip' ?>" type="button" class="btn-lg btn-secondary">Ketua BEM UNDIP</a>
                    <a href="<?php echo base_url() . 'page/tambahcalonketuabemf' ?>" type="button" class="btn-lg btn-primary">Ketua BEM Fakultas</a>
                    <br><br>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('template/footer') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <?php if ($this->session->flashdata('submit_berhasil')) : ?>
        <script>
            Swal.fire(
                'Submit Calon Berhasil',
                'Data calon sudah masuk ke dalam database !',
                'success'
            )
        </script>
    <?php endif; ?>

    <!-- Script buka pemilihan -->
    <script>
        function bukaPemilihan(){
            //console.log(id_kandidat);
            Swal.fire({
                title: 'Perhatian!',
                text: "Silahkan Atur Waktu Pemilihan Untuk Membuka Pemilihan Raya FSM UNDIP 2020 sekarang",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Buka'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "<?php echo base_url();?>Page/hasilvoteAdmin"; 
                }
            })
        }
    </script>

    <?php if ($this->session->flashdata('dibuka')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: 'Pemira FSM UNDIP 2020 Telah DIbuka!',
                footer: 'atur waktu penutupan <a href="#">sekarang</a>'
            });
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('tambah_berhasil')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Data Calon Pemilih Berhasil Ditambahkan !'
            });
        </script>
    <?php endif; ?>

    <!-- END Script buka pemilihan -->
</body>

</html>