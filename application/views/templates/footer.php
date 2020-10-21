    
<!--     <div class="row py-4" style="background-color: #393939">
        <div class="col col-lg-3 col-md-4 ml-5">
            <img src="<?= base_url('assets/') ?>img/gambar5x3.png" width=270px>
        </div>
        <div class="col col-lg-4 col-md-6">
            <h5 class="font-weight-bold text-white mb-3">Balai Desa Glonggong</h5>
            <p style="color: #bfbfbf; font-size: 14px;" >Kantor Balai Desa Glonggong <br>Jalan Bulu Raya No.1, Glonggong, <br>Kec. Wanasari, Kabupaten Brebes, Jawa Tengah <br> 52252</p>
        </div>
    </div> -->
    <div class="container-fluid" style="background-color: #393939">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 px-5 my-4 my-sm-4">
              <img src="<?= base_url('assets/') ?>img/balai-desa.jpg" alt="" width="270px">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 px-5 my-2 my-sm-4">
              <div class="pl-2" style="border-left: 4px solid #007bff;">
                <h4 class="font-weight-bold text-white mb-2">Balai Desa Glonggong</h4>
              </div>
                <p style="color: #bfbfbf; font-size: 16px;" >Kantor Balai Desa Glonggong <br>Jalan Bulu Raya No.1, Glonggong, <br>Kec. Wanasari, Kabupaten Brebes, Jawa Tengah <br> 52252</p>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-6 px-5 my-2 my-sm-4">
              <div class="pl-2" style="border-left: 4px solid #007bff;">
                <h4 class="font-weight-bold text-white mb-4">Kunjungi Sosial Media Kami</h4>
              </div>
              <ul class="list-inline">
                <li class="list-inline-item mr-3"><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook fa-2x"></i></a></li>
                <li class="list-inline-item mr-3"><a href="https://api.whatsapp.com/send?phone=6281234567890"><i class="fab fa-whatsapp fa-2x"></i></a></li>
              </ul>
            </div>
        </div>
    </div>

    <div class="bg-dark pt-3 pb-1">
        <p class="text-white text-center" >Copyright © 2020 Pemerintah Desa Glonggong</p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/') ?>js/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <!-- ChartJS -->
    <script src="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/') ?>js/demo.js"></script>
    
    <!-- page script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */


    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#kkChart').get(0).getContext('2d')
    var pendudukChartCanvas = $('#pendudukChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'RW I', 
          'RW II', 
          'RW III', 
          'RW IV', 
          'RW V', 
          'RW VI', 
      ],
      datasets: [
        {
          data: [
                  <?php foreach ($kependudukan as $row) {
                    if($row['rw']!=6)
                      echo $row['kk'].',';
                    else {
                      echo $row['kk'];
                    }
                  }?>
          ],

          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var pendudukData        = {
      labels: [
          'Laki-laki', 
          'Perempuan', 
      ],
      datasets: [
        {
          data: [

                  <?php $lk=0;$pr=0; foreach ($kependudukan as $row) {
                    $lk+=$row['laki-laki'];
                    $pr+=$row['perempuan'];
                  }

                  echo $lk.','.$pr;
                  ?>

          ],
          backgroundColor : ['#3c8dbc','#f56954'],
        }
      ]
    }

    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var kkChart = new Chart(donutChartCanvas, {
      type: 'pie',
      data: donutData,
      options: donutOptions      
    })
    var pendudukChart = new Chart(pendudukChartCanvas, {
      type: 'pie',
      data: pendudukData,
      options: donutOptions      
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })

  })
</script>

  </body>
</html>