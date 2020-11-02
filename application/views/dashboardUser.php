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

    <title>Pemira Online</title>
</head>

<body>
    <?php $this->load->view('template/navbar') ?>

    <div class="container-fluid dashboard">
        <br>
        <br>
        <br>
        <h1 class="text-center">SELAMAT DATANG <?= ($this->session->userdata('nama')) ?></h1>
        <h1 class="text-center">DI DASHBOARD PEMIRA ONLINE 2020</h1>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-12 col-md-6 text-center mb-5 mb-md-0">
                <?php
                    if ( function_exists( 'date_default_timezone_set' ) ){
                        date_default_timezone_set('Asia/Jakarta');
                        $now = date("Y-m-d H:i:s");
                    }
                    if($waktu < $now) :
                ?>
                    <a href="#" onclick="waktuHabis()">
                <?php else : ?>
                    <?php if ($this->session->userdata('hak_pilih') == 0) : ?>
                    <a href="<?php echo base_url() . 'page/voting' ?>">
                    <?php else : ?>
                    <a href="#" onclick="sudahMemilih()">
                    <?php endif; ?>
                <?php endif; ?>
                <img class="gambar_dashboard mx-auto d-block" src="<?php echo base_url() . 'assets/img/4.png' ?>" alt="">
                <h1>Voting</h1>
                </a>

            </div>
            <div class="col-12 col-md-6 text-center">
                <a href="<?php echo base_url() . 'page/hasilvote' ?>">
                    <img class="gambar_dashboard mx-auto d-block" src="<?php echo base_url() . 'assets/img/6.png' ?>" alt="">
                    <h1>Lihat Hasil</h1>
                </a>

            </div>
        </div>
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

    <?php if ($this->session->flashdata('pilih_berhasil')) : ?>
        <script>
            Swal.fire(
                'Terimakasih',
                'Anda telah memilih calon BEM FSM 2020 !',
                'success'
            )
        </script>
    <?php endif; ?>

    <script>
        function sudahMemilih() {
            Swal.fire({
                icon: 'error',
                title: 'Anda Sudah Memilih',
                text: 'Pemilihan hanya dapat dilakukan sekali!'
            });
        }
        function waktuHabis(){
            Swal.fire({
                icon: 'error',
                title: 'Waktu sudah habis',
                text: 'Pemilihan hanya dapat dilakukan di waktu yang telah ditentukan!'
            });
        } 
    </script>
</body>

</html>