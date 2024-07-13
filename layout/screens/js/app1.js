
var nativeVoice = 0, voices, speechSpeed = 1.5, info;

var setInput = function(ele) {
    var a = ele;
    if(a !== "") {
        info = a;
    }
    else {
        info = "Welcome to Socially Relevant Project";
    }
    
            
}

var setSpeed = function(x) {
    var b = document.getElementById("select-speed").value;
    speechSpeed = b;
    console.log(b);
}

var startSpeech = function(ele) {
    setInput(ele);
    voices = document.getElementById("select-voice");
    
    nativeVoice = voices.options[voices.selectedIndex].value;
   
    setSpeed();
    switch(nativeVoice){
        case "1":
            responsiveVoice.speak(info, "Tamil Female",{rate: speechSpeed});
            break;
        case "2":
            responsiveVoice.speak(info, "Tamil Male", {rate: speechSpeed});
            break;
        case "3":
            responsiveVoice.speak(info, "US English Female", {rate: speechSpeed});
            break;
        case "4":            
            responsiveVoice.speak(info, "US English Male", {rate: speechSpeed});
            break;
        case "5":
            responsiveVoice.speak(info, "Australian Female", {rate: speechSpeed});
            break;
        case "6":
            responsiveVoice.speak(info, "Dutch Female", {rate: speechSpeed});
            break;
        case "7":
         responsiveVoice.speak(info, "Hindi Female", {rate: speechSpeed});
          break;
        case "8":
            responsiveVoice.speak(info, "Japanese Female", {rate: speechSpeed});
            break;
        case "9":
            responsiveVoice.speak(info, "Korean Female", {rate: speechSpeed});
            break;
    }
}

var stopSpeech = function() {
    responsiveVoice.cancel();
}
