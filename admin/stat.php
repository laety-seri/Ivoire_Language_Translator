<?php
    include('connection.php');

    $id = "";
    $search = "";
    $count = "";

    $sql = "SELECT * FROM graph";
    $result = mysqli_query($con,$sql);

    while ($row = mysqli_fetch_array($result)) {
        $id = $id . '"' . $row['id']. '",';
        $search = $search . '"' . $row['search']. '",';        
        $count = $count . '"' . $row['count']. '",';
    }
    $id = trim($id,",");
    $search = trim($search,","); 
    $count = trim($count,",");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('links.php') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <title>Statistiques</title>

    <style>

    </style>
</head>
<body>

    <div class="container">
        <h3>Graph des mots et expressions recherché(e)s sur le site</h3>

        <canvas id="chart" style="width: 100%; width: 640px; height: auto; background:#FFF; border: 1px solid #555652; margin-top: 10px;"></canvas>

        <script>

            var ctx = document.getElementById("chart").getContext("2d");
            var myChart = new Chart(ctx, {
                type: 'bar' ,
                data: {
                    labels: [<?php echo $search; ?>],
                    datasets: 
                    [{
                        label: 'count',
                        data: [<?php echo $count; ?>],
                        backgroundColor: 'green',
                        borderColor: 'rgba (0,255,255) ',
                        borderWidth: 1
                    }]
                },

                system: {
                    scales: {scales:{yAxes: [{beginAtZero: true}], xAxes: [{autoskip: true, maxTicketsLimit: 2000}]}},
                    tooltips:{mode: 'index'},
                    legend:{display: true, position: 'top', labels: {fontColor: 'rgb (255,255,255)', fontSize: 16}}
                }
            });

        </script>

    </div>
    
</body>
</html>
