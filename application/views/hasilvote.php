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
        <h1 class="text-center mt-4 mt-md-0">HASIL VOTING</h1>
        <h1 class="text-center">CALON KETUA BEM FSM</h1>
        <br>
        <br>
        <div class="alert alert-info text-center" role="alert" id="hasil">
        
        </div>
        <div id="hasil2" style="display:none;">
            <div class="row justify-content-center">
                <?php 
                    if ($calon):
                        $i = 1 ;
                        foreach($calon as $row) :
                ?>
                <label class="col-12 col-md-4 text-center order-2 order-md-1">
                    <div class="card ">
                        <img class="gambar_voting mx-auto d-block" src="<?php echo base_url() . 'calon/'.$row['foto'] ?>" alt="">
                        <h2>CALON <?= $i; ?></h2>
                        <h6>Ketua : <?= $row['nama_ketua']; ?></h6>
                        <h6>Wakil Ketua :  <?= $row['nama_wakil']; ?></h6>
                        <h3><?= $row['suara']; ?> Suara</h3>
                        <h3><?= (integer)$row['suara']/(integer)$suara['total']*100; ?> %</h3>
                    </div>
                </label>
                <?php 
                    $i++ ;
                    endforeach;
                    endif;
                ?>
            </div>
        
            <br><br>
            <br>
            <br>
            <!-- chart dan hasil suara -->
            <div class="row">
                <!-- chart -->
                <label class="col-12 col-md-6 text-center order-2 order-md-1">
                    <div class="card ">
                        <div class="card-header">
                            <h6> Grafik Perolehan Suara </h6>
                        </div>
                        <div class="chart-area" style="text-align: center; height: 320px">
                            <canvas id="chart_jumlah_suara">
                            </canvas>
                        </div>
                    </div>
                </label>
                <!-- leaderboard -->
                <label class="col-12 col-md-6 text-center order-2 order-md-1">
                    <div class="card ">
                        <div class="card-header">
                            <h6> Leaderboard </h6>
                        </div>
                        <div class="table-responsive">
                            <table class="mb-0 table table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Urutan</th>
                                        <th style="text-align: center;">Paslon</th>
                                        <th style="text-align: center;">Suara</th>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                        foreach ($calon1 as $row) :
                                    ?>
                                    <tr>
                                        <td style="text-align: center;"><?= $i; ?></td>
                                        <td style="text-align: center;"><?= $row['nama_ketua']; ?></td>
                                        <td style="text-align: center;"><?= $row['suara']; ?></td>
                                    </tr>
                                    <?php
                                        $i++;
                                        endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </label>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>

    <?php $this->load->view('template/footer') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <script>
		// Set the date we're counting down to
		var countDownDate = new Date(<?php echo '"'.$waktu.'"';?>).getTime();
		var hasil=document.getElementById('hasil');
        var hasil2=document.getElementById('hasil2');
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
		  hasil.innerHTML = "Hasil akan ditampilkan dalam : <br>" + time_left;
		  //console.log(time_left);
		  if (distance < 0) {
		    clearInterval(x);
		    hasil.style.display='none';
            hasil2.style.display='block';
		  }
		}, 1000);
	</script>

    <!-- script untuk pie chart -->

    <script>
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        var ctxi = document.getElementById("chart_jumlah_suara");
        var myPieChart = new Chart(ctxi, {
        type: 'doughnut',
        data: {
            labels: [<?php
                        if (count($calon)>0) {
                            foreach ($calon as $row) {
                                echo "'Paslon " .$row['nama_ketua'] ."',";
                            }
                        }
                    ?>],
            datasets: [{

            data: [<?php
                        if (count($calon)>0) {
                            foreach ($calon as $row) {
                                echo "'" .(integer)$row['suara']/(integer)$suara['total']*100 ."',";
                            }
                        }
                    ?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.65)',
                'rgba(54, 162, 235, 0.65)',
                'rgba(255, 206, 86, 0.65)',
                'rgba(75, 192, 192, 0.65)',
                'rgba(153, 102, 255, 0.65)',
                'rgba(255, 159, 64, 0.65)'
            ],
            hoverBackgroundColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
            backgroundColor: "rgba(0, 0, 0, 0.8)",
            bodyFontColor: "#FFFFFF",
            borderColor: 'rgb(0, 0, 0)',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            callbacks: {
                        label: function(tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var labels = data.labels[tooltipItem.index];
                            var currentValue = dataset.data[tooltipItem.index];
                            return labels+": "+currentValue+" %";
                        }
                    }
            },
            legend: {
            display: true
            },
            cutoutPercentage: 70,
        },
        });
    </script>
    <!-- END script untuk pie chart -->
</body>

</html>