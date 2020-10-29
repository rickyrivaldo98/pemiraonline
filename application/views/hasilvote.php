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
    <div class="container dashboard">
        <br>
        <br>
        <br>
        <button type="button" class="btn btn-danger btn-lg" onclick="history.go(-1);">Kembali</button>
        <h1 class="text-center">HASIL VOTING</h1>
        <h1 class="text-center">CALON KETUA BEM UNDIP</h1>
        <br>
        <br>
        <br>
        <div class="row">
            <label class="col-4 text-center ">
                <div class="card ">
                    <img class="gambar_voting mx-auto d-block" src="<?php echo base_url() . 'assets/img/no-image.jpg' ?>" alt="">
                    <h1>CALON A</h1>
                    <h3>250 Suara</h3>
                    <h3>50%</h3>
                </div>
            </label>
            <label class="col-4 text-center ">
                <p>nanti ada diagram di kolom ini kalo udah ada data wkwkwk
                </p>
            </label>
            <label class="col-4 text-center">
                <div class="card ">
                    <img class="gambar_voting mx-auto d-block" src="<?php echo base_url() . 'assets/img/no-image.jpg' ?>" alt="">
                    <h1>CALON B</h1>
                    <h3>250 Suara</h3>
                    <h3>50%</h3>
                </div>
            </label>
        </div>
        <br><br>
        <h1 class="text-center">HASIL VOTING</h1>
        <h1 class="text-center">CALON KETUA BEM FAKULTAS A</h1>
        <br>
        <br>
        <br>
        <div class="row">
            <label class="col-4 text-center ">
                <div class="card ">
                    <img class="gambar_voting mx-auto d-block" src="<?php echo base_url() . 'assets/img/no-image.jpg' ?>" alt="">
                    <h1>CALON A</h1>
                    <h3>250 Suara</h3>
                    <h3>50%</h3>
                </div>
            </label>
            <label class="col-4 text-center ">
                <p>nanti ada diagram di kolom ini kalo udah ada data wkwkwk
                </p>
            </label>
            <label class="col-4 text-center">
                <div class="card ">
                    <img class="gambar_voting mx-auto d-block" src="<?php echo base_url() . 'assets/img/no-image.jpg' ?>" alt="">
                    <h1>CALON B</h1>
                    <h3>250 Suara</h3>
                    <h3>50%</h3>
                </div>
            </label>
        </div>
        <br>
        <br>

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