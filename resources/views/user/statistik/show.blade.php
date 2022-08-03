@role('user')
<script>
    var yValues = [
        @foreach($userArr as $data)
        '{{$data}}',
        @endforeach
    ];
    var xValues = ["jan", "feb", "mar", "apr", "mei", "jun", "jul", "agu", "sep", "okt", "nov", "des"];

    new Chart("myChart", {
        type: "line",
        data: {
            label:"a",
            labels: xValues,
            datasets: [{
                label: "Jumlah User mengetik",
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: yValues,
                backgroundColor: "green",
                borderColor: "#97ffbb"
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {display: false},
            plugins: {
                title: {
                    display: true,
                    text: 'Statistik Jumlah Dimainkan',
                    padding: {
                        top: 10,
                        bottom: 30
                    },
                    font: {
                        size: 16
                    }
                }
            },
            scales: {
                yValues: {
                    title: {
                        display: true,
                        text: 'Score',
                        font: {
                            size: 15
                        }
                    },
                    beginAtZero: true,
                    //   max: 300,
                },
                xValues: {
                    title: {
                        display: true,
                        text: 'Bulan',
                        font: {
                            size: 15
                        }
                    }
                }
            }
        }
    });
    $('#pilihwaktugrafik').on('change', function() {
        // console.log(this.value);
        myChartPerform.update();
    });
</script>

<script>
    var easyData = [
        @foreach($easy->reverse() as $data)
        '{{$data->speed_typing}}',
        @endforeach
    ];
    var normalData = [
        @foreach($normal->reverse() as $data)
        '{{$data->speed_typing}}',
        @endforeach
    ];
    var hardData = [
        @foreach($hard->reverse() as $data)
        '{{$data->speed_typing}}',
        @endforeach
    ];
    var pemrogramanData = [
        @foreach($pemrograman->reverse() as $data)
        '{{$data->speed_typing}}',
        @endforeach
    ];
    // console.log(easyData[0].speed_typing);
    // easyData.forEach(element => {
    //     easyData = element.speed_typing;
    //     console.log(easyData);
    // });

    var xPerform = [1,2,3,4,5,6,7,8,9,10];
    var xPerformWeek = [1,2,3,4,5,6,7];
    console.log(xPerform);
    const myChartPerform = new Chart("myChartPerform", {
        type: "line",
        data: {
            label:"a",
            labels: xPerform,
            datasets: [{
                label: "Easy",
                fill: false,
                lineTension: 0,
                backgroundColor: "rgba(0,0,255,1.0)",
                borderColor: "rgba(0,0,255,0.1)",
                data: [
                    @foreach($easy->reverse() as $data)
                    '{{$data->speed_typing}}',
                    @endforeach
                ],
                backgroundColor: "blue",
                borderColor: "#dad9ff"
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {display: false},
            plugins: {
                title: {
                    display: true,
                    text: 'Statistik 10 Permainan Terakhir',
                    padding: {
                        top: 10,
                        bottom: 30
                    },
                    font: {
                        size: 16
                    }
                }
            },
            scales: {
                yValues: {
                    title: {
                        display: true,
                        text: 'Score (Kpm)',
                        font: {
                            size: 15
                        }
                    },
                    beginAtZero: true,
                    //   max: 300,
                },
                xValues: {
                    title: {
                        display: true,
                        // text: '10 permainan terakhir'
                    }
                }
            }
        }
    });


    $('#pilihwaktugrafik').on('change', function() {
        // console.log(this.value);
        if(this.value == "easy"){
            // myChartPerform.data.labels = xPerformWeek;
            myChartPerform.data.datasets[0].label = "Easy";
            myChartPerform.data.datasets[0].data = easyData;
        }
        if(this.value == "normal"){
            myChartPerform.data.datasets[0].label = "Normal";
            myChartPerform.data.datasets[0].data = normalData;
        }
        if(this.value == "hard"){
            myChartPerform.data.datasets[0].label = "Hard";
            myChartPerform.data.datasets[0].data = hardData;
        }
        if(this.value == "pemrograman"){
            myChartPerform.data.datasets[0].label = "Pemrograman";
            myChartPerform.data.datasets[0].data = pemrogramanData;
        }
        myChartPerform.update();
    });
</script>
@endrole