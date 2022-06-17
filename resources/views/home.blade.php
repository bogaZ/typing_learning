@extends('layouts.master')

@section('content')
@role('user')
    <div class="container">
        @if (session('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
        @endif
        {{-- user home --}}
        {{-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="shadow p-3 mb-5 rounded border border-dark bg-white">
                    <div class="card-body">
                        <div class="my-5 mx-5" id="content">
                            <h6 class="text-center fw-bold">Pilih Bahasa</h6>
                            <br>
                            <div class="row">
                                <div class="d-grid mx-auto">
                                    <button id="bahasaindonesia" class="btn btn-primary block fw-bold">bahasa indonesia</button>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="d-grid mx-auto">
                                    <button id="bahasainggris" class="btn btn-primary block fw-bold">bahasa inggris</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- user bahasa --}}
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="shadow p-3 mb-5 rounded border border-dark bg-white">
                    <div class="card-body">
                        <div class="my-5 mx-5" id="content">
                            {{-- <div class="row">
                                <div class="d-grid mx-auto">
                                    <button id="kembali" class="btn btn-danger block">Kembali</button>
                                </div>
                            </div>
                            <br> --}}
                            <div class="" id="content">
                                <h6 class="text-center fw-bold">Pilih</h6>
                                <br>
                                <div class="row">
                                    <div class="d-grid mx-auto">
                                        <button id="mulai" class="btn btn-primary block fw-bold">Mulai</button>
                                    </div>
                                    {{-- {{$kata}}
                                    <br>
                                    jumlah:
                                    {{$jumlahkata}} --}}
                                </div>
                                <br>
                                <div class="row">
                                    <div class="d-grid mx-auto">
                                        <button id="custom" class="btn btn-primary block fw-bold">Buat Karakter</button>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="d-grid col-md-6 justify-content-md-start">
                                    <button id="setting" class="btn btn-secondary block"><i class="bi bi-gear-fill"></i></button>
                                </div>
                                <div class="d-grid col-md-6 justify-content-md-end">
                                    <button id="reload" class="btn btn-secondary block"><i class="bi bi-arrow-clockwise"></i></button>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $('#mulai').click(function () {
                                        $('#content').load('/menuplay')
                                    })
                                    $('#custom').click(function () {
                                        $('#content').load('/menucustom')
                                    })
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endrole
{{-- end user home --}}

{{-- admin home --}}
@role('admin')
<div class="m-4">
    <div class="d-flex">
        <div class="col-md-4 p-0">
            <button class="btn openbtn btn-primary open" id="bukanav" type="button">
                <span id="icbukanav" class="fa fa-bars"></span>
            </button>
        </div>
        <div class="d-flex align-items-center justify-content-center col-md-4 p-0 m-0">
            <h3 class="m-0 fw-bold">Home</h3>
        </div>
        <div class="d-flex align-items-center flex-row-reverse col-md-4 p-0">
            <p class="m-0">
                <a href="#"></a>
                Dashboard
            </p>
        </div>
    </div>
</div>
<div class="d-flex justify-content-between mx-4">
    <div class="p-0 shadow col-md-3 gradienbiru">
        <div class="d-flex flex-column">
            <h6 class="text-center text-white fw-bold p-2 border-bottom m-0">User</h6>
            <div class="px-4 py-2 d-flex align-items-center justify-content-between">
                <i class="bi bi-person text-white" style="font-size: 50px"></i>
                <div class="d-flex justify-content-evenly">
                    <span class="h4 m-0 text-white">{{$jumlahuser}}</span>
                    <p class="text-white m-0">&nbsp;pendaftar</p>
                </div>
            </div>
            {{-- <a href="{{route('user.index')}}" class="btn btn-light mx-5 text-center" style="border-radius: 20px" type="button">View</a> --}}
        </div>
        <a href="{{route('user.index')}}" class="bg-primary d-flex justify-content-center p-2 text-decoration-none text-white">view</a>
    </div>
    <div class="p-0 shadow col-md-3 gradienbiru">
        <div class="d-flex flex-column">
            <h6 class="text-center text-white fw-bold p-2 border-bottom m-0">Statistik</h6>
            <div class="px-4 py-2 d-flex align-items-center justify-content-between">
                <i class="bi bi-graph-up text-white" style="font-size: 50px"></i>
                <div class="d-flex">
                    <span class="h4 m-0 text-white">{{$jumlahuser}}</span>
                    <p class="text-white m-0">&nbsp;pengunjung</p>
                </div>
            </div>
            {{-- <a href="{{route('user.index')}}" class="btn btn-light mx-5 text-center" style="border-radius: 20px" type="button">View</a> --}}
        </div>
        <a href="{{route('user.index')}}" class="bg-primary d-flex justify-content-center p-2 text-decoration-none text-white">view</a>
    </div>
    <div class="p-0 shadow col-md-3 gradienbiru">
        <div class="d-flex flex-column">
            <h6 class="text-center text-white fw-bold p-2 border-bottom m-0">Notification</h6>
            <div class="px-4 py-2 d-flex align-items-center justify-content-between">
                <i class="bi bi-bell text-white" style="font-size: 50px"></i>
                <div class="d-flex">
                    <span class="h4 m-0 text-white">{{$jumlahuser}}</span>
                    <p class="text-white m-0">&nbsp;pemberitahuan</p>
                </div>
            </div>
            {{-- <a href="{{route('user.index')}}" class="btn btn-light mx-5 text-center" style="border-radius: 20px" type="button">View</a> --}}
        </div>
        <a href="{{route('user.index')}}" class="bg-primary d-flex justify-content-center p-2 text-decoration-none text-white">view</a>
    </div>
    {{-- <div style="border-radius: 10px" class="shadow col-md-3 gradienbiru p-2">
        <div>
            <h6 class="text-center text-white fw-bold">Statistik</h6>
        </div>
    </div>
    <div style="border-radius: 10px" class="shadow col-md-3 gradienbiru p-2">
        <div>
            <h6 class="text-center text-white fw-bold">Notification</h6>
        </div>
    </div> --}}
</div>
<div class="d-flex justify-content-between m-4">
    <div class="col-md-8 p-0">p</div>
    <div class="col-md-3 p-0">p</div>
</div>
{{-- script --}}
{{-- <script>
    $(document).ready(function () {
        $('#bukanav').click(function () {
            if($('#bukanav').hasClass('open')){
                $('#bukanav').removeClass('open btn-primary');
                $('#bukanav').addClass('btn-danger');
                $('#icbukanav').removeClass('fa fa-bars');
                $('#icbukanav').addClass('fa fa-times');
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }else{
                $('#bukanav').removeClass('btn-danger');
                $('#bukanav').addClass('open btn-primary');
                $('#icbukanav').removeClass('fa fa-times');
                $('#icbukanav').addClass('fa fa-bars');
                document.getElementById("mySidebar").style.width = "75px";
                document.getElementById("main").style.marginLeft= "75px";
            }
        })
    });
</script> --}}

{{-- chart --}}
{{-- <script>
    window.onload = function () {
    
    var dataPoints = [];
    
    var options = {
        theme: "light2",
        title: {
            text: "Live Chart from JSON Data"
        },
        data: [{
            type: "spline",
            dataPoints: dataPoints
        }]
    };
    
    $("#chartContainer").CanvasJSChart(options);
    updateData();
    
    // Initial Values
    var xValue = 0;
    var yValue = 10;
    var newDataCount = 6;
    
    function addData(data) {
        if (newDataCount != 1) {
            $.each(data, function (key, value) {
                dataPoints.push({ x: value[0], y: parseInt(value[1]) });
                xValue++;
                yValue = parseInt(value[1]);
            });
            newDataCount = 1;
        } else {
            //dataPoints.shift();
            dataPoints.push({ x: data[0][0], y: parseInt(data[0][1]) });
            xValue++;
            yValue = parseInt(data[0][1]);
        }
        $("#chartContainer").CanvasJSChart().render();
        setTimeout(updateData, 1500);
    }
    
    function updateData() {
        $.getJSON("https://canvasjs.com/services/data/datapoints.php?xstart=" + xValue + "&ystart=" + yValue + "&length=" + newDataCount + "type=json", addData);
    }
    
    }
</script> --}}

<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script>
    document.getElementById("dashboard").classList.add("aktif-link");
</script>
@endrole
{{-- end admin home --}}
@endsection
