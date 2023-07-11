<?php
$this->load->view('templates/headerAdmin');
$this->load->view('templates/leftAdmin');
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> Tableau de bord
      </h3>
    </div>
    <div class="row">
      <div class="col-md-6 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <img src="<?php echo site_url('assets/images/dashboard/circle.svg'); ?>" class="card-img-absolute"
              alt="circle-image">
            <h4 class="font-weight-normal mb-3">Etat de caisse <i class="mdi mdi-chart-line mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">Ar <?php echo $etatCaisse; ?></h2>
          </div>
        </div>
      </div>
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="chartjs-size-monitor">
              <div class="chartjs-size-monitor-expand">
                <div class=""></div>
              </div>
              <div class="chartjs-size-monitor-shrink">
                <div class=""></div>
              </div>
            </div>
            <h4 class="card-title">Objectif le plus engagé</h4>
            <canvas id="doughnutChart" style="height: 247px; display: block; width: 494px;" width="617" height="308"
              class="chartjs-render-monitor"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="chartjs-size-monitor">
              <div class="chartjs-size-monitor-expand">
                <div class=""></div>
              </div>
              <div class="chartjs-size-monitor-shrink">
                <div class=""></div>
              </div>
            </div>
            <h4 class="card-title">Les regimes les plus choisis</h4>
            <canvas id="barChart" style="height: 247px; display: block; width: 494px;" width="617" height="308"
              class="chartjs-render-monitor"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-6 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <img src="<?php echo site_url('assets/images/dashboard/circle.svg'); ?>" class="card-img-absolute"
              alt="circle-image">
            <h4 class="font-weight-normal mb-3" style="margin*right:10px">Nombre d'utilisateurs actuel
            </h4><i class="mdi mdi-account-multiple mdi-24px float-right"></i>
            <h2 class="mb-5"><?php echo $nbUserActuel; ?></h2>
          </div>
        </div>
      </div>
    </div>

    <script>
      window.addEventListener("load", () => {
        var doughnutPieData = {
          datasets: [{
            data: <?php echo $arrayPourcentageObjectifs; ?>,
            backgroundColor: [
              'rgba(255, 99, 132, 0.5)',
              'rgba(54, 162, 235, 0.5)',
              'rgba(255, 206, 86, 0.5)',
              'rgba(75, 192, 192, 0.5)',
              'rgba(153, 102, 255, 0.5)',
              'rgba(255, 159, 64, 0.5)'
            ],
            borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
          }],

          // These labels appear in the legend and in the tooltips when hovering different arcs
          labels: <?php echo $arrayDescriObjectifs; ?>
        };

        var doughnutPieOptions = {
          responsive: true,
          animation: {
            animateScale: true,
            animateRotate: true
          }
        };

        if ($("#doughnutChart").length) {
          var doughnutChartCanvas = $("#doughnutChart").get(0).getContext("2d");
          var doughnutChart = new Chart(doughnutChartCanvas, {
            type: 'doughnut',
            data: doughnutPieData,
            options: doughnutPieOptions
          });
        }

        // histogramme

        var data = {
          labels: <?php echo $arrayDescriRegimes; ?>,
          datasets: [{
            label: '# of Votes',
            data: <?php echo $arrayNombreRegimes; ?>,
            backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
              'rgba(255,99,132,1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)',
              'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            fill: false
          }]
        };

        var options = {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          },
          legend: {
            display: false
          },
          elements: {
            point: {
              radius: 0
            }
          }

        };

        if ($("#barChart").length) {
          var barChartCanvas = $("#barChart").get(0).getContext("2d");
          // This will get the first returned node in the jQuery collection.
          var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: data,
            options: options
          });
        }
      });

    </script>
    <?php
    $this->load->view('templates/footerAdmin');
    ?>