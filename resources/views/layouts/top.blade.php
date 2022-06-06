<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

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


<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@role('admin')
    <style>
        body {
          /* font-family: "Lato", sans-serif; */
        }

        i {
          color: grey;
        }
        i:visited {
          color: #3490dc;
        }
        /* i:active {
          color: #3490dc;
        } */
        /* .link-aktif:hover {
          color: #3490dc;
        } */
        
        .sidebar {
          height: 100%;
          width: 75px;
          position: fixed;
          /* z-index: 1; */
          top: 0;
          left: 0;
          overflow-x: hidden;
          transition: 0.7s;
          padding-top: 60px;
        }
        
        .sidebar a {
          padding: 8px 32px 8px 32px;
          text-decoration: none;
          font-size: 18px;
          display: block;
          transition: 0.7s;
        }
        
        .sidebar a:hover {
          color: #020101;
        }
        
        .sidebar .closebtn {
          position: absolute;
          top: 0;
          /* right: 25px; */
          font-size: 36px;
          /* margin-left: 50px; */
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
          /* padding: 16px; */
        }
        #nav {
          transition: 0.7s;
          padding: 16px;
        }

        .closebtn {
            left: 210px;
        }

        /* div .btnclosed {
            padding-left: 30px;
            padding-top: 30px;
            position: absolute;
            right: 0;
        } */
        
        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
          .sidebar {padding-top: 15px;}
          .sidebar a {font-size: 18px;}
        }
    </style>
@endrole