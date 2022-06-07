@extends('layouts.master')

@section('content')
<div class="m-4">
    <div class="d-flex">
        <div class="col-md-4">
            <button class="btn openbtn btn-primary open" id="bukanav" type="button">
                <span id="icbukanav" class="fa fa-bars"></span>
            </button>
        </div>
        <div class="col-md-4">
            <h3 class="text-center">Pagename</h3>
        </div>
        <div class="col-md-4">
            <a href="">tes</a>
        </div>
    </div>
</div>
<div class="d-flex justify-content-between mx-4">
    <div style="border-radius: 10px" class="shadow col-md-3 gradienbiru p-2">
        <div class="d-flex flex-column">
            <h6 class="text-center text-white fw-bold">User</h6>
            <i class="bi bi-person" style="font-size: 50px"></i>
            <button class="btn btn-light mx-5 text-center" style="border-radius: 20px" type="button">View</button>
        </div>
    </div>
    <div style="border-radius: 10px" class="shadow col-md-3 gradienbiru p-2">
        <div>
            <h6 class="text-center text-white fw-bold">Statistik</h6>
        </div>
    </div>
    <div style="border-radius: 10px" class="shadow col-md-3 gradienbiru p-2">
        <div>
            <h6 class="text-center text-white fw-bold">Notification</h6>
        </div>
    </div>
</div>
<div class="d-flex justify-content-between m-4">
    <div class="col-md-8 p-0">p</div>
    <div class="col-md-3 p-0">p</div>
</div>
{{-- script --}}
<script>
    $(document).ready(function () {
        $('#bukanav').click(function () {
            // $('#dashboard').text('/menuplay')
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
</script>
@endsection