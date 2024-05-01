#!/usr/local/bin/php
<html>
    <head>
        <title>
            KEVIN OS
        </title>

        <link href="style.css" rel="stylesheet" type="text/css">

        <!-- FAVICON -->
        <link rel="icon" type="image/x-icon" href="files/cake.webp">
        
    </head>

    <body style="background-image: url(files/loading.png); background-repeat: no-repeat; background-size: cover; background-color: black;">
    
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <h1 id="text-container" style="color: white; text-align: center; font-size: 5em;">LOADING</h1>
    </div>

    <img id="fadeBlack" src="files/black.jpg">

    <script>
        var texts = ["LOADING", "LOADING.", "LOADING..", "LOADING..."];
        var currentIndex = 1;
        var textContainer = document.getElementById("text-container");

        function cycleText() {
            textContainer.textContent = texts[currentIndex];
            currentIndex = (currentIndex + 1) % texts.length;
        }
        setInterval(cycleText, 500);
    </script>

    <script>
        var fadeInImage = document.getElementById('fadeBlack');
        var delayInMilliseconds = 1000;

        setTimeout(function() {
            fadeInImage.classList.add('fade-in');

            setTimeout(function() {
            var date = new Date();
            var month = date.getMonth() + 1;
            var day = date.getDate();

            if (month == 8 && day == 2){
                // REDIRECT TO THE YES.PHP PAGE
                window.location.assign("https://www.cise.ufl.edu/~kcen/isitkevin'sbirthdaytoday/yes.php");
            }
            else{
                // REDIRECT TO THE NO.PHP PAGE
                window.location.assign("https://www.cise.ufl.edu/~kcen/isitkevin'sbirthdaytoday/no.php");
            }
        }, delayInMilliseconds);
        }, 3000);
    </script>
    </body>
</html>