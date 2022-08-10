<script type="Text/Javascript">
    // let karaktercount = {!! json_encode($karakter->count()) !!};
    let month = {!! json_encode($month) !!};
    let easyuser = {!! json_encode($userArreasy) !!};
    // console.log(easyuser.jumlah);
    // var output = easyuser.map(({jumlah}) => jumlah);
    easyuser.forEach(element => {
        console.log(element);
    });
    // console.log(easyuser['jumlah']);
    // for (let item of easyuser) {
    //     output.push(item.jumlah);
    // }
    // console.log(output);
    console.log(easyuser["jumlah"]);
    console.log(month);

    let customcount = {!! json_encode($karakter->where('bahasa_id', 1)->count()) !!};
    // customcount = customcount*100/karaktercount;
    let indonesiacount = {!! json_encode($karakter->where('bahasa_id', 2)->count()) !!};
    // indonesiacount = indonesiacount*100/karaktercount;
    let inggriscount = {!! json_encode($karakter->where('bahasa_id', 3)->count()) !!};
    // inggriscount = inggriscount*100/karaktercount;

    var xValues = month;
    var yValues = [7,8,8,9,9,9,10,11,14,14,15,50];
    var easymode = easyuser;
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
            label: "Mudah Teks",
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,0,255,1.0)",
            borderColor: "rgba(0,0,255,0.1)",
            data: easymode,
            pointBackgroundColor: "green",
            backgroundColor: "green",
            borderColor: "#97ffbb"
        },{
            label: "Normal Teks",
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,0,255,1.0)",
            borderColor: "rgba(0,0,255,0.1)",
            data: normalmode,
            borderColor: "#ffdda1",
            pointBackgroundColor: "orange",
            backgroundColor: "orange"
        },{
            label: "Susah Teks",
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
            data: [customcount, indonesiacount, inggriscount],
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
                    text: 'Statistik Karakter',
                }
            },
        }
    });
    
</script>