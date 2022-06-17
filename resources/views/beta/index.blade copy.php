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
                        <span><b></b>s</span>
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
    {{-- <script src="{{asset('bagus/beta/paragraphs.js')}}"></script> --}}
    {{-- <script>
        var coba = {!! json_encode($test->toArray()) !!};
        var user = {{$test}}
        console.log(users);
        console.log(user);
    </script> --}}
    <script>
        var coba = {!! json_encode($test->toArray()) !!};
        var co = <?php echo json_encode($test); ?>;
        // var teks = coba[0].karakter.replace(/(\r\n|\n|\r)/gm, "\n");


        // var user = {{$test}}
        // const coba = map(ele=>ele.nama);

        // var result = coba.find(obj => {
            // Returns the object where
            // the given property has some value 
        //     return obj.id === 1
        // })

        // result = result.replace(\n, "");
        // console.log(result.karakter.replace(/[\r\n]/g, ""));

        console.log(coba[0].karakter);
        // console.log(value);
        // console.log(co);
        
        // console.log(user);
        // var posts = {{ $test->toJson() }};

        // posts.forEach(function(post) {
        // // do something
        //     console.log(post);
        // });

        // var x = [{id: 1, a: true},
        //     {id: 2, a: true},
        //     {id: 3, a: true},
        //     {id: 4, a: true}];

        // var a = x.select(function(obj) {
        //     return obj.id = 2;
        // });

        // console.log(a);

        const paragraphs =[
            "semoga\ncepat lulus\namiinn",
            "samoga dapat nilai sempurna",
            "pekerjaan selesai",
            "mengerjakan tugas akhir",
        ];


        const typingText = document.querySelector(".typing-text p"),
        inpField = document.querySelector(".wrapper .input-field"),
        mistageTag = document.querySelector(".mistake span"),
        timeTag = document.querySelector(".time span b"),
        wpmTag = document.querySelector(".wpm span"),
        cpmTag = document.querySelector(".cpm span");
        btnTry = document.querySelector("button");
        timeout = document.getElementById("timeout");
        // var coba = {!! json_encode($test->toArray()) !!};

        let timer,
        maxTime = 10,
        timeLeft = maxTime,
        charIndex = mistakes = isTyping = 0;


        function randomParagraph() {
            let randTeks = Math.floor(Math.random() * coba.length);
            // let randIndex = Math.floor(Math.random() * paragraphs.length);
            typingText.innerHTML = "";

            var teks = coba[randTeks].karakter.replace(/(\r\n|\n|\r)/gm, "\n");
            
            // coba[0].karakter.split("").forEach(span => {
            //     let spanTag = `<span>${span}</span>`;
            //     typingText.innerHTML += spanTag;
            // });

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
            if (charIndex < characters.length - 1 && timeLeft > 0) {
                if(!isTyping){
                    timer = setInterval(initTimer, 1000);
                    isTyping = true;
                }
                if(typeChar == null){
                    charIndex--;
                    if(characters[charIndex].classList.contains("incorrect")){
                        mistakes--;
                    }
                    characters[charIndex].classList.remove("correct", "incorrect");
                }else{
                    if(characters[charIndex].innerHTML === typeChar){
                        characters[charIndex].classList.add("correct");
                        //
                        console.log("correct");
                    }else{
                        mistakes++;
                        characters[charIndex].classList.add("incorrect");
                        console.log("incorrect");
                    }
                    charIndex++;
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
                clearInterval(timer);
            }
        }

        function initTimer(){
            if(timeLeft > 0){
                timeLeft--;
                timeTag.innerText = timeLeft;
            }else {
                
                clearInterval(timer);
                timeout.innerText = "waktu habis";
                timeout.style.color = "red";
            }
        }
        console.log(paragraphs);
        // console.log(paragraphs.replace(/(\r\n|\n|\r)/gm, ""));

        function reset(){
            randomParagraph();
            inpField.value = "";
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