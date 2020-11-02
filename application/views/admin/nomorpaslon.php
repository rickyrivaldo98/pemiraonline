<!DOCTYPE html>
<html lang="en">
<!-- tesss -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/modules/datatables-bs4/css/dataTables.bootstrap4.css' ?>">

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
        <h1 class="text-center">List Calon Ketua dan Wakil Ketua BEM </h1>
        <br>
        <br>

        <h1 class="mb-5">Nomor Calon Ketua BEM Fakultas Sains dan Matematika</h1>
        <?php
            if ($calon):
                $x = 100;
                foreach($calon as $row) :
        ?>
            <div class="row mb-4">
                <div class="col-8 col-md-9">
                    <input class="form-control" type="text" placeholder="<?=$row['nama_ketua']?>" readonly>
                </div>
                <div class="col-4 col-md-3">
                    <select class="custom-select mr-sm-2" id="<?=$x?>">
                        <?php
                            for($i=1; $i<=count($calon); $i++) {
                                ?><option value="<?=$i?>" <?=$row['no_paslon'] == $i ? "selected" : "" ?> ><?=$i?></option>
                        <?php } $x++;?>
                    </select>
                </div>
            </div>
        <?php 
            endforeach;
            endif;
        ?>
        <div class="row">
            <div class="col-12 text-center">
                <button type="button" class="btn btn-success btn-lg" onclick="updateNomor()">Update</button>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

    <?php $this->load->view('template/footer') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        function updateNomor() {
            let urut_arr = []
            let id_arr = []
            let x = 100
            for(let i=0; i< <?=count($calon);?>; i++) {
                let e = document.getElementById(x);
                let value=e.options[e.selectedIndex].value
                urut_arr.push(value)
                x++
            }
            if(checkIfDuplicateExists(urut_arr)) {
                fail()
            } else {
                <?php foreach($calon as $row) :?>
                    id_arr.push('<?=$row['id_kandidat']?>')
                <?php endforeach; ?>
                $.ajax({
                    url:"<?php echo base_url();?>index.php/Page/updatenomor",
                    method : "POST",
                    data: {id_kandidat: id_arr, no_paslon: urut_arr},
                    dataType : 'json',
                    success:function(data){
                        window.location.reload();
                    }
                });  
            }
        }
        function fail() {
            Swal.fire({
                icon: 'warning',
                title: 'Nomor Paslon Tidak Boleh Sama',
            });
        }
        function checkIfDuplicateExists(w){
            return new Set(w).size !== w.length 
        }
    </script>

</body>

</html>