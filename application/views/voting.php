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
        <h1 class="text-center mt-4 mt-md-0">VOTING</h1>
        <h1 class="text-center">CALON KETUA BEM FAKULTAS A</h1>
        <br>
        <br>
        <!-- <form action="<?= base_url(); ?>Page/pilih_calon"> -->
        <div class="row justify-content-center">
            <?php
            if ($calon) :
                $i = 1;
                foreach ($calon as $row) :
            ?>
                    <label class="col-12 col-md-6 text-center mb-5 mb-md-0">
                        <input type="radio" name="calon" id="calon<?= $i; ?>" value="<?= $row['id_kandidat'] ?>" onclick="pilihan(this.value)">
                        <div class="card mt-5">
                            <img class="gambar_voting mx-auto d-block" src="<?php echo base_url() . 'calon/' . $row['foto'] ?>">
                            <h1>CALON <?= $i; ?></h1>
                            <h5>Ketua : <?= $row['nama_ketua']; ?></h5>
                            <h5>Wakil Ketua : <?= $row['nama_wakil']; ?></h5>
                        </div>
                    </label>
            <?php
                    $i++;
                endforeach;
            endif;
            ?>
            <input type="hidden" id="result">
        </div>
        <br>
        <br>
        <div class="text-center ayo-pilih">
            <button type="button" class="btn btn-danger btn-lg" onclick="pilih()">SUBMIT</button>
        </div>
        <!-- data-toggle="modal" data-target="#konfirmasi" -->
        <!-- <div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h5 class="modal-title " id="exampleModalLabel">Konfirmasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            Apakah anda yakin dengan pilihan anda?
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            <button type="button" class="btn btn-primary">Ya</button>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- </form> -->

        <br>
        <br>
        <br>
    </div>

    <?php $this->load->view('template/footer') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Script untuk pemilihan -->
    <script>
        function pilihan(id_kandidat) {
            document.getElementById("result").value = id_kandidat;
        }

        function pilih() {
            var id_kandidat = document.getElementById("result").value;
            if (id_kandidat == "") {
                Swal.fire({
                    icon: 'warning',
                    title: 'Anda Belum Memilih Calon',
                    text: 'Silahkan memilih calon terlebih dahulu!'
                });
            } else {
                Swal.fire({
                    title: 'Anda Yakin Dengan Pilihan Anda?',
                    text: "Perhatikan bahwa pemilih hanya dapat memilih sebanyak 1 kali!",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Pilih!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "<?php echo base_url(); ?>index.php/Page/pilih_calon",
                            method: "POST",
                            data: {
                                id_kandidat: id_kandidat
                            },
                            dataType: 'json',
                            success: function(data) {
                                location.replace("<?php echo base_url(); ?>index.php/Page/dashboardUser");
                            }
                        });
                    }
                })
            }

        }
    </script>

    <!-- END Script untuk pemilihan -->
</body>

</html>