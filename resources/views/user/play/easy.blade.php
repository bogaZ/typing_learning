{{-- <div class="row">
    <div class="col-md-4">
        <div class="mx-auto">
            <a id="kembali" href="javascript:void(0)" class="text-decoration-none fw-bold">Kembali</a>
        </div>
    </div>
    <div class="col-md-4">
        <h6 class="fw-bold text-center">Easy Mode</h6>
    </div>
    <div>
        <h6 class="fw-bold text-center border">{{$kata}}</h6>
        <div class="d-flex justify-content-between">
            <p>Jumlah kata: {{$jumlahkata}}</p>
            <p>Waktu sisa: </p>
        </div>
    </div>
    <div class="col-md-10">
        <textarea id="mengetikkata" class="form-control" placeholder="ketik disini....." style="overflow: hidden; resize: none; height: 150px"></textarea>
    </div>
    <div class="col-md-2 d-grid">
        <span>Score: </span>
    </div>
</div> --}}
{{-- <script>
    $('textarea').maxlength({
        alwaysShow: true,
        threshold: 10,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger",
        separator: ' out of ',
        preText: 'You write ',
        postText: ' chars.',
        validate: true
     });
</script> --}}
{{-- <script>
    var tingkatkesulitan = '{{route('tingkatkesulitan')}}';
    $(document).ready(function(){
        $('#kembali').click(function () {
            $('#content').load(tingkatkesulitan)
        })
    })
</script> --}}
{{-- <script>
    $(document).ready(function(){
        $('#kembali').click(function () {
            if(document.getElementById)
            $('#content').load('/pertanyaanktp')
            elseif(id 2)
            $('#content').load('/pertanyaanktp')
            elseif(id 3)
            $('#content').load('/pertanyaanktp')
            else
        })
    })
</script> --}}
{{-- <script>
    var mengetikkata = CodeMirror.fromTextArea(
        document.getElementById('mengetikkata'),{
            mode: "xml",
            theme: "dracula",
            lineNumbers: true,
            autoCloseTags: true
        }
    )
</script> --}}

{{-- <div class="wrapper">
    <textarea name="text" class="input-field" id="" cols="30" rows="10"></textarea>
    <div class="content-box">
        <p id="timeout" class="text-center"></p>
        <div class="typing-text">
            <p>{{$kata}}</p>
        </div>
        <div class="content">
            <ul class="result-details">
                <li class="time">
                    <p>Time left:</p>
                    <span><b>0</b>s</span>
                </li>
                <li class="mistake">
                    <p>Mistakes:</p>
                    <span>0</span>
                </li>
                <li class="wpm">
                    <p>WPM:</p>
                    <span>0</span>
                </li>
                <li class="cpm">
                    <p>CPM:</p>
                    <span>0</span>
                </li>
            </ul>
            <button>Try</button>
        </div>
    </div>
</div> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mode mudah - NgeTeks</title>
    <link rel="stylesheet" href="{{asset('bagus/beta/style.css')}}"> --}}

    @include('layouts.top')
</head>
<body class="bg-play">
    @include('layouts.navigation')
{{-- @extends('layouts.master')

@section('content') --}}
    {{-- <div class="d-flex justify-content-center"> --}}
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-none">
                    <div class="wrapper">
                        <textarea name="text" class="input-field" id="" cols="30" rows="10"></textarea>
                        <div class="content-box">
                            <p id="timeout" class="text-center"></p>
                            <div class="typing-text">
                                <p></p>
                            </div>
                            <div class="content d-flex">
                                <ul class="result-details m-0 d-flex align-items-center p-0">
                                    <li class="time">
                                        <p class="m-0">Time:</p>
                                        <span><b>0</b>s</span>
                                    </li>
                                    <li class="mistake">
                                        <p class="m-0">Miss:</p>
                                        <span>0</span>
                                    </li>
                                    <li class="wpm">
                                        <p class="m-0">Words:</p>
                                        <span>0</span>
                                    </li>
                                    <li class="cpm">
                                        <p class="m-0">Correct:</p>
                                        <span>0</span>
                                    </li>
                                </ul>
                                <button id="resettext" class="btn btn-dark">Reset Karakter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
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
        btnTry = document.querySelector("#resettext");
        timeout = document.getElementById("timeout");

        let timer,
        maxTime = 0,
        timeLeft = maxTime,
        charIndex = mistakes = isTyping = charcpm = 0;


        function randomParagraph() {
            let randTeks = Math.floor(Math.random() * co.length);
            typingText.innerHTML = "";
            var teks = co[randTeks].karakter.toString().replace(/(\r\n|\n|\r)/gm, "\n");
            // console.log(co[randTeks].karakter.trim());
            teks.split("").forEach(span => {
                let spanTag = `<span>${span}</span>`;
                typingText.innerHTML += spanTag;
            });

            // var words = $('#name').val().split(' ');
            // teks.split(' ').forEach(span =>{
            //     let spanTag = `<span>${span}</span>`;
            //     typingText.innerHTML += spanTag;
                // console.log(spanTag);
            // });

            typingText.querySelectorAll("span")[0].classList.add("active");

            document.addEventListener("keydown", () => inpField.focus());
            typingText.addEventListener("click", () => inpField.focus());
        }

        function initTyping() {
            const characters = typingText.querySelectorAll("span");
            // const charwords = typingText.querySelectorAll("span");
            let typeChar = inpField.value.split("")[charIndex];
            let TypeWords = inpField.value.split("")[charcpm];
            // console.log(TypeWords);
            // console.log(characters[0].innerText.split(""));
            if (charIndex < characters.length - 1 && timeLeft > -1) {
                if(!isTyping){
                    // console.log(isTyping);
                    timer = setInterval(initTimer, 1000);
                    isTyping = true;
                }
                // characters[charIndex].innerHTML.(&lt;, "<");
                // console.log(characters[charIndex].innerText);

                // if(characters[charIndex].innerText === TypeWords){

                // }
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
                        // console.log("correct");
                    }else{
                        // charachter not same
                        mistakes++;
                        characters[charIndex].classList.add("incorrect");
                        // console.log("incorrect");
                    }
                    charIndex++;
                    // console.log(charIndex);
                }
                characters.forEach(span => span.classList.remove("active"));
                characters[charIndex].classList.add("active");
                // console.log("charindex "+charIndex);
                // console.log("charindex "+characters.length);
                // console.log("charindex"+)
            
                let wpm = Math.round((((charIndex - mistakes) / 5) / (maxTime - timeLeft)) * 60);
                // let tesss = Math.round((((charIndex - mistakes) / characters.length) * 1000) / timeLeft);
                let cpmresult = Math.round((((charIndex - mistakes) / characters.length) * 1000) / timeLeft);
                cpmresult = cpmresult < 0 || cpmresult === Infinity ? 0 : cpmresult;
                // console.log(cpmresult);
                mistageTag.innerHTML = mistakes;
                wpmTag.innerText = cpmresult;
                cpmTag.innerText = charIndex - mistakes;
            } else {
                inpField.value = "";
                timeout.innerText = "Finish";
                timeout.style.color = "green";
                // alert(timer);
                clearInterval(timer);
                // $("#modal-result").show()
            }
        }

        // function initWords(){

        // }

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
{{-- @endsection --}}
</body>
</html>