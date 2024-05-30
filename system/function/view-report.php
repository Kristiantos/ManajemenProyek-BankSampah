<div class="container-fluid px-2 px-md-4 py-5">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <!-- <span class="mask bg-gradient-dark text-center opacity-2"></span> -->
        <h1 class="text-center font-weight-bold text-light" >selamat datang di Bank Sampah Karangber</h1>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto my-auto">
            <div class="h-100">
            
              <h3 class="mb-1">
              <i class="fas fa-user text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i> Halo, <?php echo $row['nama'] ?>
              </h3>
              <p class="text-dark mx-4">Piye kabare? Iseh Penak Jamanku To?</p>
            </div>
          </div>
        </div>
            </div> 
    </div>




<h2 style="font-size: 30px; color: #262626;">Grafik Monitoring</h2>

<div id="container"></div>

<script src="../asset/plugin/chart/js/highcharts.js"></script>
<script src="../asset/plugin/chart/js/exporting.js"></script>
<script type="text/javascript">
	Highcharts.chart('container', {
    chart: {
        type: 'area'
    },
    title: {
        text: 'Data Jumlah Nasabah Tiap RT'
    },
    subtitle: {
        text: 'Source: Bank Sampah Kenanga 09'
    },
    xAxis: {
        categories: [<?php $query = mysqli_query($conn, "SELECT * FROM nasabah group by rt"); while($row = mysqli_fetch_array($query)){echo $row['rt'].","; } ?>],
        tickmarkPlacement: 'on',
        title: {
            enabled: false
        }
    },
    yAxis: {
        title: {
            text: 'Jumlah per jiwa'
        },
        labels: {
            formatter: function () {
                return this.value;
            }
        }
    },
    tooltip: {
        split: true,
        valueSuffix: ' Jiwa'
    },
    plotOptions: {
        area: {
            stacking: 'normal',
            lineColor: '#666666',
            lineWidth: 1,
            marker: {
                lineWidth: 1,
                lineColor: '#666666'
            }
        }
    },
    series: [ {
        name: 'Nasabah RW. 009',
        data: [<?php $query = mysqli_query($conn, "SELECT COUNT(nin) AS jiwa FROM nasabah group by rt"); while($row = mysqli_fetch_array($query)){echo ($row['jiwa']).","; } ?>]
    }]
});
</script>