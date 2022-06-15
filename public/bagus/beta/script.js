// const typingText = document.querySelector(".typing-text");

// function randomParagraph() {
//     // let randIndex = Math.floor(Math.random() * paragraphs.length);
//     console.log(paragraphs[1]);
// }

// randomParagraph();

// enter
// var entertext = document.forms[0].txt.value;
// entertext = text.replace(/\r?\n/g, '<br />');


const typingText = document.querySelector(".typing-text p"),
inpField = document.querySelector(".wrapper .input-field"),
mistageTag = document.querySelector(".mistake span"),
timeTag = document.querySelector(".time span b"),
wpmTag = document.querySelector(".wpm span"),
cpmTag = document.querySelector(".cpm span");
btnTry = document.querySelector("button");
timeout = document.getElementById("timeout");

let timer,
maxTime = 5,
timeLeft = maxTime,
charIndex = mistakes = isTyping = 0;


function randomParagraph() {
    let randIndex = Math.floor(Math.random() * paragraphs.length);
    typingText.innerHTML = "";
    
    paragraphs[randIndex].split("").forEach(span => {
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