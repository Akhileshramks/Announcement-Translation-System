<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    #languageDropdown {
            margin-top: 20px;
        }
    #content-body1 {
            width: 30%;
            min-height: 100vh;
            max-width: 800px; /* Adjust this value as needed */
            margin-left: auto;
            margin-right: auto;
            border-left: 0px solid transparent;
            border-right: 1px solid transparent;
        }
        #result {
            height: 200px;
            width: 400px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px 0 #bbb;
            margin-bottom: 30px;
            font-size: 14px;
            line-height: 25px;
        }
        #result1 {
            height: 200px;
            width: 400px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px 0 #bbb;
            margin-bottom: 30px;
            font-size: 14px;
            line-height: 25px;
        }

        #bcc {
            font-size: 20px;
            position: absolute;
            top: 380px;
            left: 50%;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home / Announcements</title>

    <link rel="shortcut icon" href="//abs.twimg.com/favicons/twitter.2.ico">
    <!--Icon for notifications https://abs.twimg.com/favicons/twitter-pip.2.ico-->

    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- My JS -->
    <script src="../assets/js/tailwind.config.js"></script>
    <script defer src="../assets/js/darkMode.js"></script>
    <script>
        function startConverting() {
            var result = document.getElementById('result');
            var languageSelect = document.getElementById('languageSelect');
            var selectedLanguage = languageSelect.value;
            if ('webkitSpeechRecognition' in window) {
                var recognition = new webkitSpeechRecognition();
                recognition.continuous = true;
                recognition.interimResults = true;
                recognition.lang = selectedLanguage;

                recognition.onstart = function() {
                    console.log('Speech recognition started');
                };

                recognition.onresult = function(event) {
                    var interimTranscripts = '';
                    var finalTranscripts = '';
                    for (var i = event.resultIndex; i < event.results.length; i++) {
                        var transcript = event.results[i][0].transcript;
                        transcript.replace("\n", "<br>");
                        if (event.results[i].isFinal) {
                            interimTranscripts += transcript;
                        } else {
                            interimTranscripts += transcript;
                        }
                    }
                    result.innerHTML = finalTranscripts + '<span style="color: #999">' + interimTranscripts + '</span>';
                };

                recognition.onerror = function(event) {
                    console.error('Speech recognition error:', event.error);
                };

                recognition.onend = function() {
                    console.log('Speech recognition ended');
                };

                recognition.start();
            } else {
                result.innerHTML = 'Your browser does not support speech recognition.';
            }
        }
        function translateText1(content) {
    var sourceLanguage = document.getElementById("languageSelect").value;
    sourceLanguage = sourceLanguage.split('-')[0];
    var targetLanguage = document.getElementById("targetLanguage").value;
    
    const translateURL = `https://translate.googleapis.com/translate_a/single?client=gtx&sl=${sourceLanguage}&tl=${targetLanguage}&dt=t&q=${encodeURI(content)}`;

    // Fetch translation
    fetch(translateURL)
        .then(response => response.json())
        .then(data => {
            const translatedText = data[0][0][0]; // Extract translated text
            document.getElementById("result1").innerHTML = translatedText; // Update content
        })
        .catch(error => console.error('Error:', error));
}
    </script>
</head>

<body class="relative flex justify-center llg:px-7 gap-7 bg-white-0 dark:bg-black-0" >
    <!-- LEFT BAR -->
    <aside class="hidden llg:block max-w-72">
        <div class="sticky top-0 left-0 flex flex-col gap-6">
            <!-- BRAND -->
            <a class="flex justify-center mt-6 transition hover:scale-150" href="./home.html">
                <h1>
                    <svg class="fill-primary w-11" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <img src="..\images\logo.png" width="100" height="100">

                        <!--g>
                            <path
                                d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z">
                            </path>
                        </g-->
                    </svg>
                </h1>
            </a>

            <!-- NAV BAR -->
            <nav class="flex flex-col items-start gap-3" id="sidenavbar">
                <a class="w-full group" href="./home.html">
                    <div
                        class="flex items-center gap-5 px-4 py-3 transition rounded-full w-fit group-hover:scale-110 group-hover:bg-gray-3 dark:group-hover:bg-gray-13 group-focus-within:bg-gray-3 dark:group-focus-within:bg-gray-13 group-focus-within:scale-110">
                        <figure>
                            <svg class="w-8 dark:fill-white-0 fill-black-0" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <g>
                                    <path
                                        d="M12 9c-2.209 0-4 1.791-4 4s1.791 4 4 4 4-1.791 4-4-1.791-4-4-4zm0 6c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm0-13.304L.622 8.807l1.06 1.696L3 9.679V19.5C3 20.881 4.119 22 5.5 22h13c1.381 0 2.5-1.119 2.5-2.5V9.679l1.318.824 1.06-1.696L12 1.696zM19 19.5c0 .276-.224.5-.5.5h-13c-.276 0-.5-.224-.5-.5V8.429l7-4.375 7 4.375V19.5z">
                                    </path>
                                </g>
                            </svg>
                        </figure>
                        <div class="text-2xl text-black-0 dark:text-white-0 group-focus-within:font-semibold" >Home</div>
                    </div>
                </a>

                <!--a class="w-full group" href="./explore.html">
                    <div
                        class="flex items-center gap-5 px-4 py-3 transition rounded-full w-fit group-hover:scale-110 group-hover:bg-gray-3 dark:group-hover:bg-gray-13 group-focus-within:bg-gray-3 dark:group-focus-within:bg-gray-13 group-focus-within:scale-110">
                        <figure>
                            <svg class="w-8 dark:fill-white-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <g>
                                    <path
                                        d="M10.09 3.098L9.72 7h5.99l.39-4.089 1.99.187L17.72 7h3.78v2h-3.97l-.56 6h3.53v2h-3.72l-.38 4.089-1.99-.187.36-3.902H8.78l-.38 4.089-1.99-.187L6.77 17H2.5v-2h4.46l.56-6H3.5V7h4.21l.39-4.089 1.99.187zM14.96 15l.56-6H9.53l-.56 6h5.99z">
                                    </path>
                                </g>
                            </svg>
                        </figure>
                        <div class="text-2xl text-black-0 dark:text-white-0 group-focus-within:font-semibold">Explore
                        </div>
                    </div>
                </a-->

                <!--a class="w-full group" href="./notifications.html">
                    <div
                        class="flex items-center gap-5 px-4 py-3 transition rounded-full w-fit group-hover:scale-110 group-hover:bg-gray-3 dark:group-hover:bg-gray-13 group-focus-within:bg-gray-3 dark:group-focus-within:bg-gray-13 group-focus-within:scale-110">
                        <figure>
                            <svg class="w-8 dark:fill-white-0 fill-black-0" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <g>
                                    <path
                                        d="M19.993 9.042C19.48 5.017 16.054 2 11.996 2s-7.49 3.021-7.999 7.051L2.866 18H7.1c.463 2.282 2.481 4 4.9 4s4.437-1.718 4.9-4h4.236l-1.143-8.958zM12 20c-1.306 0-2.417-.835-2.829-2h5.658c-.412 1.165-1.523 2-2.829 2zm-6.866-4l.847-6.698C6.364 6.272 8.941 4 11.996 4s5.627 2.268 6.013 5.295L18.864 16H5.134z">
                                    </path>
                                </g>
                            </svg>
                        </figure>
                        <div class="text-2xl text-black-0 dark:text-white-0 group-focus-within:font-semibold" >
                            Notifications
                        </div>
                    </div>
                </a-->

                <!--a class="w-full group" href="./bookmarks.html">
                    <div
                        class="flex items-center gap-5 px-4 py-3 transition rounded-full w-fit group-hover:scale-110 group-hover:bg-gray-3 dark:group-hover:bg-gray-13 group-focus-within:bg-gray-3 dark:group-focus-within:bg-gray-13 group-focus-within:scale-110">
                        <figure>
                            <svg class="w-8 fill-black-0 dark:fill-white-0" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <g>
                                    <path
                                        d="M4 4.5C4 3.12 5.119 2 6.5 2h11C18.881 2 20 3.12 20 4.5v18.44l-8-5.71-8 5.71V4.5zM6.5 4c-.276 0-.5.22-.5.5v14.56l6-4.29 6 4.29V4.5c0-.28-.224-.5-.5-.5h-11z">
                                    </path>
                                </g>
                            </svg>
                        </figure>
                        <div class="text-2xl text-black-0 dark:text-white-0 group-focus-within:font-semibold" >Bookmarks
                        </div>
                    </div>
                </a-->
                <?php session_start()?>
                <!-- PROFILE -->
                <a class="w-full group" href="./profile.html">
                    <div
                        class="flex items-center gap-5 px-4 py-3 transition rounded-full w-fit group-hover:scale-110 group-hover:bg-gray-3 dark:group-hover:bg-gray-13 group-focus-within:bg-gray-3 dark:group-focus-within:bg-gray-13 group-focus-within:scale-110">
                        <figure class="w-9">
                            <img class="rounded-full " src="https://unavatar.io/github/antonioalanxs" alt="">
                        </figure>

                        <article class="flex flex-col items-start justify-between">
                            <section class="flex items-center gap-2">
                                <h2 class="text-xl font-semibold dark:text-white-0">Guest user<?php echo($_SESSION['username']); ?></h2>

                                <div class="w-5">
                                    <svg class="dark:fill-white-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" aria-label="Cuenta protegida" role="img"
                                        data-testid="icon-lock">
                                        <g>
                                            <path
                                                d="M17.5 7H17v-.25c0-2.76-2.24-5-5-5s-5 2.24-5 5V7h-.5C5.12 7 4 8.12 4 9.5v9C4 19.88 5.12 21 6.5 21h11c1.39 0 2.5-1.12 2.5-2.5v-9C20 8.12 18.89 7 17.5 7zM13 14.73V17h-2v-2.27c-.59-.34-1-.99-1-1.73 0-1.1.9-2 2-2 1.11 0 2 .9 2 2 0 .74-.4 1.39-1 1.73zM15 7H9v-.25c0-1.66 1.35-3 3-3 1.66 0 3 1.34 3 3V7z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </section>

                            <h3 class="text-sm font-semibold dark:font-normal text-gray-2">
                            <?php echo($_SESSION['email']); ?></h3>
                        </article>
                    </div>
                </a>

                <!-- LOG OUT -->
                <a class="w-full group" href="./main.html">
                    <div
                        class="flex items-center gap-6 px-4 py-3 transition rounded-full w-fit group-hover:scale-110 group-focus-within:scale-110 group-hover:bg-red-3 group-focus-within:bg-red-3">
                        <div class="w-7">
                            <svg class="dark:fill-white-0 fill-black-0 group-focus-within:fill-white-0 group-hover:fill-white-0"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 320.002 320.002" xml:space="preserve">
                                <g>
                                    <path
                                        d="M51.213,175.001h173.785c8.284,0,15-6.716,15-15c0-8.284-6.716-15-15-15H51.213l19.394-19.394   c5.858-5.858,5.858-15.355,0-21.213c-5.857-5.858-15.355-5.858-21.213,0L4.396,149.393c-0.351,0.351-0.683,0.719-0.997,1.103   c-0.137,0.167-0.256,0.344-0.385,0.515c-0.165,0.22-0.335,0.435-0.488,0.664c-0.14,0.209-0.261,0.426-0.389,0.64   c-0.123,0.206-0.252,0.407-0.365,0.619c-0.118,0.22-0.217,0.446-0.323,0.67c-0.104,0.219-0.213,0.435-0.306,0.659   c-0.09,0.219-0.164,0.442-0.243,0.664c-0.087,0.24-0.179,0.477-0.253,0.722c-0.067,0.222-0.116,0.447-0.172,0.672   c-0.063,0.249-0.133,0.497-0.183,0.751c-0.051,0.259-0.082,0.521-0.119,0.782c-0.032,0.223-0.075,0.443-0.097,0.669   c-0.048,0.484-0.073,0.971-0.074,1.457c0,0.007-0.001,0.015-0.001,0.022c0,0.007,0.001,0.015,0.001,0.022   c0.001,0.487,0.026,0.973,0.074,1.458c0.022,0.223,0.064,0.44,0.095,0.661c0.038,0.264,0.069,0.528,0.121,0.79   c0.05,0.252,0.119,0.496,0.182,0.743c0.057,0.227,0.107,0.456,0.175,0.681c0.073,0.241,0.164,0.474,0.248,0.71   c0.081,0.226,0.155,0.453,0.247,0.675c0.091,0.22,0.198,0.431,0.3,0.646c0.108,0.229,0.21,0.46,0.33,0.685   c0.11,0.205,0.235,0.4,0.354,0.599c0.131,0.221,0.256,0.444,0.4,0.659c0.146,0.219,0.309,0.424,0.466,0.635   c0.136,0.181,0.262,0.368,0.407,0.544c0.299,0.364,0.616,0.713,0.947,1.048c0.016,0.016,0.029,0.034,0.045,0.05l45,45.001   c2.93,2.929,6.768,4.394,10.607,4.394c3.838-0.001,7.678-1.465,10.606-4.393c5.858-5.858,5.858-15.355,0.001-21.213L51.213,175.001   z" />
                                    <path
                                        d="M305.002,25h-190c-8.284,0-15,6.716-15,15v60c0,8.284,6.716,15,15,15s15-6.716,15-15V55h160v210.001h-160   v-45.001c0-8.284-6.716-15-15-15s-15,6.716-15,15v60.001c0,8.284,6.716,15,15,15h190c8.284,0,15-6.716,15-15V40   C320.002,31.716,313.286,25,305.002,25z" />
                                </g>
                            </svg>
                        </div>
                        <div
                            class="text-2xl text-black-0 dark:text-white-0 group-focus-within:font-semibold group-focus-within:text-white group-hover:text-white-0">
                            Log out</div>
                            
                    </div>
                </a>
                <select id="languageSelector" name="languageSelector"
                    class="block px-4 pb-2.5 pt-4 w-full text-gray-5 bg-transparent rounded-xl border-[1.9px] border-gray-15 dark:text-white-0 dark:border-gray-5 dark:focus:border-primary focus:outline-none focus:ring-0 focus:border-primary peer dark:valid:border-primary valid:outline-none valid:ring-0 valid:border-primary"
                    placeholder="Translate to:" required="" autocomplete="off">
                    <label for="usertype"
                        class="absolute cursor-text text-gray-2 duration-200 transform -translate-y-4 scale-90 top-2 z-10 origin-[0] bg-white-0 dark:bg-black-0 px-2 peer-focus:px-2 peer-focus:text-primary peer-focus:dark:text-primary peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-90 peer-focus:-translate-y-4 left-2 peer-valid:px-2 peer-valid:text-primary peer-valid:dark:text-primary peer-valid:scale-90 peer-valid:-translate-y-4">Login
                        as</label>
                
                    <option value="en">English</option>
                    <option value="es">Español</option>
                    <option value="fr">Français</option>
                    <option value="ta">தமிழ்</option>
                    <option value="ps">پښتو</option>
                    <option value="fa">دری</option>
                    <option value="sq">Shqip</option>
                    <option value="ar">العربية</option>
                    <option value="ca">Català</option>
                    <option value="pt">Português</option>
                    <option value="de">Deutsch</option>
                    <option value="az">Azərbaycan dili</option>
                    <option value="bn">বাংলা</option>
                    <option value="nl">Nederlands</option>
                    <option value="bs">Bosanski</option>
                    <option value="hr">Hrvatski</option>
                    <option value="sr">Српски</option>
                    <option value="ms">Bahasa Melayu</option>
                    <option value="bg">български</option>
                    <option value="km">ភាសាខ្មែរ</option>
                    <option value="zh">普通话</option>
                    <option value="el">Ελληνικά</option>
                    <option value="cs">Čeština</option>
                    <option value="da">Dansk</option>
                    <option value="hu">Magyar</option>
                    <option value="is">Íslenska</option>
                    <option value="hi">हिन्दी</option>
                    <option value="id">Bahasa Indonesia</option>
                    <option value="fa">فارسی</option>
                    <option value="ga">Gaeilge</option>
                    <option value="he">עברית</option>
                    <option value="it">Italiano</option>
                    <option value="ja">日本語</option>
                    <option value="kk">Қазақ тілі</option>
                    <option value="sw">Kiswahili</option>
                    <option value="ky">Кыргыз тили</option>
                    <option value="lo">ລາວ</option>
                    <option value="lv">Latviešu</option>
                    <option value="st">Sesotho</option>
                    <option value="de">Deutsch</option>
                    <option value="lt">Lietuvių</option>
                    <option value="ms">Bahasa Melayu</option>
                    <option value="dv">ދިވެހި</option>
                    <option value="mt">Malti</option>
                    <option value="mh">Kajin M̧ajeļ</option>
                    <option value="mo">Молдовеняскэ</option>
                    <option value="my">မြန်မာ</option>
                    <option value="na">Dorerin Naoero</option>
                    <option value="ne">नेपाली</option>
                    <option value="no">Norsk</option>
                    <option value="ur">اردو</option>
                    <option value="pl">Polski</option>
                    <option value="ro">Română</option>
                    <option value="ru">Русский</option>
                    <option value="rw">Ikinyarwanda</option>
                    <option value="sm">Gagana Samoa</option>
                    <option value="mk">Македонски</option>
                    <option value="si">සිංහල</option>
                    <option value="nl">Nederlands</option>
                    <option value="sv">Svenska</option>
                    <option value="tg">Тоҷикӣ</option>
                    <option value="sw">Kiswahili</option>
                    <option value="th">ไทย</option>
                    <option value="tet">Tetun</option>
                    <option value="to">Lea fakatonga</option>
                    <option value="uk">Українська</option>
                    <option value="uz">O‘zbekcha</option>
                    <option value="vi">Tiếng Việt</option>
                    <option value="hi">हिन्दी</option>
                    <option value="bn">বাংলা</option>
                    <option value="te">తెలుగు</option>
                    <option value="mr">मराठी</option>

                </select>

                <script>
                    // Function to translate the content
                    function translateContent() {
                        const targetLanguage = document.getElementById("languageSelector").value;
                        const contentElements = document.getElementById("sample").children;
                        const sidebarElements = document.getElementById("sidenavbar").children;
                        const topElements = document.getElementById("topelems").children;
                        // Iterate over each child element of #content
                        loopContent(contentElements,targetLanguage);
                        loopContent(sidebarElements);
                        loopContent(topElements);

                       
                    }

                    function loopContent(contentElements,targetLanguage){
                         Array.from(contentElements).forEach(element => {
                            const childElements = element.children;//
                            Array.from(childElements).forEach(ele => {
                                const content = ele.innerHTML;

                                // Google Translate API URL
                                const translateURL = `https://translate.googleapis.com/translate_a/single?client=gtx&sl=auto&tl=${targetLanguage}&dt=t&q=${encodeURI(content)}`;
                                //https://translate.googleapis.com/translate_tts?client=gtx&sl=auto&tl=${targetLanguage}&q=${encodeURI(content)}
                                // Fetch translation
                                fetch(translateURL)
                                    .then(response => response.json())
                                    .then(data => {
                                        const translatedText = data[0][0][0]; // Extract translated text
                                        ele.innerHTML = translatedText; // Update content
                                    })
                                    .catch(error => console.error('Error:', error));
                            });
                        });
                    }

                    // Event listener for language selection change
                    document.getElementById("languageSelector").addEventListener("change", translateContent);

                    // Initial translation when the page loads
                    //translateContent();
                </script>

            </nav>


            

            <!--voice output-->
            <section>        
       <div id="customise-options">
           <label id="voice-label">
               Select voice :
               <div id="voice-container">
                   <select id="select-voice" >
                       <option value="1">Tamil Female</option>
                       <option value="2">Tamil Male</option>
                       <option value="3">US Female</option>
                       <option value="4">US Male</option>
                       <option value="5">Australian Female</option>
                       <option value="6">Dutch Female</option>           
                           <option value="7">Hindi Female</option>
                       <option value="8">Japanese Female</option>
                       <option value="9">Korean Female</option>                                   
                   </select>                     
               </div>
           </label>  
           <label id="speed-label">
               Select speech speed :
               <div id="speed-container">
                   <input id="select-speed" type="range" class="topcoat-range" min="0" max="1.5" value="0.5" step="0.1" onchange="setSpeed(this.value)">
               </div>
           </label>                                 
       </div>
       <div class="button-row">
           <button id="stop-button" class="topcoat-button" onclick="stopSpeech()">STOP</button>          
       </div>
  
   </section>
<!--script src="https://code.responsivevoice.org/responsivevoice.js?key=R06QTECg"></script-->
   <!--script src='https://code.responsivevoice.org/responsivevoice.js'></script-->
   <script type="text/javascript" src="js/app1.js"></script>
   <script type="text/javascript" src="js/translatespeak.js"></script>

            <!--div class="button-row">
                
                <button id="speak-button" class="topcoat-button--cta" onclick="startSpeech(this.id)">SPEAK</button>
            </div-->
        </div>
    </aside>

    <!-- CONTENT - FRAME -->
    <main id="contbody"
        class="relative w-screen min-h-screen llg:max-w-[700px] border-l border-r border-transparent llg:border-gray-9 llg:dark:border-black-5">
        <!-- HEADER -->
        <header class="sticky top-0 left-0 border-b backdrop-blur-md border-gray-9 dark:border-black-5">
            <div class="flex items-center justify-between py-2 pl-6 pr-3" >
                <div class="flex gap-4" >
                    <!-- GO BACK -->
                    <!--a class="hidden cursor-pointer group xlsm:block" href="./home.html">
                        <svg class="transition rounded-full w-7 dark:fill-white-0 fill-gray-4 group-hover:fill-primary group-hover:bg-blue-1 group-dark:hover:bg-blue-0"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <g>
                                <path
                                    d="M7.414 13l5.043 5.04-1.414 1.42L3.586 12l7.457-7.46 1.414 1.42L7.414 11H21v2H7.414z">
                                </path>
                            </g>
                        </svg>
                    </a-->

                    <!-- TITLE id="screenTitle"-->
                    <h1  id="topelems" class="hidden text-xl font-bold xlsm:block dark:text-gray-3 text-black-1">
                        Search for announcements
                    </h1>
        <!--h3 align="center">Speech to Text Converter</h3>
        <div id="result"></div>
        <button onclick="startConverting();"><i class="fa fa-microphone btn btn-danger" aria-hidden="true"></i>Click Here</button-->
                



                <!-- SEARCH BAR -->
                <form class="relative" method='get' action='#'>
                    <div class="absolute inset-y-0 flex pointer-events-none left-5">
                        <svg aria-hidden="true" class="w-6 text-gray-5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>

                    <!--input type="text" id="search"
                        class="w-full py-3 text-lg rounded-full pl-14 text-black-0 dark:text-gray-4 dark:bg-black-2 bg-gray-6 dark:placeholder-gray-5 dark:text-white placeholder-text-lg"
                        placeholder="Search Topics" required-->
                    <!--select id="search"
                        class="w-full py-3 text-lg rounded-full pl-14 text-black-0 dark:text-gray-4 dark:bg-black-2 bg-gray-6 dark:placeholder-gray-5 dark:text-white placeholder-text-lg"
                        placeholder="Search Topics" required>
                        <option value="railways">Railways</option>
                        <option value="busstop">Bus related</option>
                        <option value="airport">Airports</option>
                        <option value="emergency">Emergency alerts</option>
                        <option value="police">Police</option>
                        <option value="general">General</option>
                        </select-->

                        <select name='view-topics' id="search" placeholder="Search Topics" required
                        class="w-full py-3 text-lg rounded-full pl-14 text-black-0 dark:text-gray-4 dark:bg-black-2 bg-gray-6 dark:placeholder-gray-5 dark:text-white placeholder-text-lg"
                        onchange="this.form.submit();">
                   <option <?php if($_GET['view-topics']=="%%"){echo "selected='selected'"; } ?> value="%%">--Search Topics--</option>
                   <option <?php if($_GET['view-topics']=="railways"){echo "selected='selected'"; } ?> value="railways">Railways</option>
                   <option <?php if($_GET['view-topics']=="busstop"){echo "selected='selected'"; } ?> value="busstop">Bus related</option>
                   <option <?php if($_GET['view-topics']=="airport"){echo "selected='selected'"; } ?> value="airport">Airports</option>
                   <option <?php if($_GET['view-topics']=="emergency"){echo "selected='selected'"; } ?> value="emergency">Emergency alerts</option>
                   <option <?php if($_GET['view-topics']=="police"){echo "selected='selected'"; } ?> value="police">Police</option>
                   <option <?php if($_GET['view-topics']=="general"){echo "selected='selected'"; } ?> value="general">General</option>
                   </select>
                </form>
                    

                <!-- THEME SWITCHER -->
                <button id="theme-toggle"
                    class="p-3 bg-transparent border-2 border-transparent w-fit hover:border-primary focus-within:border-primary rounded-2xl">
                    <svg id="theme-toggle-dark-icon" class="hidden w-7 fill-white-0" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-7 fill-orange-0" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </header>

        <!-- TRENDS >
        <a class="relative flex flex-col gap-1 px-5 py-3 border-b cursor-pointer border-gray-9 dark:border-black-5 hover:bg-gray-7 dark:hover:bg-black-6"
            href="#" id="sample">
            <h4 class="text-sm font-medium dark:font-semibold text-gray-5" >Space Tourism Takes Off</h4>
            <h3 class="font-bold dark:text-gray-3">Private companies offer space travel.</h3>
            <h5 class="text-sm font-medium dark:font-semibold text-gray-5">New era in interplanetary voyages.</h5>
        </a>

        <a class="relative flex flex-col gap-1 px-5 py-3 border-b cursor-pointer border-gray-9 dark:border-black-5 hover:bg-gray-7 dark:hover:bg-black-6"
            href="#">
            <h4 class="text-sm font-medium dark:font-semibold text-gray-5">AI Advancements in Healthcare</h4>
            <h3 class="font-bold dark:text-gray-3">AI revolutionizes medical diagnosis.</h3>
            <h5 class="text-sm font-medium dark:font-semibold text-gray-5">Rapid disease detection and treatment.</h5>

            <!-- TRASH CAN (ONLY FOR ADMIN) 
            <button class="absolute top-2 right-2 justify-self-end">
                <svg class="w-8 p-[0.375rem] transition rounded-full fill-gray-4 hover:fill-red-3 hover:bg-red-2"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                    <g>
                        <path
                            d="M16 6V4.5C16 3.12 14.88 2 13.5 2h-3C9.11 2 8 3.12 8 4.5V6H3v2h1.06l.81 11.21C4.98 20.78 6.28 22 7.86 22h8.27c1.58 0 2.88-1.22 3-2.79L19.93 8H21V6h-5zm-6-1.5c0-.28.22-.5.5-.5h3c.27 0 .5.22.5.5V6h-4V4.5zm7.13 14.57c-.04.52-.47.93-1 .93H7.86c-.53 0-.96-.41-1-.93L6.07 8h11.85l-.79 11.07zM9 17v-6h2v6H9zm4 0v-6h2v6h-2z">
                        </path>
                    </g>
                </svg>
            </button-->
        <!--/a>

        <a class="relative flex flex-col gap-1 px-5 py-3 border-b cursor-pointer border-gray-9 dark:border-black-5 hover:bg-gray-7 dark:hover:bg-black-6"
            href="#">
            <h4 class="text-sm font-medium dark:font-semibold text-gray-5">Space Tourism: Next Frontier</h4>
            <h3 class="font-bold dark:text-gray-3">Commercial space travel gains momentum.</h3>
            <h5 class="text-sm font-medium dark:font-semibold text-gray-5">Adventure beyond Earth's atmosphere.</h5>

           
        </a>

        <a class="relative flex flex-col gap-1 px-5 py-3 border-b cursor-pointer border-gray-9 dark:border-black-5 hover:bg-gray-7 dark:hover:bg-black-6"
            href="#">
            <h4 class="text-sm font-medium dark:font-semibold text-gray-5">Renewable Energy Breakthroughs</h4>
            <h3 class="font-bold dark:text-gray-3">Solar power reaches grid parity.</h3>
            <h5 class="text-sm font-medium dark:font-semibold text-gray-5">Wind energy surpasses fossil fuels.</h5>

        </a-->             
        <?php
            $pdo = new PDO('mysql:host=localhost;dbname=announcements', 'root', '');

            $var=$_GET['view-topics'];
            
            $stmt = $pdo->prepare("SELECT ctype, content, image FROM content WHERE ctype like ?");
            $stmt->bindParam(1, $var);
            $stmt->execute();
                    echo('<div id="sample" ">');
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    
                    // output the image data
                    
                    echo('
                    <a class="relative flex flex-col gap-1 px-5 py-3 border-b cursor-pointer border-gray-9 dark:border-black-5 hover:bg-gray-7 dark:hover:bg-black-6">
            <h4 id ="d1" class="text-sm font-medium dark:font-semibold text-gray-5" onclick="startSpeech(this.innerText)">'.$row['ctype'].'</h4>
            <h3 id ="d2" class="font-bold dark:text-gray-3" onclick="startSpeech(this.innerText)"> '.$row["content"].'</h3>
            <h5 id="d3"class="text-sm font-medium dark:font-semibold text-gray-5"></h5>
            <img role="button" class="object-cover w-full h-full" src="data:image/jpeg;base64,'.base64_encode($row['image']).'" />
                    </a>
                
                
        ');
                        
         //
        //content end
                  
                }echo('</div>');

            /*$sql="select ctype,content from content where ctype=$";
            if(!mysqli_query($con,$sql))
            {echo "error";
            die('Error:'.mysqli_error());
            }*/

            
            

        ?>

        <!-- SPACE -->
        <div class="p-10 bg-transparent">
        </div>

        <!-- BOTTOM BAR - MOBILE -->
        <nav class="fixed bottom-0 flex flex-col w-full gap-3 llg:hidden">
            <!-- TWEET BUTTON -->
            <a class="flex items-center justify-center p-4 ml-auto mr-3 transition rounded-full w-fit llg:hidden bg-primary hover:scale-110"
                href="./write-tweet.html">
                <figure>
                    <svg class="w-7 fill-white-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <g>
                            <path
                                d="M23 3c-6.62-.1-10.38 2.421-13.05 6.03C7.29 12.61 6 17.331 6 22h2c0-1.007.07-2.012.19-3H12c4.1 0 7.48-3.082 7.94-7.054C22.79 10.147 23.17 6.359 23 3zm-7 8h-1.5v2H16c.63-.016 1.2-.08 1.72-.188C16.95 15.24 14.68 17 12 17H8.55c.57-2.512 1.57-4.851 3-6.78 2.16-2.912 5.29-4.911 9.45-5.187C20.95 8.079 19.9 11 16 11zM4 9V6H1V4h3V1h2v3h3v2H6v3H4z">
                            </path>
                        </g>
                    </svg>
                </figure>
            </a>

            <!-- BAR -->
            <div
                class="grid grid-cols-5 px-1 py-4 border-t justify-items-center border-gray-9 dark:border-black-5 dark:bg-black-0 bg-white-0">
                <a class="px-5" href="./home.html">
                    <figure>
                        <svg class="w-8 dark:fill-white-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <g>
                                <path
                                    d="M12 9c-2.209 0-4 1.791-4 4s1.791 4 4 4 4-1.791 4-4-1.791-4-4-4zm0 6c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm0-13.304L.622 8.807l1.06 1.696L3 9.679V19.5C3 20.881 4.119 22 5.5 22h13c1.381 0 2.5-1.119 2.5-2.5V9.679l1.318.824 1.06-1.696L12 1.696zM19 19.5c0 .276-.224.5-.5.5h-13c-.276 0-.5-.224-.5-.5V8.429l7-4.375 7 4.375V19.5z">
                                </path>
                            </g>
                        </svg>
                    </figure>
                </a>

                <a class="px-5" href="./explore.html">
                    <figure>
                        <svg class="w-8 dark:fill-white-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <g>
                                <path
                                    d="M10.09 3.098L9.72 7h5.99l.39-4.089 1.99.187L17.72 7h3.78v2h-3.97l-.56 6h3.53v2h-3.72l-.38 4.089-1.99-.187.36-3.902H8.78l-.38 4.089-1.99-.187L6.77 17H2.5v-2h4.46l.56-6H3.5V7h4.21l.39-4.089 1.99.187zM14.96 15l.56-6H9.53l-.56 6h5.99z">
                                </path>
                            </g>
                        </svg>
                    </figure>
                </a>

                <!--a class="px-5" href="./notifications.html">
                    <figure>
                        <svg class="w-8 dark:fill-white-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <g>
                                <path
                                    d="M19.993 9.042C19.48 5.017 16.054 2 11.996 2s-7.49 3.021-7.999 7.051L2.866 18H7.1c.463 2.282 2.481 4 4.9 4s4.437-1.718 4.9-4h4.236l-1.143-8.958zM12 20c-1.306 0-2.417-.835-2.829-2h5.658c-.412 1.165-1.523 2-2.829 2zm-6.866-4l.847-6.698C6.364 6.272 8.941 4 11.996 4s5.627 2.268 6.013 5.295L18.864 16H5.134z">
                                </path>
                            </g>
                        </svg>
                    </figure>
                </a-->

                <!--a class="px-5" href="./bookmarks.html">
                    <figure>
                        <svg class="w-8 dark:fill-white-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <g>
                                <path
                                    d="M4 4.5C4 3.12 5.119 2 6.5 2h11C18.881 2 20 3.12 20 4.5v18.44l-8-5.71-8 5.71V4.5zM6.5 4c-.276 0-.5.22-.5.5v14.56l6-4.29 6 4.29V4.5c0-.28-.224-.5-.5-.5h-11z">
                                </path>
                            </g>
                        </svg>
                    </figure>
                </a-->

                <a class="px-5" href="./profile.html">
                    <figure class="w-8">
                        <img class="object-cover w-full h-full rounded-full"
                            src="https://unavatar.io/github/antonioalanxs" alt="Profile photo" />
                    </figure>
                </a>
            </div>
        </nav>
    </main>
    <div id="content-body1" class="relative w-screen min-h-screen border-l border-r border-transparent llg:border-gray-9 llg:dark:border-black-5">
        <br><br>
    <h3 align="center" >Speech to Text</h3>
    <br>
    <div id="result" onclick="startSpeech(this.innerText)"></div>
    <button id = "bcc" onclick="startConverting();"><i class="fa fa-microphone btn btn-danger" aria-hidden="true"></i></button>
    <div id="languageDropdown">
        <label for="languageSelect">Select Language:</label>
        <select id="languageSelect" onchange="startConverting()">
            <option value="en-US">English</option>
            <option value="ta-IN">Tamil</option>
            <option value="hi-IN">Hindi</option>
            <option value="ml-IN">Malayalam</option>
            <option value="fr-FR">French</option>
            <option value="te-IN">Telugu</option>
        </select>
    </div>
    <div>
        <br><br><br>
        <label for="targetLanguage">Target Language:</label>
        <select id="targetLanguage" onchange="translateText1(result.innerText)">
            <option value="en">English</option>
            <option value="ta">Tamil</option>
            <option value="hi">Hindi</option>
            <option value="ml">Malayalam</option>
            <option value="fr">French</option>
            <option value="te">Telugu</option>
        </select>
    </div>
    <br>
    <div id="result1" onclick="startSpeech(this.innerText)"></div>
    
        </div>
        

</body>


</html>