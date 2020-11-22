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

    <title>Verifikasi</title>
</head>

<body>
    <?php $this->load->view('template/navbar') ?>

    <div class="container dashboard">
        <br>
        <br>
        <br>
        <button type="button" class="btn btn-danger btn-lg" onclick="history.go(-1);">Kembali</button>
        <h1 class="text-center">Verifikasi Calon Pemilih</h1>
        <br>
        <br>
        <h5>Total : <?= $total; ?></h5>
        <a href="<?php echo base_url() . 'Page/verifikasi' ?>"><button type="button" class="btn btn-info btn-sm float-right">Verifikasi Data</button></a>
        <table style="width: 100%;" id="table-artikel" class="table table-bordered table-striped">
            <thead style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Departemen</th>
                    <th>Fakultas</th>
                    <th>Email</th>
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
                        $i = 1; 
                        foreach ($pemilih as $row) :
                            if (!empty($row)):
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['departemen']; ?></td>
                        <td><?php echo $row['fakultas']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                    </tr>
                    <?php 
                        $i++;
                            endif;
                        endforeach;
                    ?>
                </tbody>
            </div>
            <tfoot style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Departemen</th>
                    <th>Fakultas</th>
                    <th>Email</th>
                </tr>
            </tfoot>
        </table>
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
            $('#table-artikel').DataTable({
                "paging": true,
                // "pageLength": 10,
                // "ajax":           '/api/data',
                // "scrollY":        500,
                "scrollX": true,
                // "deferRender":    true,
                "scrollCollapse": true,
                // "responsive": true,
                // "lengthMenu": [10],
                "searching": true,

                "info": true,
                "autoWidth": true
            });
        });
    </script>
</body>

</html>