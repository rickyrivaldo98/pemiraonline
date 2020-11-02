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

    <title>Log Suara Pemira Online</title>
</head>

<body>
    <?php $this->load->view('template/navbar') ?>

    <div class="container dashboard">
        <br>
        <br>
        <br>
        <button type="button" class="btn btn-danger btn-lg" onclick="history.go(-1);">Kembali</button>
        <h1 class="text-center">Log Suara Terpakai</h1>
        <br>

        <h1 class="text-center" >PEMIRA Online Ketua BEM Fakultas Sains dan Matematika</h1>
        
        <h5>Total Suara Masuk :</h5>
        <div style="border-color: 
            <?php if($suara_terpakai >= 0 && $suara_terpakai <= 35){
                echo '#DF290D';
            }elseif ($suara_terpakai > 35 && $suara_terpakai <= 75){
                echo '#F3770A';
            }else{
                echo '#2F971C';
            }?>;border-style: solid;font-weight:bold; color: black;">
            <div style="height:24px;width:<?=$suara_terpakai;?>%;border-color:
                <?php if($suara_terpakai >= 0 && $suara_terpakai <= 35){
                    echo '#DF290D';
                }elseif ($suara_terpakai > 35 && $suara_terpakai <= 75){
                    echo '#F3770A';
                }else{
                    echo '#2F971C';
                }?>;border-style: solid; background-color:
                <?php if($suara_terpakai >= 0 && $suara_terpakai <= 35){
                    echo '#DF290D';
                }elseif ($suara_terpakai > 35 && $suara_terpakai <= 75){
                    echo '#F3770A';
                }else{
                    echo '#2F971C';
                }?>"> <?= $suara_terpakai;?>%
            </div>
        </div>

        <br>
        <table style="width: 100%;" id="table-1" class="table table-bordered table-striped">
            <thead style="background-color: white;">
                <tr>
                    <th style="text-align: center; vertical-align: middle;">No</th>
                    <th style="text-align: center; vertical-align: middle;">Waktu</th>
                    <th style="text-align: center; vertical-align: middle;">NIM</th>
                    <th style="text-align: center; vertical-align: middle;">Departemen</th>
                    <th style="text-align: center; vertical-align: middle;">Pilihan</th>
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
                        if ($log):
                            $i = 1 ;
                            foreach($log as $row) :
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['waktu']; ?></td>
                        <td><?php echo $row['nim']; ?></td>
                        <td><?php echo $row['departemen']; ?></td>
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
                    <th style="text-align: center; vertical-align: middle;">No</th>
                    <th style="text-align: center; vertical-align: middle;">Waktu</th>
                    <th style="text-align: center; vertical-align: middle;">NIM</th>
                    <th style="text-align: center; vertical-align: middle;">Departemen</th>
                    <th style="text-align: center; vertical-align: middle;">Pilihan</th>
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
    
</body>

</html>