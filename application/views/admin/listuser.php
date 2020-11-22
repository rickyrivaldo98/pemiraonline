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
        <h1 class="text-center">List User</h1>
        <br>

        <a href="" class="btn btn-success float-right" data-toggle="modal" data-target="#modalNew">
            <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
            </span>
            <span class="text">New User</span>
        </a>
        <table style="width: 100%;" id="table-1" class="table table-bordered table-striped">
            <thead style="background-color: white;">
                <tr>
                    <th style="text-align: center; vertical-align: middle;">No</th>
                    <th style="text-align: center; vertical-align: middle;">Nama</th>
                    <th style="text-align: center; vertical-align: middle;">Username</th>
                    <th style="text-align: center; vertical-align: middle;">Role</th>
                    <th style="text-align: center; vertical-align: middle; width:16%">Aksi</th>
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
                        if ($user):
                            $i = 1 ;
                            foreach($user as $row) :
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td>
                            <?php
                                switch($row['role']){
                                    case '1': echo 'Super Admin'; Break;
                                    case '2': echo 'Admin'; Break;
                                }
                            ?>
                        </td>
                        <td>  
                            <a href="" class="btn btn-info btn-icon-split btn-sm" data-toggle="modal" data-target="#modalEdit_<?= $row['id']; ?>">
                                <span class="icon text-white-50">
                                <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Edit</span>
                            </a> &nbsp;
                            
                            <a href="#" class="btn btn-danger btn-danger-split btn-sm" onclick="alert_hapus('<?=$row['id'];?>')">
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

    <?php if ($this->session->flashdata('submit_berhasil')) : ?>
        <script>
            Swal.fire(
                'Selamat',
                'Create User Berhasil! ',
                'success'
            )
        </script>
    <?php endif; ?>

    <?php if ($this->session->flashdata('edit_berhasil')) : ?>
        <script>
            Swal.fire(
                'Selamat',
                'Edit Berhasil! ',
                'success'
            )
        </script>
    <?php endif; ?>
    <!-- END Script alert edit foto -->

    <!-- Script untuk hapus -->
    <script>
        function alert_hapus(id){
            //console.log(id_kandidat);
            Swal.fire({
                title: 'Anda Yakin Ingin Menghapus Data User?',
                text: "Data tidak dapat dikembalikan lagi!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url:"<?php echo base_url();?>Page/hapusUser/",
                        method : "POST",
                        data: {id: id},
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
    <?php if ($user) : ?>
        <?php foreach ($user as $row) : ?>
            <div class="modal fade bd-example-modal-lg" id="modalEdit_<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method ="POST" enctype="multipart/form-data" action= "<?= base_url(); ?>Page/editUser/<?= $row['id']; ?>">
                            <div class="form-group">
                                <label for="username">Username</label>
                                    <input value="<?=$row['username'];?>" required type="text" class="form-control" id="username" name="username" placeholder="Username">
                                <br>
                                <label for="name">Nama</label>
                                    <input value="<?=$row['nama'];?>" required type="text" class="form-control" id="name" name="name" placeholder="Nama">
                                <br>
                                <label for="password">Password</label>
                                    <input value="<?=$row['password'];?>" required type="password" class="form-control" id="password" name="password" placeholder="Password">
                                <br>
                                <label for="role">Role</label>
                                    <select class="form-control" id="role" name="role">
                                        <option <?php if($row['role'] == 1) echo "selected" ?>>1</option>
                                        <option <?php if($row['role'] == 2) echo "selected" ?>>2</option>
                                    </select>
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
    <div class="modal fade bd-example-modal-lg" id="modalNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method ="POST" enctype="multipart/form-data" action= "<?= base_url(); ?>Page/tambah_user/">
                    <div class="form-group">
                        <label for="username">Username</label>
                            <input required type="text" class="form-control" id="username" name="username" placeholder="Username">
                        <br>
                        <label for="name">Nama</label>
                            <input required type="text" class="form-control" id="name" name="name" placeholder="Nama">
                        <br>
                        <label for="password">Password</label>
                            <input required type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <br>
                        <label for="role">Role</label>
                            <select class="form-control" id="role" name="role">
                                <option>1</option>
                                <option>2</option>
                            </select>
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
</body>

</html>