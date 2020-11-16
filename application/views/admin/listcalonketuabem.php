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
    <script src="https://cdn.tiny.cloud/1/l5ya0mb0dsp3tg59gn44unx60vt7q0dwfe5bq0t7u66ojw6d/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

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

        <h1>List Calon Ketua BEM Fakultas Sains dan Matematika</h1>
        <a href="<?php echo base_url() . 'page/aturnomor' ?>" class="btn btn-warning btn-lg mb-3">Atur Nomor Paslon</a>
        <table style="width: 100%;" id="table-1" class="table table-bordered table-striped">
            <thead style="background-color: white;">
                <tr>
                    <th rowspan ='2' style="text-align: center; vertical-align: middle;">No</th>
                    <th colspan = '3' style="text-align: center; vertical-align: middle;">Ketua</th>
                    <th colspan ='3' style="text-align: center; vertical-align: middle;">Wakil</th>
                    <th rowspan ='2' style="text-align: center; vertical-align: middle;">Aksi</th>
                </tr>
                <tr>
                    <th style="text-align: center; vertical-align: middle;">Nama</th>
                    <th style="text-align: center; vertical-align: middle;">NIM</th>
                    <th style="text-align: center; vertical-align: middle;">Departemen</th>
                    <th style="text-align: center; vertical-align: middle;">Nama</th>
                    <th style="text-align: center; vertical-align: middle;">NIM</th>
                    <th style="text-align: center; vertical-align: middle;">Departemen</th>
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
                        <td><?php echo $row['nim_ketua']; ?></td>
                        <td><?php echo $row['departemen_ketua']; ?></td>
                        <td><?php echo $row['nama_wakil']; ?></td>
                        <td><?php echo $row['nim_wakil']; ?></td>
                        <td><?php echo $row['departemen_wakil']; ?></td>
                        <td>  
                            <a href="" class="btn btn-info btn-icon-split btn-sm" data-toggle="modal" data-target="#modalCekFoto_<?= $row['id_kandidat']; ?>">
                                <span class="icon text-white-50">
                                <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Lihat Foto</span>
                            </a> &nbsp;
                            <a href="" class="btn btn-info btn-icon-split btn-sm" data-toggle="modal" data-target="#modalEditVisiMisi_<?= $row['id_kandidat']; ?>">
                                <span class="icon text-white-50">
                                <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Edit Visi Misi</span>
                            </a> &nbsp;
                            
                            <a href="#" class="btn btn-danger btn-danger-split btn-sm" onclick="alert_hapus('<?=$row['id_kandidat'];?>', '<?=$row['foto'];?>' )">
                                <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Hapus</span>
                            </a>

                        </td>
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
                    <th rowspan ='2' style="text-align: center; vertical-align: middle;">No</th>
                    <th style="text-align: center; vertical-align: middle;">Nama</th>
                    <th style="text-align: center; vertical-align: middle;">NIM</th>
                    <th style="text-align: center; vertical-align: middle;">Departemen</th>
                    <th style="text-align: center; vertical-align: middle;">Nama</th>
                    <th style="text-align: center; vertical-align: middle;">NIM</th>
                    <th style="text-align: center; vertical-align: middle;">Departemen</th>
                    <th rowspan ='2' style="text-align: center; vertical-align: middle;">Aksi</th>
                </tr>
                <tr>
                    <th colspan = '3' style="text-align: center; vertical-align: middle;">Ketua</th>
                    <th colspan ='3' style="text-align: center; vertical-align: middle;">Wakil</th>
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

    <!-- Script alert edit foto  -->
    <?php if ($this->session->flashdata('gagal_upload_foto')) : ?>
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Tambah Calon Gagal..',
                text: 'Foto tidak sesuai format atau ukuran melebihi 2 mb !',
            });
        </script>
    <?php endif; ?>


    <?php if ($this->session->flashdata('no_foto')) : ?>
        <script type="text/javascript">
            Swal.fire({
                icon: 'error',
                title: 'Tambah Calon Gagal...',
                text: 'Silahkan masukan foto calon terlebih dahulu!',
            });
        </script>
    <?php endif; ?>

    

    <?php if ($this->session->flashdata('edit_berhasil')) : ?>
        <script>
            Swal.fire(
                'Selamat',
                'Edit foto calon berhasil! ',
                'success'
            )
        </script>
    <?php endif; ?>
    <!-- END Script alert edit foto -->

    <!-- Script alert edit visi misi -->
    <?php if ($this->session->flashdata('edit_visimisi_berhasil')) : ?>
        <script>
            Swal.fire(
                'Selamat',
                'Edit visi misi calon berhasil! ',
                'success'
            )
        </script>
    <?php endif; ?>

    <!-- Script untuk hapus -->
    <script>
        function alert_hapus(id_kandidat, foto){
            //console.log(id_kandidat);
            Swal.fire({
                title: 'Anda Yakin Ingin Menghapus Data Calon?',
                text: "Data tidak dapat dikembalikan lagi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url:"<?php echo base_url();?>index.php/Page/hapus_data_calon",
                        method : "POST",
                        data: {id_kandidat: id_kandidat, foto: foto},
                        dataType : 'json',
                        success:function(data){
                            window.location.reload();
                        }
                    });  
                }
            })
        }
    </script>

    <!-- END Script untuk hapus -->
    <?php if ($this->session->flashdata('hapus_berhasil')) : ?>
        <script>
            Swal.fire(
                'Berhasil',
                'Data berhasil dihapus! ',
                'success'
            )
        </script>
    <?php endif; ?>
    <!-- Script alert haps berhasil -->

    <!-- END Script alert haps berhasil -->

    <!--Modal lihat Foto Calon-->
    <?php if ($calon) : ?>
        <?php foreach ($calon as $row) : ?>
            <div class="modal fade bd-example-modal-lg" id="modalCekFoto_<?= $row['id_kandidat']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Foto Calon BEM FSM</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body" style="text-align: center">
                            <img src = "<?= base_url(); ?>calon/<?=$row['foto']; ?>" style="width: 100%; height: auto;">
                            <hr>
                            <form method ="POST" enctype="multipart/form-data" action= "<?= base_url(); ?>Page/editFotoCalonBemf/<?= $row['id_kandidat']; ?>">
                            <div class="form-group" style="text-align: left">
                                <label for="gambar">Ganti Foto</label>
                                <input id="foto" name="foto" type="file" class="form-control-file" />
                                <small class="form-text text-muted">File foto yang diupload harus sesuai dengan fomat JPG / JPEG / PNG max 2mb</small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade bd-example-modal-lg" id="modalEditVisiMisi_<?= $row['id_kandidat']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Visi dan Misi</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body" style="text-align: center">
                            <form method ="POST" enctype="multipart/form-data" action= "<?= base_url(); ?>Page/editVisiMisi/<?= $row['id_kandidat']; ?>">
                            <div class="form-group">
                                <label for="visimisi">Visi dan Misi</label>
                                <textarea id="visimisi" name="visimisi"><?=$row['visimisi']?></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <script>
        tinymce.init({
            selector: 'textarea',
            menubar: false,
            plugins: "link code lists",
            toolbar: "undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | numlist bullist | outdent indent | link | code",

            toolbar_mode: 'floating',
        });
    </script>
</body>

</html>