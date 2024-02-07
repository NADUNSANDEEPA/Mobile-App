<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            .bg_style {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-image: url('./image/bg.jpg');
                background-size: cover; 
                background-position: center;
                background-repeat: no-repeat; 
            }

            #loader {
                position: fixed;
                top: 0;
                left: 0;
                width: 0;
                height: 4px; 
                background-color: #B1AC56;
                z-index: 9999; 
                transition: width 1.5s ease-in-out;
            }
            
            
        </style>
    </head>
    <body class="bg_style">
        <div id="loader"></div>
        <img src="./image/alison logo.png" alt="Logo" style="width: 60%;">
        <script>
            window.addEventListener("load", function () {
                const loader = document.getElementById("loader");
                loader.style.width = "100%";
                setTimeout(() => {
                    loader.style.width = "0%";
                    window.location.href = './dashboard'; 
                }, 2500); 
            });
        </script>
    </body>
</html>
