{{-- <script type="Text/JavaScript">
    var xValues = [50,60,70,80,90,100,110,120,130,140,150];
    var yValues = [7,8,8,9,9,9,10,11,14,14,15];
    
    new Chart("myChart", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "rgba(0,0,255,0.1)",
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
        }
      }
    });
</script> --}}

<script type="Text/Javascript">
    var xValues = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    var yValues = [7,8,8,9,9,9,10,11,14,14,15,50];
    var easymode = [3, 5, 6, 7, 8, 9, 4, 4, 10];
    var normalmode = [5, 6, 8, 2, 8, 9, 2, 9, 20];
    var hardmode = [7, 8, 8, 9, 6, 8, 3, 8, 23, 10];
    // let myChart = null;
    // Chart.destroy();
    // if(myChart != null){
    //     myChart.destroy();
    // }
    
    new Chart("Chart", {
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
                min: 0
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
    // if(myChart != null){
    //     myChart.destroy();
    // }
    // Chart.destroy();
    
</script>