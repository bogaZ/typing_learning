<!DOCTYPE html>
<html>
<head>
    @include('layouts.top')
    @role('user')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" defer></script>
    <script>
    $(document).ready(function () {
        $('#example1').DataTable();
    });
    </script>
    @endrole
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.js" integrity="sha512-5m2r+g00HDHnhXQDbRLAfZBwPpPCaK+wPLV6lm8VQ+09ilGdHfXV7IVyKPkLOTfi4vTTUVJnz7ELs7cA87/GMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="bg-play">
    <div id="app">
        @include('layouts.navigation')
    </div>
    <div class="container">
        <div class="card p-3 shadow border-none">
            <div class="d-flex justify-content-center">
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
            </div>
        </div>
        <div class="card p-3 shadow border-none my-3">
            <table id="example1" class="display my-3 border rounded rounded-3 border-dark" style="width:100%">
                <thead class="gradienbiru text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama Pembuat</th>
                        <th>Nama text</th>
                        <th>Teks</th>
                        <th>Tipe Text</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="gradienbiru2 text-dark">

                    <tr>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
    <script>
        var xValues = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        var yValues = [7,8,8,9,9,9,10,11,14,14,15,50];
        var easymode = [3, 5, 6, 7, 8, 9, 4, 4, 10];
        var normalmode = [5, 6, 8, 2, 8, 9, 2, 9, 20];
        var hardmode = [7, 8, 8, 9, 6, 8, 3, 8, 23, 10];

        new Chart("myChart", {
        type: "line",
        data: {
            label:"a",
            labels: xValues,
            datasets: [{
                label: "Programing Text",
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues,
                backgroundColor: "blue",
                borderColor: "#dad9ff"
            },{
                label: "Easy Text",
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: easymode,
                pointBackgroundColor: "green",
                backgroundColor: "green",
                borderColor: "#97ffbb"
            },{
                label: "Normal Text",
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: normalmode,
                borderColor: "#ffdda1",
                pointBackgroundColor: "orange",
                backgroundColor: "orange"
            },{
                label: "Hard Text",
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: hardmode,
                borderColor: "#ffc2c0",
                backgroundColor: "red"
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {display: false},
            plugins: {
                title: {
                    display: true,
                    text: 'Statistik',
                    padding: {
                        top: 10,
                        bottom: 30
                    }
                }
            },
            scales: {
                yValues: {
                    title: {
                        display: true,
                        text: 'Score'
                    },
                    beginAtZero: true,
                    max: 300,
                },
                xValues: {
                    title: {
                        display: true,
                        text: 'Bulan'
                    }
                }
            }
        }
        });
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" defer></script> --}}
    @include('layouts.bottom')
</body>
</html>


