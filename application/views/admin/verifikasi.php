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
        <table style="width: 100%;" id="table-artikel" class="table table-bordered table-striped">
            <thead style="background-color: white;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Departemen</th>
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
                        <td>
                            <a href="" class="btn btn-info btn-icon-split btn-sm" data-toggle="modal" data-target="#modalCekFoto_<?= $row['nim']; ?>">
                                <span class="icon text-white-50">
                                <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Lihat Foto</span>
                            </a>
                        </td>
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
                "searching": false,

                "info": true,
                "autoWidth": true
            });
        });
    </script>

    <!-- script alert sukses verifikasi -->
    <?php if ($this->session->flashdata('verifiksi_berhasil')) : ?>
    <script>
        Swal.fire(
            'Verifikasi Berhasil',
            'Email notifikasi telah dikirimkan !',
            'success'
        )
    </script>
    <?php endif; ?>
    <!-- end script alert sukses verifikasi -->

    <!-- script alert tolak verifikasi -->
    <?php if ($this->session->flashdata('verifiksi_ditolak')) : ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Verifikasi DItolak',
            text: 'Email notifikasi telah dikirimkan !',
        });
    </script>
    <?php endif; ?>
    <!-- end script alert tolak verifikasi -->

    <!--Modal lihat Foto KTM-->
    <?php if ($pemilih) : ?>
        <?php foreach ($pemilih as $row) : ?>
            <div class="modal fade bd-example-modal-lg" id="modalCekFoto_<?= $row['nim']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Foto Selfie KTM</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body" style="text-align: center">
                            <img src = "<?= base_url(); ?>ktm/<?=$row['foto_ktm']; ?>" style="width: 100%; height: auto;">
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-danger" style="color: white; font-weight: bold;" href="<?= base_url(); ?>Page/tolak_email?nim=<?= $row['nim']; ?>&departemen=<?= $row['departemen']; ?>&nama=<?= $row['nama']; ?>&fakultas=<?= $row['fakultas']; ?>&email=<?= $row['email']; ?>">Tolak</a>
                            <a class="btn btn-success" style="color: white; font-weight: bold;" href="<?= base_url(); ?>Page/verifikasi_email?nim=<?= $row['nim']; ?>&departemen=<?= $row['departemen']; ?>&nama=<?= $row['nama']; ?>&fakultas=<?= $row['fakultas']; ?>&email=<?= $row['email']; ?>">Verifikasi</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>