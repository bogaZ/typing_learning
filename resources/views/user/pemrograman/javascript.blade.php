<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.top')
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body class="bg-play">
    @include('layouts.navigation')
    {{-- <form action="{{route('ubahbahasa', $uid->id)}}" method="post">
        @csrf
        <div class="d-flex justify-content-center">
            <select name="bahasa" id="" class="py-1 px-3 rounded border-none shadow me-1" style="appearance: none;">
                @foreach ($allbahasa as $bahasa)
                <option value={{$bahasa->id}}
                    @if ($bahasa->id == $uid->bahasa_id)
                        selected
                    @endif
                    class="">{{$bahasa->bahasa}}</option>
                @endforeach
            </select>
            <button type="submit" class="ms-1 btn btn-primary">ubah bahasa</button>
        </div>
    </form> --}}
    <div class="d-flex justify-content-center my-3">
        <div class="col-md-8">
            <div>
                #<label for="" id="karakter-id">#</label>
            </div>
            <div class="card shadow border-none">
                <div class="wrapper">
                    <textarea name="text" class="input-field" id="" cols="30" rows="10"></textarea>
                    <textarea name="" id="hidetext" cols="30" rows="10"></textarea>
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
    <script type="text/JavaScript">
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });

        let data = {!! json_encode($statistik) !!};
        // console.log(data);
        // console.log(data);
    
        // $(".btn-submit").click(function(e){
    
        //     e.preventDefault();
    
        //     var name = $("input[name=name]").val();
        //     var password = $("input[name=password]").val();
        //     var email = $("input[name=email]").val();
    
            
    
        // });

        // {{-- var coba = {!! json_encode($kata->toArray()) !!}; --}}
        var co = {!! json_encode($kata) !!};
        // var co = <?php echo json_encode($kata); ?>;

        const typingText = document.querySelector(".typing-text p"),
        inpField = document.querySelector(".wrapper .input-field"),
        mistageTag = document.querySelector(".mistake span"),
        timeTag = document.querySelector(".time span b"),
        wpmTag = document.querySelector(".wpm span"),
        cpmTag = document.querySelector(".cpm span"),
        btnTry = document.querySelector("#resettext"),
        timeout = document.getElementById("timeout"),
        idkarakter = document.getElementById("karakter-id");
        $('#hidetext').hide();

        let timer,
        maxTime = 0,
        timeLeft = maxTime,
        charIndex = mistakes = isTyping = charcpm = 0;


        function randomParagraph() {
            let randTeks = Math.floor(Math.random() * co.length);
            // console.log(randTeks);
            typingText.innerHTML = "";
            let idkarakterinput = co[randTeks].id;
            $(idkarakter).addClass(idkarakterinput);
            idkarakter.innerText = idkarakterinput;
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
            return co[randTeks].id;
        }
        // const testes = randomParagraph();
        randomParagraph();
        // console.log(testes);
        // let testes = querySelector("label").innerText;
        console.log(idkarakter.innerText);

        function reset(){
            randomParagraph();
            $(typingText).prop('disabled', false);
            $(inpField).prop('disabled', false);
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
        let testes = btnTry.addEventListener("click", reset);
        console.log(testes);

        function initTyping() {
            // console.log(testes);
            const characters = typingText.querySelectorAll("span");
            // const charwords = typingText.querySelectorAll("span");
            let typeChar = inpField.value.split("")[charIndex];
            let TypeWords = inpField.value.split("")[charcpm];
            // console.log(characters);
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

                //data store statistik
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // console.log(randomParagraph());
                let cpmresult = Math.round((((charIndex - mistakes) / characters.length) * 1000) / timeLeft);
                cpmresult = cpmresult < 0 || cpmresult === Infinity ? 0 : cpmresult;
                let time = timeLeft;
                let _token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "POST",
                    url: "{{route('statistik.store')}}",
                    data:{
                        karakter_id: testes,
                        typing: cpmresult,
                        time: time,
                        _token: _token
                    },
                    success:function(response){
                        console.log(response);
                        if(response) {
                            $('.success').text(response.success);
                        }
                    },
                });
                // document.addEventListener("keydown", () => $('#hidetext').focus());
                // typingText.addEventListener("click", () => $('#hidetext').focus());
                $(typingText).prop('disabled', true);
                $(inpField).prop('disabled', true);
                
                // window.location.href = "{{route('statistik.store')}}";
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

        // function reset(){
        //     randomParagraph();
        //     $(typingText).prop('disabled', false);
        //     $(inpField).prop('disabled', false);
        //     inpField.value = "";
        //     timeout.innerText = "";
        //     timeout.style.color = "";
        //     clearInterval(timer);
        //     timeLeft = maxTime,
        //     charIndex = mistakes = isTyping = 0;
        //     timeTag.innerText = timeLeft;
        //     mistageTag.innerText = mistakes;
        //     wpmTag.innerText = 0;
        //     cpmTag.innerText = 0;
        // }
        
        // randomParagraph();
        inpField.addEventListener("input", initTyping);
        // btnTry.addEventListener("click", reset);
        // $(btnTry).click(function () {
        //     location.reload(true)
        // })
    </script>
{{-- @endsection --}}
</body>
</html>