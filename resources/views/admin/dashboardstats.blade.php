<script type="Text/Javascript">
    var xValues = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    var yValues = [7,8,8,9,9,9,10,11,14,14,15,50];
    var easymode = [3, 5, 6, 7, 8, 9, 4, 4, 10];
    var normalmode = [5, 6, 8, 2, 8, 9, 2, 9, 20];
    var hardmode = [7, 8, 8, 9, 6, 8, 3, 8, 23, 10];
    
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
                text: 'Users Play Stats',
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

    // <block:setup:1>
    const piedata = {
        labels: [
            'custom',
            'indonesia',
            'inggris'
        ],
        datasets: [{
            label: 'My First Dataset',
            data: [300, 50, 100],
            backgroundColor: [
            'blue',
            'red',
            'orange'
            ],
            hoverOffset: 4
        }]
    };

    var pieChart = new Chart(pie, {
        type: 'pie',
        data: piedata,
        options: {
            responsive: true,
            // maintainAspectRatio: false,
            legend: {display: false},
            plugins: {
                title: {
                    display: true,
                    text: 'Character Stats',
                }
            },
        }
    });
    
</script>