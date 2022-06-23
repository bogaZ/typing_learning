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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beta</title>
    <link rel="stylesheet" href="{{asset('bagus/beta/style.css')}}">
    {{-- <script src="{{asset('bagus/beta/script.js')}}"></script>
    <script src="{{asset('bagus/beta/paragraphs.js')}}"></script> --}}
</head>
<body>
    <div class="wrapper">
        {{-- <input type="text" class="input-field"> --}}
        <textarea name="text" class="input-field" id="" cols="30" rows="10"></textarea>
        <div class="content-box">
            <p id="timeout" class="text-center"></p>
            <div class="typing-text">
                <p></p>
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
</body>
</html>