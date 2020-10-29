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
        <h1 class="text-center">List Calon Ketua BEM</h1>
        <br>
        <br>

        <h1>List Calon Ketua BEM UNDIP</h1>
        <table style="width: 100%;" id="table-1" class="table table-bordered table-striped">
            <thead style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Fakultas</th>
                    <th>Email</th>
                    <th>Aksi</th>
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
                        <td><?php echo $i; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php $i++ ?>
                </tbody>
            </div>
            <tfoot style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Fakultas</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
        <br>
        <h1>List Calon Ketua BEM Fakultas A</h1>
        <table style="width: 100%;" id="table-2" class="table table-bordered table-striped">
            <thead style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Fakultas</th>
                    <th>Email</th>
                    <th>Aksi</th>
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
                        <td><?php echo $i; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php $i++ ?>
                </tbody>
            </div>
            <tfoot style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Fakultas</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
        <br>
        <h1>List Calon Ketua BEM Fakultas B</h1>
        <table style="width: 100%;" id="table-3" class="table table-bordered table-striped">
            <thead style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Fakultas</th>
                    <th>Email</th>
                    <th>Aksi</th>
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
                        <td><?php echo $i; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php $i++ ?>
                </tbody>
            </div>
            <tfoot style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Fakultas</th>
                    <th>Email</th>
                    <th>Aksi</th>
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
</body>

</html>