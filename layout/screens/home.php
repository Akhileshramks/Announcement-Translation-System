<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin / Announcements</title>

    <link rel="shortcut icon" href="//abs.twimg.com/favicons/twitter.2.ico">
    <!--Icon for notifications https://abs.twimg.com/favicons/twitter-pip.2.ico-->

    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- My JS -->
    <script src="../assets/js/tailwind.config.js"></script>
    <script defer src="../assets/js/darkMode.js"></script>
    <?php
    //php code
    session_start();
    ?>
</head>

<body class="relative flex justify-center llg:px-7 gap-7 bg-white-0 dark:bg-black-0">
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
            <nav class="flex flex-col items-start gap-3">
                <a class="w-full group" href="./home.php">
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
                        <div class="text-2xl text-black-0 dark:text-white-0 group-focus-within:font-semibold">Admin</div>
                    </div>
                </a>

                <a class="w-full group" href="./explore.php">
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
                </a>

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
                        <div class="text-2xl text-black-0 dark:text-white-0 group-focus-within:font-semibold">
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
                        <div class="text-2xl text-black-0 dark:text-white-0 group-focus-within:font-semibold">Bookmarks
                        </div>
                    </div>
                </a-->

                <!-- PROFILE -->
                <a class="w-full group" href="./profile.html">
                    <div
                        class="flex items-center gap-5 px-4 py-3 transition rounded-full w-fit group-hover:scale-110 group-hover:bg-gray-3 dark:group-hover:bg-gray-13 group-focus-within:bg-gray-3 dark:group-focus-within:bg-gray-13 group-focus-within:scale-110">
                        <figure class="w-9">
                            <img class="rounded-full " src="https://unavatar.io/github/antonioalanxs" alt="">
                        </figure>

                        <article class="flex flex-col items-start justify-between">
                            <section class="flex items-center gap-2">
                                <h2 class="text-xl font-semibold dark:text-white-0"><?php echo($_SESSION['username']); ?></h2>

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
            </nav>

            <a class="py-4 text-xl font-bold text-center transition rounded-full cursor-pointer text-white-0 hover:scale-110 bg-primary"
                href="./write-tweet.html">
                POST
            </a>
        </div>
    </aside>

    <!-- CONTENT - FRAME -->
    <main
        class="relative w-screen min-h-screen llg:max-w-[700px] border-l border-r border-transparent llg:border-gray-9 llg:dark:border-black-5">
        <!-- HEADER -->
        <header class="sticky top-0 left-0 border-b backdrop-blur-md border-gray-9 dark:border-black-5">
            <div class="flex items-center justify-between py-2 pl-6 pr-3">
                <!-- TITLE -->
                <h1 id="screenTitle" class="text-xl font-bold dark:text-gray-3 text-black-1">
                    Admin
                </h1>

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

        <!-- SHOW TWEETS BUTTON -->
        <!--button
            class="hidden w-full py-4 text-lg font-semibold border-b llg:block border-gray-9 dark:bg-black-0 hover:bg-gray-7 dark:border-black-5 dark:hover:bg-black-6 text-primary">
            Show 13 new Announcements
        </button-->

        <!-- SHOW TWEETS BUTTON - MOBILE -->
        <div class="sticky flex justify-center hidden llg:hidden">
            <button
                class="fixed px-5 py-3 text-sm font-semibold transition cursor-pointer top-[5.4rem] llg:hidden hover:scale-110 rounded-3xl text-white-0 bg-primary">
                Show 13 Tweets
            </button>
        </div>

        <?php
            $pdo = new PDO('mysql:host=localhost;dbname=announcements', 'root', '');

            $var=$_SESSION['atype'];
            
            $stmt = $pdo->prepare("SELECT ctype, content, image FROM content WHERE ctype like ?");
            $stmt->bindParam(1, $var);
            $stmt->execute();

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    
                    // output the image data
                    echo('<div class="border-b cursor-pointer border-gray-9 dark:bg-black-0 dark:border-black-5">
            <!-- TWEET -->
            <div class="flex w-full gap-4 px-5 pt-3 hover:bg-gray-7 dark:hover:bg-black-6">
                <!-- PROFILE IMAGE - TODO: hacer link a perfil y perfil -->
                <a href="#">
                    <figure class="mt-2 rounded-full h-11 w-11 hover:bg-black-0">
                        <img src="../assets/img/profile0.jpg" alt="Profile photo"
                            class="w-full h-full rounded-full hover:opacity-80" />
                    </figure>
                </a>

                <!-- CONTENT -->
                <div class="flex flex-col flex-1 gap-2">
                    <div class="flex flex-col gap-1">
                        <!-- PROFILE -->
                        <a class="grid items-center grid-flow-col gap-2 auto-cols-auto-auto-1fr" href="#">
                            <span
                                class="overflow-hidden font-bold text-ellipsis whitespace-nowrap hover:underline dark:text-white-0">
                                Southern railways</span>
                            <span class="overflow-hidden text-ellipsis whitespace-nowrap text-gray-4 hover:underline">
                                kaaa@2003
                            </span>

                            <!-- TIME SINCE PUBLICATION -->
                            <span class="text-gray-4 whitespace-nowrap">
                                13h
                            </span>

                            <!-- TRASH CAN (ONLY FOR ADMIN) -->
                            <button class="justify-self-end">
                                <svg class="w-8 p-[0.375rem] transition rounded-full fill-gray-4 hover:fill-red-3 hover:bg-red-2"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                                    <g>
                                        <path
                                            d="M16 6V4.5C16 3.12 14.88 2 13.5 2h-3C9.11 2 8 3.12 8 4.5V6H3v2h1.06l.81 11.21C4.98 20.78 6.28 22 7.86 22h8.27c1.58 0 2.88-1.22 3-2.79L19.93 8H21V6h-5zm-6-1.5c0-.28.22-.5.5-.5h3c.27 0 .5.22.5.5V6h-4V4.5zm7.13 14.57c-.04.52-.47.93-1 .93H7.86c-.53 0-.96-.41-1-.93L6.07 8h11.85l-.79 11.07zM9 17v-6h2v6H9zm4 0v-6h2v6h-2z">
                                        </path>
                                    </g>
                                </svg>
                            </button>
                        </a>

                        <!-- TWEET TEXT -->
                        <p class="overflow-hidden text-sm text-ellipsis text-twitter-dark-gray dark:text-white-0">'.
                            $row["content"].
                        '</p>

                        <!-- IMAGES -->
                        <div class="w-full h-full">
                            <figure>
        <img role="button" class="object-cover w-full h-full" src="data:image/jpeg;base64,'.base64_encode($row['image']).'" />
    </figure>

                            
                        </div>

                        <!-- REACTIONS -->
                        <div class="flex gap-4 pb-3">
                            <!-- COMMENT -->
                            <a class="flex items-center group" href="./reply-tweet.html">
                                <svg viewBox="0 0 24 24" aria-hidden="true"
                                    class="w-8 p-[0.375rem] transition rounded-full fill-gray-4 group-hover:fill-primary group-hover:bg-blue-1 group-dark:hover:bg-blue-0">
                                    <g>
                                        <path
                                            d="M1.751 10c0-4.42 3.584-8 8.005-8h4.366c4.49 0 8.129 3.64 8.129 8.13 0 2.96-1.607 5.68-4.196 7.11l-8.054 4.46v-3.69h-.067c-4.49.1-8.183-3.51-8.183-8.01zm8.005-6c-3.317 0-6.005 2.69-6.005 6 0 3.37 2.77 6.08 6.138 6.01l.351-.01h1.761v2.3l5.087-2.81c1.951-1.08 3.163-3.13 3.163-5.36 0-3.39-2.744-6.13-6.129-6.13H9.756z">
                                        </path>
                                    </g>
                                </svg>

                                <div class="transition text-gray-4 group-hover:text-primary">
                                    0
                                </div>
                            </a>

                            <!-- RETWEET -->
                            <button class="flex items-center gap-1">
                                <svg viewBox="0 0 24 24" aria-hidden="true"
                                    class="w-8 p-[0.375rem] rounded-full fill-green-0">
                                    <g>
                                        <path
                                            d="M4.5 3.88l4.432 4.14-1.364 1.46L5.5 7.55V16c0 1.1.896 2 2 2H13v2H7.5c-2.209 0-4-1.79-4-4V7.55L1.432 9.48.068 8.02 4.5 3.88zM16.5 6H11V4h5.5c2.209 0 4 1.79 4 4v8.45l2.068-1.93 1.364 1.46-4.432 4.14-4.432-4.14 1.364-1.46 2.068 1.93V8c0-1.1-.896-2-2-2z">
                                        </path>
                                    </g>
                                </svg>

                                <span class="text-green-0">
                                    1
                                </span>
                            </button>

                            <!-- LIKE -->
                            <button class="flex items-center gap-1">
                                <svg viewBox="0 0 24 24" aria-hidden="true"
                                    class="w-8 p-[0.375rem] rounded-full fill-red-0">
                                    <g>
                                        <path
                                            d="M20.884 13.19c-1.351 2.48-4.001 5.12-8.379 7.67l-.503.3-.504-.3c-4.379-2.55-7.029-5.19-8.382-7.67-1.36-2.5-1.41-4.86-.514-6.67.887-1.79 2.647-2.91 4.601-3.01 1.651-.09 3.368.56 4.798 2.01 1.429-1.45 3.146-2.1 4.796-2.01 1.954.1 3.714 1.22 4.601 3.01.896 1.81.846 4.17-.514 6.67z">
                                        </path>
                                    </g>
                                </svg>

                                <span class="text-red-0">
                                    3
                                </span>
                            </button>

                            <!-- BOOKMARKS -->
                            <button class="flex items-center gap-1">
                                <svg viewBox="0 0 24 24" aria-hidden="true"
                                    class="w-8 p-[0.375rem] rounded-full fill-primary">
                                    <path
                                        d="M4 4.5C4 3.12 5.119 2 6.5 2h11C18.881 2 20 3.12 20 4.5v18.44l-8-5.71-8 5.71V4.5z">
                                    </path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>');
        //content end
                  
                }

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

                <a class="px-5" href="./notifications.html">
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
                </a>

                <a class="px-5" href="./bookmarks.html">
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
                </a>

                <a class="px-5" href="./profile.html">
                    <figure class="w-8">
                        <img class="object-cover w-full h-full rounded-full"
                            src="https://unavatar.io/github/antonioalanxs" alt="Profile photo" />
                    </figure>
                </a>
            </div>
        </nav>
    </main>

    <!-- RIGHT BAR -->
    <aside class="hidden l2xl:block w-80">
        <div class="sticky top-0 right-0 flex flex-col gap-6">
            <form class="relative mt-4">
                <div class="absolute inset-y-0 flex pointer-events-none left-5">
                    <svg aria-hidden="true" class="w-6 text-gray-5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>

                <input type="text" id="search"
                    class="w-full p-4 text-lg rounded-full pl-14 text-black-0 dark:text-gray-4 dark:bg-black-2 bg-gray-6 dark:placeholder-gray-5 dark:text-white placeholder-text-lg"
                    placeholder="Search" required>
            </form>

            <div class="flex flex-col justify-start pt-3 h-fit bg-gray-6 rounded-3xl dark:bg-black-2 bg-gray-14">
                <h2 class="px-5 pb-3 text-2xl font-bold dark:text-gray-3 text-black-0">
                    What's happening
                </h2>

                <a class="relative flex flex-col gap-1 px-5 py-3 cursor-pointer hover:bg-gray-3 dark:hover:bg-black-3"
                    href="#">
                    <h4 class="text-sm font-medium dark:font-semibold text-gray-5">Trending in North America</h4>
                    <h3 class="font-bold dark:text-gray-3">#RLCS</h3>
                    <h5 class="text-sm font-medium dark:font-semibold text-gray-5">20.5K Tweets</h5>

                    <!-- TRASH CAN (ONLY FOR ADMIN) -->
                    <button class="absolute top-[6px] right-3 justify-self-end">
                        <svg class="w-8 p-[0.375rem] transition rounded-full fill-gray-4 hover:fill-red-3 hover:bg-red-2"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <g>
                                <path
                                    d="M16 6V4.5C16 3.12 14.88 2 13.5 2h-3C9.11 2 8 3.12 8 4.5V6H3v2h1.06l.81 11.21C4.98 20.78 6.28 22 7.86 22h8.27c1.58 0 2.88-1.22 3-2.79L19.93 8H21V6h-5zm-6-1.5c0-.28.22-.5.5-.5h3c.27 0 .5.22.5.5V6h-4V4.5zm7.13 14.57c-.04.52-.47.93-1 .93H7.86c-.53 0-.96-.41-1-.93L6.07 8h11.85l-.79 11.07zM9 17v-6h2v6H9zm4 0v-6h2v6h-2z">
                                </path>
                            </g>
                        </svg>
                    </button>
                </a>

                <a class="relative flex flex-col gap-1 px-5 py-3 cursor-pointer hover:bg-gray-3 dark:hover:bg-black-3"
                    href="#">
                    <h4 class="text-sm font-medium dark:font-semibold text-gray-5">Trending</h4>
                    <h3 class="font-bold dark:text-gray-3">#FERXXO</h3>
                    <h5 class="text-sm font-medium dark:font-semibold text-gray-5">521K Tweets</h5>

                    <!-- TRASH CAN (ONLY FOR ADMIN) -->
                    <button class="absolute top-[6px] right-3 justify-self-end">
                        <svg class="w-8 p-[0.375rem] transition rounded-full fill-gray-4 hover:fill-red-3 hover:bg-red-2"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <g>
                                <path
                                    d="M16 6V4.5C16 3.12 14.88 2 13.5 2h-3C9.11 2 8 3.12 8 4.5V6H3v2h1.06l.81 11.21C4.98 20.78 6.28 22 7.86 22h8.27c1.58 0 2.88-1.22 3-2.79L19.93 8H21V6h-5zm-6-1.5c0-.28.22-.5.5-.5h3c.27 0 .5.22.5.5V6h-4V4.5zm7.13 14.57c-.04.52-.47.93-1 .93H7.86c-.53 0-.96-.41-1-.93L6.07 8h11.85l-.79 11.07zM9 17v-6h2v6H9zm4 0v-6h2v6h-2z">
                                </path>
                            </g>
                        </svg>
                    </button>
                </a>

                <a class="relative flex flex-col gap-1 px-5 py-3 cursor-pointer hover:bg-gray-3 dark:hover:bg-black-3"
                    href="#">
                    <h4 class="text-sm font-medium dark:font-semibold text-gray-5">Trending</h4>
                    <h3 class="font-bold dark:text-gray-3">#NickiNicole</h3>
                    <h5 class="text-sm font-medium dark:font-semibold text-gray-5">620.14K Tweets</h5>

                    <!-- TRASH CAN (ONLY FOR ADMIN) -->
                    <button class="absolute top-[6px] right-3 justify-self-end">
                        <svg class="w-8 p-[0.375rem] transition rounded-full fill-gray-4 hover:fill-red-3 hover:bg-red-2"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <g>
                                <path
                                    d="M16 6V4.5C16 3.12 14.88 2 13.5 2h-3C9.11 2 8 3.12 8 4.5V6H3v2h1.06l.81 11.21C4.98 20.78 6.28 22 7.86 22h8.27c1.58 0 2.88-1.22 3-2.79L19.93 8H21V6h-5zm-6-1.5c0-.28.22-.5.5-.5h3c.27 0 .5.22.5.5V6h-4V4.5zm7.13 14.57c-.04.52-.47.93-1 .93H7.86c-.53 0-.96-.41-1-.93L6.07 8h11.85l-.79 11.07zM9 17v-6h2v6H9zm4 0v-6h2v6h-2z">
                                </path>
                            </g>
                        </svg>
                    </button>
                </a>

                <a class="relative flex flex-col gap-1 px-5 py-3 cursor-pointer hover:bg-gray-3 dark:hover:bg-black-3"
                    href="#">
                    <h4 class="text-sm font-medium dark:font-semibold text-gray-5">Trending in Spain</h4>
                    <h3 class="font-bold dark:text-gray-3">#TailwindCSS</h3>
                    <h5 class="text-sm font-medium dark:font-semibold text-gray-5">2,678 Tweets</h5>

                    <!-- TRASH CAN (ONLY FOR ADMIN) -->
                    <button class="absolute top-[6px] right-3 justify-self-end">
                        <svg class="w-8 p-[0.375rem] transition rounded-full fill-gray-4 hover:fill-red-3 hover:bg-red-2"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
                            <g>
                                <path
                                    d="M16 6V4.5C16 3.12 14.88 2 13.5 2h-3C9.11 2 8 3.12 8 4.5V6H3v2h1.06l.81 11.21C4.98 20.78 6.28 22 7.86 22h8.27c1.58 0 2.88-1.22 3-2.79L19.93 8H21V6h-5zm-6-1.5c0-.28.22-.5.5-.5h3c.27 0 .5.22.5.5V6h-4V4.5zm7.13 14.57c-.04.52-.47.93-1 .93H7.86c-.53 0-.96-.41-1-.93L6.07 8h11.85l-.79 11.07zM9 17v-6h2v6H9zm4 0v-6h2v6h-2z">
                                </path>
                            </g>
                        </svg>
                    </button>
                </a>

                <!-- SHOW MORE -->
                <a class="p-4 group" href="#">
                    <div
                        class="px-5 py-2 text-sm font-semibold transition rounded-3xl group-hover:scale-110 w-fit text-white-0 bg-primary">
                        Show more
                    </div>
                </a>
            </div>
        </div>
    </aside>
</body>

</html>