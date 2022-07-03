<!DOCTYPE html>
<html>
<head>
    @include('layouts.top')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.js" integrity="sha512-5m2r+g00HDHnhXQDbRLAfZBwPpPCaK+wPLV6lm8VQ+09ilGdHfXV7IVyKPkLOTfi4vTTUVJnz7ELs7cA87/GMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="bg-play">
    <div id="app">
        @include('layouts.navigation')
    </div>
    
    <div class="container card p-3 shadow border-none">
        <div class="d-flex justify-content-center">
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
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
    // title: "Statistik",
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
            // borderColor: "green",
            backgroundColor: "green",
            borderColor: "#97ffbb"
        },{
            label: "Normal Text",
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,0,255,1.0)",
            borderColor: "rgba(0,0,255,0.1)",
            data: normalmode,
            borderColor: "#fdf6d5",
            pointBackgroundColor: "orange",
            backgroundColor: "orange"
        // },{
        //     label: "Hard Text",
        //     fill: false,
        //     lineTension: 0,
        //     backgroundColor: "rgba(0,0,255,1.0)",
        //     borderColor: "rgba(0,0,255,0.1)",
        //     data: hardmode,
        //     borderColor: "red",
        //     backgroundColor: "red"
        }]
    },
    options: {
        // plugins: {
        //     title: {
        //         display: true,
        //         text: 'mk'
        //     }
        // }
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
                // min: 0
        	},
            xValues: {
                title: {
                    display: true,
                    text: 'Hari'
                }
            }
        }
    }
    });
    </script>

</body>
</html>


