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
        <h1 class="text-center mt-4 mt-md-0">Hasil Voting Calon Ketua BEM</h1>
        <br>
        <br>
        <div class="alert alert-info text-center" role="alert" id="hasil">
        
        </div>
        <a href="" class="btn btn-info btn-icon-split btn-sm" data-toggle="modal" data-target="#modalAturWaktu">
            <span class="icon text-white-50">
            <i class="fas fa-cog"></i>
            </span>
            <span class="text"><b>Atur Waktu</b></span>
        </a>
        <!--
        <h1>Hasil Vote Calon Ketua BEM UNDIP</h1>
        <table style="width: 100%;" id="table-1" class="table table-bordered table-striped">
            <thead style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama Calon</th>
                    <th>Suara Masuk</th>
                </tr>
            </thead>
            <style>
                tbody.belang tr:nth-child(even) {
                    background-color: white;
                }
            </style>
            <div>
                <tbody class="belang">
                    <?php 
                        if ($calon):
                            $i = 1 ;
                            foreach($calon as $row) :
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['nama_ketua']; ?></td>
                        <td><?php echo $row['suara']; ?></td>
                    </tr>
                    <?php 
                        $i++ ;
                        endforeach;
                        endif;
                    ?>
                </tbody>
            </div>
            <tfoot style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama Calon</th>
                    <th>Suara Masuk</th>
                </tr>
            </tfoot>
        </table>
                    -->
        <br>
        <h1>Hasil Vote Calon Ketua BEM Fakultas FSM</h1>
        <table style="width: 100%;" id="table-2" class="table table-bordered table-striped">
            <thead style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama Calon</th>
                    <th>Suara Masuk</th>
                </tr>
            </thead>
            <style>
                tbody.belang tr:nth-child(even) {
                    background-color: white;
                }
            </style>
            <div>
                <tbody class="belang">
                    <?php 
                        if ($calon):
                            $i = 1 ;
                            foreach($calon as $row) :
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['nama_ketua']; ?></td>
                        <td><?php echo $row['suara']; ?></td>
                    </tr>
                    <?php 
                        $i++ ;
                        endforeach;
                        endif;
                    ?>
                </tbody>
            </div>
            <tfoot style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama Calon</th>
                    <th>Suara Masuk</th>
                </tr>
            </tfoot>
        </table>
        <!--
        <br>
        <h1>Hasil Vote Calon Ketua BEM Fakultas B</h1>
        <table style="width: 100%;" id="table-3" class="table table-bordered table-striped">
            <thead style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama Calon</th>
                    <th>Suara Masuk</th>
                </tr>
            </thead>
            <style>
                tbody.belang tr:nth-child(even) {
                    background-color: white;
                }
            </style>
            <div>
                <tbody class="belang">
                    <?php $i = 1 ?>
                    <tr>
                        <td><?php echo $i+1; ?></td>
                        <td><?php echo $calon[$i]['nama_ketua']; ?></td>
                        <td><?php echo $calon[$i]['suara']; ?></td>
                    </tr>
                </tbody>
            </div>
            <tfoot style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama Calon</th>
                    <th>Suara Masuk</th>
                </tr>
            </tfoot>
        </table>
            -->
        <br>
        <br>
    </div>
    <br>
    <br>
    <br>

    <?php $this->load->view('template/footer') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="<?php echo base_url() . 'assets/modules/datatables/jquery.dataTables.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/modules/datatables-bs4/js/dataTables.bootstrap4.js' ?>"></script>
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#table-1').DataTable({
                "paging": true,
                // "pageLength": 10,
                // "ajax":           '/api/data',
                // "scrollY":        500,
                "scrollX": true,
                // "deferRender":    true,
                "scrollCollapse": true,
                // "responsive": true,
                // "lengthMenu": [10],
                "searching": false,

                "info": true,
                "autoWidth": true
            });
            $('#table-2').DataTable({
                "paging": true,
                // "pageLength": 10,
                // "ajax":           '/api/data',
                // "scrollY":        500,
                "scrollX": true,
                // "deferRender":    true,
                "scrollCollapse": true,
                // "responsive": true,
                // "lengthMenu": [10],
                "searching": false,

                "info": true,
                "autoWidth": true
            });
            $('#table-3').DataTable({
                "paging": true,
                // "pageLength": 10,
                // "ajax":           '/api/data',
                // "scrollY":        500,
                "scrollX": true,
                // "deferRender":    true,
                "scrollCollapse": true,
                // "responsive": true,
                // "lengthMenu": [10],
                "searching": false,

                "info": true,
                "autoWidth": true
            });
        });
    </script>


    <div class="modal fade" id="modalAturWaktu" tabindex="-1" role="dialog" aria-labelledby="modalAturWaktu" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pengaturan Waktu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="post" action="<?php echo base_url() . 'Page/atur_waktu' ?>">
                <div class="form-group">
                    <label for="nama">Atur Waktu</label>
                    <input type="datetime-local" id="time" name="time" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
            </div>
        </div>
    </div>

    <!-- script alert sukses Pengaturan -->
    <?php if ($this->session->flashdata('berhasil')) : ?>
    <script>
        Swal.fire(
            'Success',
            'Pengaturan Waktu Berhasil !',
            'success'
        )
    </script>
    <?php endif; ?>
    <!-- end script alert sukses Pengaturan -->

    <script>
		// Set the date we're counting down to
		var countDownDate = new Date(<?php echo '"'.$waktu.'"';?>).getTime();
		var hasil=document.getElementById('hasil');
		// Update the count down every 1 second
		var x = setInterval(function() {

		  // Get today's date and time
		  var now = new Date().getTime();

		  // Find the distance between now and the count down date
		  var distance = countDownDate - now;
		  // Time calculations for days, hours, minutes and seconds
		  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		  var time_left = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
		  hasil.innerHTML = "Hasil akan ditampilkan ke umum dalam : <br>" + time_left;
		  //console.log(time_left);
		  // If the count down is finished, write some text
		  if (distance < 0) {
		    clearInterval(x);
		    hasil.style.display='none';
		  }
		}, 1000);
	</script>
</body>

</html>