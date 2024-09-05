<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>GRAFIK KUNJUNGAN PASIEN</h2>
    <div style="width: 500px; height: 500px">
        <canvas id="grafik"></canvas>
    </div>
    <script>
    var ctx = document.getElementById("grafik").getContext('2d');
    var myChart = new Chart(ctx, {
        type:'bar',
        data:{
            labels : ["Rawat Inap","Rawat Jalan"],
            datasets : [{
                label: 'Data',
                data:[
                    <?php
                    //include'index.php';
                    //$koneksi = koneksi_database();
                    $koneksi = mysqli_connect("localhost","root","","test");
                    
                    $ranap = mysqli_query($koneksi,"select * from patients where status='Rawat Inap'");
                    echo mysqli_num_rows($ranap);
                    ?>,          

                   <?php
                    $rajal = mysqli_query($koneksi,"select * from patients where status='Rawat Jalan'");
                    echo mysqli_num_rows($rajal);
                    ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth:1
            }]
        }
    })
    </script>
</body>
</html>