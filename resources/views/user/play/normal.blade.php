{{-- @extends('layouts.master') --}}
{{-- @include('layouts.top') --}}
{{-- <!doctype HTML5>
<html>
<head>
    @include('layouts.top')
</head>

<body>
    @include('layouts.navigation') --}}
    {{-- <div id="app">
        @include('layouts.navigation')
        <main class="" id="main">
            @yield('content')
        </main>
    </div>

    @include('layouts.bottom') --}}
{{-- </body>
</html>
@include('layouts.navigation') --}}

{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Normal - NgeTeks</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('bagus/beta/style.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5 py-2 mb-5">
        <a href="{{route('welcome')}}" class="navbar-brand p-0">
            <h1 class="m-0 font-nunnis"><i class="fa fa-keyboard me-2 text-white"></i>NgeTeks</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
            @auth
                <a href="{{route('home')}}" class="btn btn-primary py-2 px-4 ms-3">Home</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="btn btn-danger py-2 px-4 ms-3">Keluar</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @else
                @if(Route::has('login'))
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary py-2 px-4 ms-3">Register</a>
                    @endif
                @endif
            @endauth
        </div>
    </nav>

    {{-- <div class="card m-5 shadow border-none">
        <div class="wrapper">
            <textarea name="text" class="input-field" id="" cols="30" rows="10"></textarea>
            <div class="content-box">
                <p id="timeout" class="text-center"></p>
                <div class="typing-text">
                    <p></p>
                </div>
                <div class="content d-flex align-items-center">
                    <ul class="result-details m-0">
                        <li class="time">
                            <p class="m-0">Time left:</p>
                            <span><b>0</b>s</span>
                        </li>
                        <li class="mistake">
                            <p class="m-0">Mistakes:</p>
                            <span>0</span>
                        </li>
                        <li class="wpm">
                            <p class="m-0">WPM:</p>
                            <span>0</span>
                        </li>
                        <li class="cpm">
                            <p class="m-0">CPM:</p>
                            <span>0</span>
                        </li>
                    </ul>
                    <button>Try</button>
                </div>
            </div>
        </div>
    </div> --}}
    
    <div class="card m-5 shadow border-none">
        <div class="wrapper">
            <textarea name="text" class="input-field" id="" cols="30" rows="10"></textarea>
            <div class="content-box">
                <p id="timeout" class="text-center"></p>
                <div class="typing-text">
                    <p></p>
                </div>
                <div class="content d-flex align-items-center">
                    <ul class="result-details m-0">
                        <li class="time">
                            <p class="m-0">Time left:</p>
                            <span><b>0</b>s</span>
                        </li>
                        <li class="mistake">
                            <p class="m-0">Mistakes:</p>
                            <span>0</span>
                        </li>
                        <li class="wpm">
                            <p class="m-0">WPM:</p>
                            <span>0</span>
                        </li>
                        <li class="cpm">
                            <p class="m-0">CPM:</p>
                            <span>0</span>
                        </li>
                    </ul>
                    <button>Try</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/JavaScript">
        // {{-- var coba = {!! json_encode($kata->toArray()) !!}; --}}
        var co = {!! json_encode($kata) !!};
        // var co = <?php echo json_encode($kata); ?>;

        const typingText = document.querySelector(".typing-text p"),
        inpField = document.querySelector(".wrapper .input-field"),
        mistageTag = document.querySelector(".mistake span"),
        timeTag = document.querySelector(".time span b"),
        wpmTag = document.querySelector(".wpm span"),
        cpmTag = document.querySelector(".cpm span");
        btnTry = document.querySelector("button");
        timeout = document.getElementById("timeout");

        let timer,
        maxTime = 0,
        timeLeft = maxTime,
        charIndex = mistakes = isTyping = 0;


        function randomParagraph() {
            let randTeks = Math.floor(Math.random() * co.length);
            typingText.innerHTML = "";
            var teks = co[randTeks].karakter.toString().replace(/(\r\n|\n|\r)/gm, "\n");

            teks.split("").forEach(span => {
                let spanTag = `<span>${span}</span>`;
                typingText.innerHTML += spanTag;
            });

            typingText.querySelectorAll("span")[0].classList.add("active");

            document.addEventListener("keydown", () => inpField.focus());
            typingText.addEventListener("click", () => inpField.focus());
        }

        function initTyping() {
            const characters = typingText.querySelectorAll("span");
            let typeChar = inpField.value.split("")[charIndex];
            // console.log(typeChar);
            if (charIndex < characters.length - 1 && timeLeft > -1) {
                if(!isTyping){
                    // console.log(isTyping);
                    timer = setInterval(initTimer, 1000);
                    isTyping = true;
                }
                // characters[charIndex].innerHTML.(&lt;, "<");
                // console.log(characters[charIndex].innerText);
                if(typeChar == null){
                    charIndex--;
                    if(characters[charIndex].classList.contains("incorrect")){
                        mistakes--;
                    }
                    characters[charIndex].classList.remove("correct", "incorrect");
                }else{
                    if(characters[charIndex].innerText === typeChar){
                        // character same
                        characters[charIndex].classList.add("correct");
                        console.log("correct");
                    }else{
                        // charachter not same
                        mistakes++;
                        characters[charIndex].classList.add("incorrect");
                        console.log("incorrect");
                    }
                    charIndex++;
                    // console.log(charIndex);
                }
                characters.forEach(span => span.classList.remove("active"));
                characters[charIndex].classList.add("active");
            
                let wpm = Math.round((((charIndex - mistakes) / 5) / (maxTime - timeLeft)) * 60);
                
                wpm = wpm < 0 || wpm === Infinity ? 0 : wpm;
                mistageTag.innerHTML = mistakes;
                wpmTag.innerText = wpm;
                cpmTag.innerText = charIndex - mistakes;
            } else {
                inpField.value = "";
                timeout.innerText = "Finish";
                timeout.style.color = "green";
                clearInterval(timer);
            }
        }

        function initTimer(){
            if(timeLeft > -1){
                timeLeft++;
                timeTag.innerText = timeLeft;
            }else {
                clearInterval(timer);
                timeout.innerText = "waktu habis";
                timeout.style.color = "red";
            }
        }
        // console.log(paragraphs);
        // console.log(paragraphs.replace(/(\r\n|\n|\r)/gm, ""));

        function reset(){
            randomParagraph();
            inpField.value = "";
            timeout.innerText = "";
            timeout.style.color = "";
            clearInterval(timer);
            timeLeft = maxTime,
            charIndex = mistakes = isTyping = 0;
            timeTag.innerText = timeLeft;
            mistageTag.innerText = mistakes;
            wpmTag.innerText = 0;
            cpmTag.innerText = 0;

        }
        
        randomParagraph();
        inpField.addEventListener("input", initTyping);
        btnTry.addEventListener("click", reset);
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> --}}
</body>
</html>
{{-- @endsection --}}