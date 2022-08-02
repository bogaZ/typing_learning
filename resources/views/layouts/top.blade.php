<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>
<link rel="icon" href="{{asset('bagus/img/icontittle.png')}}" type="image/x-icon">
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> --}}

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" integrity="sha512-qzrZqY/kMVCEYeu/gCm8U2800Wz++LTGK4pitW/iswpCbjwxhsmUwleL1YXaHImptCHG0vJwU7Ly7ROw3ZQoww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
{{-- bs --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --}}

{{-- datatable css --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

{{-- codemirror --}}
@role('user')
{{-- css --}}
{{-- <link rel="stylesheet" href="{{asset('bagus/play/style.css')}}"> --}}
{{-- js --}}
<link rel="stylesheet" href="{{ asset('codemirror/lib/codemirror.css')}}">
<link rel="stylesheet" href="{{ asset('codemirror/theme/dracula.css')}}">
<script src="{{ asset('codemirror/lib/codemirror.js') }}"></script>
<script src="{{ asset('codemirror/mode/xml/xml.js')}}"></script>



@endrole


{{-- datatable js --}}
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" defer></script>
<script>
  $(document).ready(function () {
    $('#example1').DataTable();
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.js"></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{-- <style>
  .canvasjs-chart-credit{
    display: none !important;
  }
</style> --}}
@role('admin')
    <style>

        body {
          font-family: "poppins", sans-serif;
          background: rgb(2,0,36);
          background: linear-gradient(135deg, rgba(2,0,36,1) 0%, rgba(230,230,255,1) 0%, rgba(245,246,255,1) 100%);
        }
        
        .gradienbiru1 {
          font-family: "poppins", sans-serif;
          background: rgb(2,0,36);
          background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(59,59,255,1) 0%, rgba(197,202,255,1) 100%);
        }
        .gradienbiru2 {
          font-family: "poppins", sans-serif;
          background: rgb(2,0,36);
          background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(230,230,255,1) 0%, rgba(233,237,255,1) 100%);
        }

        .gradienbiru {
          background: rgb(2,0,36);
          background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(0,108,255,1) 0%, rgba(148,174,255,1) 100%);
        }
        .gradienmerah {
          background: rgb(2,0,36);
          background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(219,0,0,1) 0%, rgba(255,101,101,1) 100%);
        }
        .gradienhijau {
          background: rgb(2,0,36);
          background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(8,219,0,1) 0%, rgba(156,245,146,1) 100%);
        }

        .aktif-link {
          border-right: solid 4px;
          /* border-bottom: solid 1px; */
          color: #3490dc;
          background-color: rgb(205, 223, 255)
          /* border-color: #3490dc; */
        }
        /* .icon-aktif{
          color: #3490dc;
        } */

        nav div a{
          color: grey;
          border-bottom: transparent 1px solid;
        }
        
        .sidebar {
          height: 100%;
          width: 75px;
          position: fixed;
          top: 0;
          left: 0;
          overflow-x: hidden;
          transition: 0.7s;
          padding-top: 60px;
        }
        
        .sidebar a {
          padding: 8px 32px 8px 32px;
          text-decoration: none;
          display: block;
          transition: 0.7s;
        }
        
        .sidebar a:hover {
          background-color: #3490dc;
          color: white;
        }
        .bi {
          color: black;
        }
        
        .sidebar .closebtn {
          position: absolute;
          top: 0;
          font-size: 36px;
        }
        
        .openbtn {
          font-size: 20px;
          cursor: pointer;
          color: rgb(255, 255, 255);
          padding: 10px 15px;
          border: none;
        }
        
        .openbtn:hover {
          background-color: rgb(0, 0, 0);
        }
        
        #main {
          margin-left: 75px;
          transition: 0.7s;
        }
        #nav {
          transition: 0.7s;
          padding: 16px;
        }

        .closebtn {
            left: 210px;
        }
        
        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
          .sidebar {padding-top: 15px;}
          .sidebar a {font-size: 18px;}
        }

        .limittext{
          overflow: hidden;
          text-overflow: ellipsis;
          max-width: 350px;
          white-space: nowrap;
        }

        #example1_wrapper{
          overflow: auto;
        }
    </style>
@endrole

@role('user')
<style>
  body{
    background-image: url('{{asset('bagus/img/bg-image.png')}}');
    background-repeat: no-repeat;
    background-size: 100% 100%;
  }
  #example1_wrapper{
    overflow: auto;
  }
</style>
<style>
  .limittext{
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 350px;
    white-space: nowrap;
  }
  
  .gradienbiru2 {
    font-family: "poppins", sans-serif;
    background: rgb(2,0,36);
    background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(230,230,255,1) 0%, rgba(233,237,255,1) 100%);
  }

  .gradienbiru {
    background: rgb(2,0,36);
    background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(0,108,255,1) 0%, rgba(148,174,255,1) 100%);
  }
</style>
@endrole


@auth
@if(Route::has('playnormal'))
<style>
  .bg-play {
    background: rgb(160 203 255);
  }
</style>
<link rel="stylesheet" href="{{asset('bagus/beta/style.css')}}">
  
@endif
@endauth

@guest
<style>
  body{
    background-image: url('{{asset('bagus/img/bg-image.png')}}');
    background-repeat: no-repeat;
    background-size: 100% 100%;
  }
</style>

<style>
  .limittext{
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 350px;
    white-space: nowrap;
  }
  
  .gradienbiru2 {
    font-family: "poppins", sans-serif;
    background: rgb(2,0,36);
    background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(230,230,255,1) 0%, rgba(233,237,255,1) 100%);
  }

  .gradienbiru {
    background: rgb(2,0,36);
    background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(0,108,255,1) 0%, rgba(148,174,255,1) 100%);
  }
</style>
<style>
  .bg-play {
    background: rgb(160 203 255);
  }
</style>
<link rel="stylesheet" href="{{asset('bagus/beta/style.css')}}">
@endguest