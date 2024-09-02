<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Rawat Inap', 'Rawat Jalan', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [
            <?php
                            include 'index.php';
                            $conn = koneksi_database();
                            $sql = "SELECT * FROM patients";
                            $result = $conn->query($sql);
                            
                            //$koneksi = mysqli_connect("localhost","root","","test")
                        ?>,
                        <?php 
                            $ranap = mysqli_query($koneksi,"select * from patients where status ='Rawat Inap'");
                            echo mysqli_num_rows($ranap);
                            
                        ?>,
                        <?php 
                            $rajal = mysqli_query($koneksi,"select * from patients where status ='Rawat Jalan'");
                            echo mysqli_num_rows($rajal);
                            
                        ?>
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
