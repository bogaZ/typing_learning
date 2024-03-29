<script type="text/JavaScript">
    let data = {!! json_encode($statistik) !!};
    var co = {!! json_encode($kata) !!};

    const typingText = document.querySelector(".typing-text p"),
    inpField = document.querySelector(".wrapper .input-field"),
    mistageTag = document.querySelector(".mistake span"),
    timeTag = document.querySelector(".time span b"),
    wpmTag = document.querySelector(".wpm span"),
    cpmTag = document.querySelector(".cpm span"),
    btnTry = document.querySelector("#resettext"),
    timeout = document.getElementById("timeout"),
    idkarakter = document.getElementById("karakter-id");
    karakter_level = document.getElementById("karakter-level").innerText;
    console.log(karakter_level);

    let timer,
    maxTime = 0,
    timeLeft = maxTime,
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
                }else{
                    // charachter not same
                    mistakes++;
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
                    // mistakes++;
                }
            }
            inpField.value = "";
            timeout.innerText = "Finish";
            timeout.style.color = "green";
            clearInterval(timer);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let cpmresult = Math.round((((charIndex - mistakes) / characters.length) * 1000) / timeLeft);
            cpmresult = cpmresult < 0 || cpmresult === Infinity ? 0 : cpmresult;
            let time = timeLeft;
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