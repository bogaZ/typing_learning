<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.top')
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body class="bg-play">
    @include('layouts.navigation')
    @role('user')
    <form action="{{route('ubahbahasa', $uid->id)}}" method="post">
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
    </form>
    @endrole
    <div class="d-flex justify-content-center my-3 py-5">
        <div class="col-md-8">
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{route('home')}}" class="text-decoration-none text-dark fw-bold">kembali</a>
                    {{-- <a href="javascript:history.back()" class="text-decoration-none text-dark fw-bold">kembali</a> --}}
                </div>
                <div>
                    #<label for="" id="karakter-id">#</label>
                    tingkat kesulitan:<label for="" id="karakter-level">susah</label>
                </div>
            </div>
            <div class="card shadow border-none">
                <div class="wrapper">
                    <textarea name="text" class="input-field" id="" cols="30" rows="10"></textarea>
                    <div class="content-box">
                        <p id="timeout" class="text-center"></p>
                        <div class="typing-text">
                            <p></p>
                        </div>
                        <div class="content row">
                            <ul class="result-details m-0 mb-3 d-flex align-items-center p-0 col-12">
                                <li class="time">
                                    <p class="m-0">Waktu:</p>
                                    <span><b>0</b>s</span>
                                </li>
                                <li class="mistake">
                                    <p class="m-0">Salah:</p>
                                    <span>0</span>
                                </li>
                                <li class="cpm">
                                    <p class="m-0">Benar:</p>
                                    <span>0</span>
                                </li>
                                <li class="wpm">
                                    <p class="m-0">Skor:</p>
                                    <span>0</span>kpm
                                </li>
                                {{-- <li class="percentase">
                                    <p class="m-0">Akurasi:</p>
                                    <span>0</span>%
                                </li> --}}
                            </ul>
                            <button id="resettext" class="btn btn-dark">Reset Karakter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @role('user')
    <script type="text/JavaScript">
        let data = {!! json_encode($statistik) !!};
        var co = {!! json_encode($kata) !!};

        const typingText = document.querySelector(".typing-text p"),
        inpField = document.querySelector(".wrapper .input-field"),
        mistageTag = document.querySelector(".mistake span"),
        timeTag = document.querySelector(".time span b"),
        wpmTag = document.querySelector(".wpm span"),
        cpmTag = document.querySelector(".cpm span"),
        // akurasiTag = document.querySelector(".percentase span"),
        btnTry = document.querySelector("#resettext"),
        timeout = document.getElementById("timeout"),
        idkarakter = document.getElementById("karakter-id");
        karakter_level = document.getElementById("karakter-level").innerText;
        console.log(karakter_level);

        let timer,
        maxTime = 0,
        timeLeft = maxTime,
        succAkurasi = missAkurasi = 0,
        charIndex = mistakes = isTyping = charcpm = 0;


        let randTeks;
        function randomParagraph() {
            randTeks = Math.floor(Math.random() * co.length);
            typingText.innerHTML = "";
            idkarakter.innerText = randTeks + 1;
            var teks = co[randTeks].karakter.toString().replace(/(\r\n|\n|\r)/gm, "\n");
            
            teks.split("").forEach(span => {
                let spanTag = `<span>${span}</span>`;
                typingText.innerHTML += spanTag;
            });
            typingText.querySelectorAll("span")[0].classList.add("active");

            document.addEventListener("keydown", () => inpField.focus());
            typingText.addEventListener("click", () => inpField.focus());
            return randTeks;
        }
        const testes = randomParagraph();

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
            akurasiTag.innerText = 0;
            cpmTag.innerText = 0;

        }

        function initTyping() {
            console.log(randTeks);
            const characters = typingText.querySelectorAll("span");
            let typeChar = inpField.value.split("")[charIndex];
            let TypeWords = inpField.value.split("")[charcpm];
            if (charIndex < characters.length -1 && timeLeft > -1) {
                if(!isTyping){
                    // console.log(isTyping);
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
                    if(characters[charIndex].innerText === typeChar){
                        // character same
                        characters[charIndex].classList.add("correct");
                        succAkurasi++;
                    }else{
                        // charachter not same
                        mistakes++;
                        missAkurasi++;
                        characters[charIndex].classList.add("incorrect");
                    }
                    charIndex++;
                }
                characters.forEach(span => span.classList.remove("active"));
                characters[charIndex].classList.add("active");

            
                let wpm = Math.round((((charIndex - mistakes) / 5) / (maxTime - timeLeft)) * 60);
                // let cpmresult = Math.round((((charIndex - mistakes) / characters.length) * 1000) / timeLeft);
                cpmTag.innerText = charIndex - mistakes;
                let cpmresult = Math.round(cpmTag.innerText * (60 / timeTag.innerText));
                cpmresult = cpmresult < 0 || cpmresult === Infinity ? 0 : cpmresult;
                
                // akurasiTyping = ((charIndex - mistakes) * 100) / characters.length;
                // akurasiTyping = akurasiTyping.toFixed(2);
                // akurasiTag.innerText = akurasiTyping;

                mistageTag.innerHTML = mistakes;
                wpmTag.innerText = cpmresult;
                console.log("benar mengetik"+ (charIndex-mistakes));
            } else {
                if(charIndex == characters.length -1){
                    if(characters[charIndex].innerText === typeChar){
                        characters[charIndex].classList.add("correct");
                        console.log("terakhir");
                    }else{
                        characters[charIndex].classList.add("incorrect");
                        mistakes++;
                    }
                    charIndex++;
                }
                mistageTag.innerHTML = mistakes;

                inpField.value = "";
                timeout.innerText = "Finish";
                timeout.style.color = "green";
                clearInterval(timer);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let time = timeLeft;
                
                let karakter_id = co[randTeks].id;
                let karakterbenar = charIndex - mistakes;
                let cpmresult = Math.round(karakterbenar * (60 / time));
                // cpmresult = cpmresult < 0 || cpmresult === Infinity ? 0 : cpmresult;
                // console.log(karakterbenar);
                let _token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "POST",
                    url: "{{route('statistik.store')}}",
                    data:{
                        karakter_id: karakter_id,
                        benar: karakterbenar,
                        salah: mistakes,
                        typing: cpmresult,
                        kesulitan: karakter_level,
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
                $(typingText).prop('disabled', true);
                $(inpField).prop('disabled', true);
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

        inpField.addEventListener("input", initTyping);
        btnTry.addEventListener("click", reset);
    </script>
    @include('user.pengaturan.profil')
    @include('layouts.bottom')
    @endrole
    @guest
        @include('user.guest.js')
    @endguest
</body>
</html>