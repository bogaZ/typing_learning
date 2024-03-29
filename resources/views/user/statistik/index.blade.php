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
<body class="">
    
    <div id="app">
        @include('layouts.navigation')
    </div>
    <div class="container">
        <h3 class="fw-bold text-center m-5">Menu statistik</h3>
        <a href="{{route('home')}}" class="text-decoration-none fw-bold">kembali</a>
        <div class="row p-3">
            <div class="card p-3 shadow border-none mb-3 col-lg-8">
                <div class="d-flex justify-content-center">
                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                </div>
                <div class="d-flex flex-column p-3 border">
                    <div>
                        <div class="text-center">Nilai tertinggi:</div>
                        
                        <div class="d-flex justify-content-around">
                            <div>Mudah= <span>{{$maxnilai->where('user_id', $uid)->where('kesulitan', 'mudah')->max('speed_typing')}}</span></div>
                            <div>Normal= <span>{{$maxnilai->where('user_id', $uid)->where('kesulitan', 'normal')->max('speed_typing')}}</span></div>
                            <div>Hard= <span>{{$maxnilai->where('user_id', $uid)->where('kesulitan', 'susah')->max('speed_typing')}}</span></div>
                            <div>Programing= <span>{{$maxnilai->where('user_id', $uid)->where('kesulitan', 'pemrograman')->max('speed_typing')}}</span></div>
                        </div>
                        {{-- <div class="text-center">Level:</div>
                        
                        <div class="d-flex justify-content-around">
                            <div>Mudah= <span>{{$maxnilai->where('user_id', $uid)->where('kesulitan', 'mudah')->max('speed_typing')}}</span></div>
                            <div>Normal= <span>{{$maxnilai->where('user_id', $uid)->where('kesulitan', 'normal')->max('speed_typing')}}</span></div>
                            <div>Hard= <span>{{$maxnilai->where('user_id', $uid)->where('kesulitan', 'susah')->max('speed_typing')}}</span></div>
                            <div>Programing= <span>{{$maxnilai->where('user_id', $uid)->where('kesulitan', 'pemrograman')->max('speed_typing')}}</span></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="card p-3 shadow border-none col-lg-3 mb-3 justify-content-around">
                <div class="d-flex justify-content-center">
                    <h3 class="fw-bold">5 Pengguna Tercepat</h3>
                </div>
                <div class="d-flex flex-column text-dark fw-bold rounded border p-5">
                    @foreach($toptyping as $row => $data)
                    <p class="limittext m-0">{{++$row}}. {{$data->user->name}}</p><span class="mb-2"> speed: {{$data->speed_typing}} kpm</span>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row p-3">
            <div class="card p-3 shadow border-none col-md-12">
                <div class="d-flex justify-content-center">
                    <canvas id="myChartPerform" style="width:100%;max-width:800px"></canvas>
                </div>
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <label for="pilihwaktugrafik" class="fw-bold">Pilih Jenis Statistik: </label>
                    <select name="" id="pilihwaktugrafik" class="col-2 form-control">
                        <option value="easy">mudah</option>
                        <option value="normal">normal</option>
                        <option value="hard">susah</option>
                        <option value="pemrograman">pemrograman</option>
                    </select>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
        <div class="card p-5 shadow border-none my-3">
            <div class="text-center fw-bold h5">Riwayat Bermain</div>
            <table id="example1" class="display my-3 border rounded rounded-3 border-dark" style="width:100%">
                <thead class="gradienbiru text-white">
                    <tr>
                        {{-- <th>Nama Pembuat</th> --}}
                        {{-- <th>Nama text</th> --}}
                        {{-- <th>Action</th> --}}
                        <th>No</th>
                        <th>Teks</th>
                        <th>Kesulitan</th>
                        <th>Bahasa</th>
                        <th>Skor Mengetik</th>
                        <th>huruf benar</th>
                        <th>Waktu</th>
                        <th>Waktu Mengetik</th>
                    </tr>
                </thead>
                <tbody class="gradienbiru2 text-dark">
                    @forelse ($alldata as $i => $data)
                    <tr>
                        <td>{{++$i}}</td>
                        <td class="limittext">{{$data->karakter->karakter}}</td>
                        <td>{{$data->karakter->type->name}}</td>
                        <td>
                            @if ($data->karakter->pemrograman_id == null)
                            {{$data->karakter->bahasa->bahasa}}
                            @else
                            {{$data->karakter->pemrograman->bahasa}}
                            @endif
                        </td>
                        <td>{{$data->speed_typing}} Kpm</td>
                        <td>{{$data->benar}}</td>
                        <td>{{$data->time}} detik</td>
                        <td>{{$data->created_at}}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8">
                            <p class="text-danger p-1 text-center">belum mengetik</p> 
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            {{-- {{$easy->speed_typing}} --}}
        </div>
    </div>
    {{-- <script>
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
    </script> --}}
    @include('user.pengaturan.profil')
    @include('user.statistik.show')
    @include('layouts.bottom')
</body>
</html>


