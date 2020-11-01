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

  <header>
    <div class=" jumbotron jumbotron-fluid" id="header">
      <!-- <div class="container"> -->
      <br><br><br>

      <div class="row">
        <div class="col-md-4 col-sm-12 logonav">
          <img class="rounded float-right" src="<?php echo base_url() . 'assets/img/logo.png' ?>" alt="">
        </div>
        <div class="col-md-8 col-sm-12 tulisannav">
          <h3 class="animate__animated animate__fadeInLeft animate__delay-1s"> SELAMAT DATANG</h3>
          <h1 class="animate__animated animate__fadeInLeft animate__delay-1s"> PEMIRA ONLINE</h1>
          <h1 class="animate__animated animate__fadeInLeft animate__delay-1s"> UNIVERSITAS DIPONEGORO</h1>
          <p class="animate__animated animate__fadeInLeft animate__delay-2s"> <i>“Mari Menjadi Pemilih Yang Baik”</i> </p>
        </div>
      </div>
      <div class="regis text-center">
        <h3>Belum Registrasi?</h3>
        <a type="button" class="btn btn-danger btn-lg" href="<?php echo base_url() . 'page/registrasi' ?>">REGISTRASI DISINI</a>
        <h6>Jika Sudah, silahkan login</h6>
      </div>

      <!-- </div> -->
    </div>
  </header>
  <section>
    <div class="container">
      <div class="text-center judul-konten">
        <h1>Tata Cara Pemira Online</h1>
      </div>
      <!-- konten -->
      <div class="row konten">
        <div class="col-12 col-md-6">
          <img class="gambar_konten rounded float-right" src="<?php echo base_url() . 'assets/img/1.png' ?>" alt="">
        </div>
        <div class="col-12 col-md-6">
          <h1>1. Lakukan Registrasi</h1>
          <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Vivamus tristique luctus dolor,
            sed aliquet neque pharetra vel. Nullam mollis
            porta interdum. Maecenas pulvinar semper
            purus, vel molestie neque ultrices eu. Morbi
            accumsan.</p>
        </div>
      </div>
      <div class="row konten">
        <div class="col-12 col-md-6 order-2 order-md-1">
          <h1>2. Lakukan Login</h1>
          <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Vivamus tristique luctus dolor,
            sed aliquet neque pharetra vel. Nullam mollis
            porta interdum. Maecenas pulvinar semper
            purus, vel molestie neque ultrices eu. Morbi
            accumsan.</p>
        </div>
        <div class="col-12 col-md-6 order-1 order-md-2">
          <img class="gambar_konten rounded float-left" src="<?php echo base_url() . 'assets/img/2.png' ?>" alt="">
        </div>
      </div>
      <div class="row konten">
        <div class="col-12 col-md-6">
          <img class="gambar_konten rounded float-right" src="<?php echo base_url() . 'assets/img/3.png' ?>" alt="">
        </div>
        <div class="col-12 col-md-6">
          <h1>3. Lihat Calon Ketua BEM</h1>
          <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Vivamus tristique luctus dolor,
            sed aliquet neque pharetra vel. Nullam mollis
            porta interdum. Maecenas pulvinar semper
            purus, vel molestie neque ultrices eu. Morbi
            accumsan.</p>
        </div>
      </div>
      <div class="row konten">
        <div class="col-12 col-md-6 order-2 order-md-1">
          <h1>4. Lakukan Voting</h1>
          <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Vivamus tristique luctus dolor,
            sed aliquet neque pharetra vel. Nullam mollis
            porta interdum. Maecenas pulvinar semper
            purus, vel molestie neque ultrices eu. Morbi
            accumsan.</p>
        </div>
        <div class="col-12 col-md-6 order-1 order-md-2">
          <img class="gambar_konten rounded float-left" src="<?php echo base_url() . 'assets/img/4.png' ?>" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="text-center ayo-pilih">
            <h1>AYO!</h1>
            <h1>PILIH SEKARANG</h1>
            <button type="button" class="btn btn-danger btn-lg px-sm-2 px-md-5">KLIK DISINI</button>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php $this->load->view('template/footer') ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Script alert request berhasil -->

  <?php if ($this->session->flashdata('request_berhasil')) : ?>
    <script>
        Swal.fire(
            'Request Telah Masuk',
            'Konfirmasi akan dikirimkan melalui email maks 3 x 24 jam! ',
            'success'
        )
    </script>
    <?php endif; ?>
    <!-- END Script alert request berhasil -->
</body>

</html>