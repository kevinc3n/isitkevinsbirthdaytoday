#!/usr/local/bin/php
<?php
    if (!(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] === "https://www.cise.ufl.edu/~kcen/isitkevin'sbirthdaytoday/")) {
        header("Location: https://www.cise.ufl.edu/~kcen/isitkevin'sbirthdaytoday/");
        die();
    }
?>

<html>
    <head>
      <title>
        KEVIN OS
      </title>

      <!-- BOOTSTRAP CDN LINK -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      
      <!-- BOOTSTRAP META TAGS -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSS LINKS -->
      <link href="style.css" rel="stylesheet" type="text/css">

      <!-- FAVICON -->
      <link rel="icon" type="image/x-icon" href="files/cake.webp">

      <!-- JQUERY LINK -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>


      <!-- CDN FOR ICONS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    
      <script>
        // FINDS THE CURRENT HIGHEST Z-INDEX
        function getNextZIndex() {
          var customBoxes = $('.custom-box.draggable');
          var highestIndex = 0;
          customBoxes.each(function(index, box) {
            var zIndex = parseInt($(box).css('z-index'), 10);
            if (zIndex && zIndex > highestIndex) {
              highestIndex = zIndex;
            }
          });
          return highestIndex + 1;
        }
      </script>
      
    </head>

    <body style="background-image: url(files/background.png); background-repeat: no-repeat; background-size: cover;">

      <img id="fadeBlack" src="files/black.jpg" style="opacity: 1; min-height: 100%; min-width: 1024px; width: 100%; height: auto; position: fixed; top: 0; left: 0; z-index: 9999; pointer-events: none;">

      <audio id="clickSound" src="files/click.wav"></audio>

      <!-- TASKBAR -->
      <div class="taskbar">

        <!-- WELCOME ICON -->
        <div class="taskbar-icon">
          <div class="custom-box" style="--box-width: 35px; --box-height: 35px; visibility: hidden; padding-bottom: 40px">
            <div class="desktop-icon" data-target="iconWindow3" style="width: 35px !important; height: 35px !important;">
              <img src="files/globe.gif" alt="Icon" style="pointer-events: none; width: 35px !important; height: 35px !important;">
            </div>
          </div>
        </div>

        <!-- BIRTHDAY REMINDER ICON -->
        <div class="taskbar-icon">
          <div class="custom-box" style="--box-width: 35px; --box-height: 35px; visibility: hidden; padding-bottom: 40px; padding-left: 50px">
            <div class="desktop-icon" data-target="iconWindow4" style="width: 35px !important; height: 35px !important;">
              <img src="files/alert.png" alt="Icon" style="pointer-events: none; width: 35px !important; height: 35px !important;">
            </div>
          </div>
        </div>

        <!-- STATUS ICON -->
        <div class="taskbar-icon">
          <div class="custom-box" style="--box-width: 24px; --box-height: 24px; visibility: hidden; padding-bottom: 40px; padding-left: 85px">
            <div class="desktop-icon" data-target="iconWindow7" style="width: 35px !important; height: 35px !important;">
              <img src="files/check.png" alt="Icon" style="pointer-events: none; width: 35px !important; height: 35px !important;">
            </div>
          </div>
        </div>

        <!-- COUNTDOWN ICON -->
        <div class="taskbar-icon">
          <div class="custom-box" style="--box-width: 24px; --box-height: 24px; visibility: hidden; padding-bottom: 40px; padding-left: 120px">
            <div class="desktop-icon" data-target="iconWindow5" style="width: 35px !important; height: 35px !important;">
              <img src="files/clock.png" alt="Icon" style="pointer-events: none; width: 35px !important; height: 35px !important;">
            </div>
          </div>
        </div>

        <!-- AGE ICON -->
        <div class="taskbar-icon">
          <div class="custom-box" style="--box-width: 24px; --box-height: 24px; visibility: hidden; padding-bottom: 40px; padding-left: 155px">
            <div class="desktop-icon" data-target="iconWindow6" style="width: 35px !important; height: 35px !important;">
              <img src="files/sun.png" alt="Icon" style="pointer-events: none; width: 35px !important; height: 35px !important;">
            </div>
          </div>
        </div>

        <!-- TIME -->
        <div class="time-display"></div>
        <div class="date-display"></div>
      </div>

      <!-- WELCOME BOX -->
      <div class="randomLocation">
        <div id="iconWindow3" class="center hide">
          <div class="custom-box draggable" style="--box-width: 300px; --box-height: 300px; --box-color: rgb(224, 238, 170);">
            <h6>THIS SITE INFORMS YOU OF WHETHER IT IS KEVIN CEN'S BIRTHDAY TODAY! KEVIN'S BIRTHDAY IS AUGUST 2ND.</h6>
            <div class="close-button"></div>
            <div class="top-left-box" style="--box-width: 200px; --box-height: 50px; --box-color: rgb(252, 178, 149);">
              <p style="font-family: RETRO; font-size: small; color: rgb(0, 0, 0)">
                <i class="fas fa-smile" style="color: black"></i> WELCOME
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- MISO ICON -->
      <div class="randomLocation">
        <div class="custom-box draggable" style="--box-width: 50px; --box-height: 50px; visibility: hidden;">
          <div class="desktop-icon" data-target="iconWindow1">
            <img src="files/dog.png" alt="Icon" style="pointer-events: none;">
            <span>Miso.png</span>
          </div>
        </div>
      </div>

      <!-- MISO BOX -->
      <div class="randomLocation">
        <div id="iconWindow1" class="hide">
          <div class="custom-box draggable" style="--box-width: 300px; --box-height: 500px; --box-color: rgb(186, 248, 245);">
            <img src="files/MISO.png" alt="Your Image" style="max-width: 100%; max-height: 100%; object-fit: cover; pointer-events: none;">
            <div class="close-button"></div>
            <div class="top-left-box" style="--box-width: 200px; --box-height: 50px; --box-color: rgb(116, 94, 129);">
              <p style="font-family: RETRO; font-size: small; color: rgb(255, 255, 255)">
                <i class="fas fa-dog"></i> MY DOG MISO
              </p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- AUDIO ICON -->
      <div class="randomLocation">
        <div class="custom-box draggable" style="--box-width: 50px; --box-height: 50px; visibility: hidden;">
          <div class="desktop-icon" data-target="iconWindow2">
            <img src="files/song.png" alt="Icon" style="pointer-events: none;">
            <span>audio.mp3</span>
          </div>
        </div>
      </div>
    
      <!-- AUDIO BOX -->
      <div class="randomLocation">
        <div id="iconWindow2" class="hide">
          <div class="custom-box draggable" style="--box-width: 300px; --box-height: 100px; --box-color: rgb(193, 245, 202); ">
            <audio controls draggable="false" class="audio-pointer" data-bs-toggle="tooltip" title='"TURTLES & BUTTERFLIES" by klovyn'>
              <source src="files/tb.mp3" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
            <div class="close-button"></div>
            <div class="top-left-box" style="--box-width: 200px; --box-height: 50px; --box-color: rgb(193, 224, 245);">
              <p style="font-family: RETRO; font-size: small; color: rgb(0, 0, 0)">
                <i class="fas fa-music" style="color: black"></i> A SONG I MADE
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- AGE ICON -->
      <div class="randomLocation">
        <div class="custom-box draggable" style="--box-width: 50px; --box-height: 50px; visibility: hidden;">
          <div class="desktop-icon" data-target="iconWindow6">
            <img src="files/sun.png" alt="Icon" style="pointer-events: none;">
            <span>next_age.exe</span>
          </div>
        </div>
      </div>

      <!-- AGE BOX -->
      <div class="randomLocation">
        <div id="iconWindow6" class="hide">
          <div class="custom-box draggable" style="--box-width: 250px; --box-height: 100px; --box-color: #65DEF1;">
            <div id="age" class="text"></div>
            <div id="age-text" class="text">&nbsp;YEARS OLD</div>
            <div class="top-left-box" style="--box-width: 150px; --box-height: 50px; --box-color: #F1F5F2;">
              <p style="font-family: RETRO; font-size: small; color: rgb(0, 0, 0)">
                NEXT AGE:
              </p>
            </div>
            <div class="close-button"></div>
          </div>
        </div>
      </div>

      <!-- COUNTDOWN ICON -->
      <div class="randomLocation">
        <div class="custom-box draggable" style="--box-width: 50px; --box-height: 50px; visibility: hidden;">
          <div class="desktop-icon" data-target="iconWindow5">
            <img src="files/clock.png" alt="Icon" style="pointer-events: none;">
            <span>countdown.exe</span>
          </div>
        </div>
      </div>

      <!-- COUNTDOWN BOX -->
      <div class="randomLocation">
        <div id="iconWindow5" class="hide">
          <div class="custom-box draggable" style="--box-width: 250px; --box-height: 100px; --box-color: #94C5CC;">
            <div class="text" id="countdown"></div>
            <div class="top-left-box" style="--box-width: 200px; --box-height: 50px; --box-color: #65B891;">
              <p style="font-family: RETRO; font-size: small; color: rgb(255, 255, 255)">
                <i class="fas fa-birthday-cake"></i> BIRTHDAY IN:
              </p>
            </div>
            <div class="close-button"></div>
          </div>
        </div>
      </div>

      <!-- STATUS ICON -->
      <div class="randomLocation">
        <div class="custom-box draggable" style="--box-width: 50px; --box-height: 50px; visibility: hidden;">
          <div class="desktop-icon" data-target="iconWindow7">
            <img src="files/check.png" alt="Icon" style="pointer-events: none;">
            <span>status.exe</span>
          </div>
        </div>
      </div>

      <!-- STATUS BOX -->
      <div class="randomLocation">
        <div id="iconWindow7">
          <div class="custom-box draggable" style="--box-width: 200px; --box-height: 100px; --box-color: rgb(255, 238, 81); z-index: 499">
            <h3>NO.</h3>
            <div class="close-button"></div>
            <div class="top-left-box" style="--box-width: 150px; --box-height: 50px; --box-color: rgb(120, 127, 141);">
              <p style="font-family: RETRO; font-size: small; color: rgb(255, 255, 255)">
                STATUS...
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- REMINDER ICON -->
      <div class="randomLocation">
        <div class="custom-box draggable" style="--box-width: 50px; --box-height: 50px; visibility: hidden;">
          <div class="desktop-icon" data-target="iconWindow4">
            <img src="files/alert.png" alt="Icon" style="pointer-events: none;">
            <span>reminder!</span>
          </div>
        </div>
      </div>
      
      <!-- BIRTHDAY REMINDER BOX -->
      <div class="randomLocation">
        <div id="iconWindow4">
          <div class="custom-box draggable" style="--box-width: 300px; --box-height: 100px; --box-color: rgb(255, 183, 88); z-index: 500">
            <h6>IS IT KEVIN CEN'S BIRTHDAY TODAY?</h6>
            <div class="close-button"></div>
            <div class="top-left-box" style="--box-width: 150px; --box-height: 50px; --box-color: rgb(255, 103, 103);">
              <p style="font-family: RETRO; font-size: small; color: rgb(255, 255, 255)">
                <i class="fas fa-bell"></i> REMINDER
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- AGE ICON -->
      <div class="randomLocation">
        <div class="custom-box draggable" style="--box-width: 50px; --box-height: 50px; visibility: hidden;">
          <div class="desktop-icon" data-target="iconWindow8">
            <img src="files/pencil.png" alt="Icon" style="pointer-events: none;">
            <span>notepad.exe</span>
          </div>
        </div>
      </div>

      <!-- NOTEPAD BOX -->
      <div class="randomLocation">
        <div id="iconWindow8" class="hide">
          <div class="custom-box draggable" style="--box-width: 200px; --box-height: 300px; --box-color: rgb(255, 255, 255);">
            <div class="close-button"></div>
            <div class="top-left-box" style="--box-width: 150px; --box-height: 50px; --box-color: rgb(181, 255, 251);">
              <p style="font-family: RETRO; font-size: small; color: rgb(0, 0, 0)">
                <i class="fas fa-pencil"></i> NOTEPAD
              </p>
            </div>
            <div class="textarea-container">
              <textarea placeholder="Write Something..." class="notepad-textbox" style="resize: none; width: 100%; height: 100%; border-radius: 10px; background-color: rgb(255, 234, 202); font-family: RETRO; cursor: url(files/drag.png), auto; font-size: 12px; padding: 15px;"></textarea>
            </div>
          </div>
        </div>
      </div>

      <!-- KEYBOARD SOUND EFFECT -->
      <audio id="typingSound" src="files/keyboard.wav"></audio>

      <script>
        var typingSound = document.getElementById('typingSound');
        var notepadTextbox = document.querySelector('.notepad-textbox');
      
        notepadTextbox.addEventListener('input', function() {
          typingSound.currentTime = 0;
          typingSound.play();
        });
      </script>

      <!-- ICON-WINDOW SYSTEM -->
      <script>
        var iconWindows = document.querySelectorAll('[id^="iconWindow"]');
        var icon = document.querySelector('.desktop-icon');
        var clickCount = 0;
        var clickTimeout;
      
        document.addEventListener('click', function(event) {
          var target = event.target;
          if (target.classList.contains('desktop-icon')) {
            var dataTarget = target.getAttribute('data-target');
            var iconWindow = document.getElementById(dataTarget);
            if (iconWindow) {
              clickCount++;
      
              if (clickCount === 1) {
                clickTimeout = setTimeout(function() {
                  clickCount = 0;
                }, 300);
              } else if (clickCount === 2) {
                clearTimeout(clickTimeout);
                clickCount = 0;
      
                iconWindow.classList.remove("hide");
      
                var box = iconWindow.querySelector('.custom-box');
                box.style.visibility = 'visible';

                $(box).css('z-index', getNextZIndex());
              }
            }
          }
        });
      </script>

      <!-- TIME SYSTEM -->
      <div>
        <span class="time-display"></span>
      </div>
      <div>
        <span class="date-display"></span>
      </div>

      <script>
        function updateTime() {
          var timeDisplay = document.querySelector('.time-display');
          var options = { hour: 'numeric', minute: 'numeric' };
          var currentTime = new Date().toLocaleTimeString([], options);
          timeDisplay.textContent = currentTime;
        }

        function updateDate() {
          var dateDisplay = document.querySelector('.date-display');
          var options = { month: 'numeric', day: 'numeric', year: 'numeric' };
          var currentDate = new Date().toLocaleDateString([], options);
          dateDisplay.textContent = currentDate;

          var now = new Date();
          var tomorrow = new Date(now);
          tomorrow.setDate(now.getDate() + 1);
          tomorrow.setHours(0, 0, 0, 0);
          var timeUntilMidnight = tomorrow - now;

          setTimeout(updateDate, timeUntilMidnight);
        }

        setInterval(updateTime, 1000);
        updateDate();
      </script>

      <!-- MOUSE CLICK SYSTEM -->
      <script>
        function playClickSound() {
          var clickSound = new Audio('files/click.wav');
          clickSound.play();
        }

        var isTouchDevice = 'ontouchstart' in document.documentElement;

        if (!isTouchDevice) {
          document.addEventListener('mouseup', playClickSound);
        }
        else{
          document.addEventListener('touchend', playClickSound);
        }
      </script>

      <!-- CLOSE BUTTON -->
      <script>
        var closeButtons = document.querySelectorAll('.custom-box .close-button');

        closeButtons.forEach(function(closeButton) {

          var parentBox = closeButton.parentElement;
          closeButton.addEventListener('click', function() {
            parentBox.style.visibility = 'hidden';
          });
        });
      </script>

      <!-- RANDOM BOX LOCATION SYSTEM -->
      <script>
        function getRandomPosition(min, max) {
          return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        var customBoxes = document.querySelectorAll('.randomLocation .custom-box');

        customBoxes.forEach(function(customBox) {
          var boxWidth = customBox.offsetWidth;
          var boxHeight = customBox.offsetHeight;
          var start = 10;

          var topBox = customBox.querySelector('.top-left-box');
          if (topBox) {
            var topBoxHeight = topBox.offsetHeight;
            boxHeight += topBoxHeight;
            start = 50;
          }

          var maxX = (window.innerWidth - customBox.offsetWidth) - 20;
          var maxY = window.innerHeight - boxHeight;

          if (!topBox) {
            maxY -= 50;
          }

          var randomX = getRandomPosition(start, maxX - window.pageXOffset);
          var randomY = getRandomPosition(start, maxY);

          customBox.style.left = randomX + 'px';
          customBox.style.top = randomY + 'px';
        });
      </script>

      <!-- DRAG SYSTEM -->
      <script>
        $(document).ready(function() {
          var customBoxes = $('.custom-box.draggable');
      
          customBoxes.each(function(index, customBox) {
            var draggableArea = $(customBox);
            var offsetX, offsetY;
      
            draggableArea.mousedown(startDrag);
            draggableArea.on('touchstart', startDrag);
      
            function startDrag(e) {
              if (e.type === 'mousedown') {
                offsetX = e.clientX - customBox.offsetLeft;
                offsetY = e.clientY - customBox.offsetTop;
                $(document).mousemove(dragElement);
                $(document).mouseup(stopDrag);
              } 
              else if (e.type === 'touchstart') {
                offsetX = e.touches[0].clientX - customBox.offsetLeft;
                offsetY = e.touches[0].clientY - customBox.offsetTop;
                $(document).on('touchmove', dragElement);
                $(document).on('touchend', stopDrag);
              }
            }
      
            function dragElement(e) {
              // BY DEFAULT, IT HAS 50 MORE PIXELS TO ACT AS PADDING (ONLY FOR BOXES WITH NO TOP BOX)
              var boxHeight = customBox.offsetHeight + 50;
      
              $(customBox).css('z-index', getNextZIndex());
      
              var tooltip = $(customBox).find('.audio-pointer[data-bs-toggle="tooltip"]');
              if (tooltip.length > 0) {
                tooltip.css('z-index', getNextZIndex());
              }
      
              var maxX = (window.innerWidth - customBox.offsetWidth) - 20;
              var maxY = window.innerHeight - customBox.offsetHeight;
      
              var x, y;
      
              var start = 20;
      
              var closeBox = $(customBox).find('.close-button');
      
              if (closeBox.length > 0) {
                start = 10;
              }
      
              if (e.type === 'mousemove') {
                x = e.clientX - offsetX;
                y = e.clientY - offsetY;
              } else if (e.type === 'touchmove') {
                x = e.touches[0].clientX - offsetX;
                y = e.touches[0].clientY - offsetY;
              }
      
              var topBox = $(customBox).find('.top-left-box');
      
              // IF THERE IS A TOP BOX, THEN THE START IS UPDATED TO BE THE HEIGHT OF THE TOP BOX
              if (topBox.length > 0) {
                start = 50;
                var topBoxHeight = topBox.outerHeight();
                // BOX HEIGHT IS UPDATED AND THE 50 PIXEL PADDING IS ALSO REMOVED
                boxHeight += topBoxHeight;
                boxHeight -= 50;
              }
      
              x = Math.max(0, Math.min(x, maxX));
      
              // IF THE BOX IS PAST THE TOP, SNAP IT BACK TO THE TOP LIMIT (0 FOR NO TOP BOX AND 50 FOR TOP BOX)
              if (y < start) {
                y = start;
              }
      
              // IF THE BOX IS PAST THE BOTTOM, SNAP IT BACK TO THE BOTTOM LIMIT
              if (y > window.innerHeight - boxHeight) {
                y = window.innerHeight - boxHeight;
              }
      
              $(customBox).css({
                left: x + 'px',
                top: y + 'px'
              });
            }
      
            function stopDrag(e) {
              if (e.type === 'mouseup') {
                $(document).off('mousemove', dragElement);
                $(document).off('mouseup', stopDrag);
              } else if (e.type === 'touchend') {
                $(document).off('touchmove', dragElement);
                $(document).off('touchend', stopDrag);
              }
            }
          });
        });
      </script>

      <!-- FADE IN SYSTEM -->
      <script>
        var fadeInImage = document.getElementById('fadeBlack');

        setTimeout(function() {
            fadeInImage.classList.add('fade-out');
        }, 1000);
      </script>

      <script>
        // GET THE CURRENT DATE AND YEAR
        var date = new Date();
        var year = date.getFullYear();

        // GENERATE THE BIRTHDATE FOR THIS YEAR
        var birthDate = new Date(year + '-08-02T00:00:00');

        // IF THE DATE IS PAST AUGUST 2ND OF THIS YEAR, SET THE YEAR TO THE NEXT ONE
        var currentDate = new Date();
        var timeDifference = birthDate.getTime() - currentDate.getTime();

        if (timeDifference <= 0) {
          year = date.getFullYear() + 1;
          birthDate = new Date(year + '-08-02T00:00:00');
        }

        // CALCULATE INITIAL COUNTDOWN VALUES
        timeDifference = birthDate.getTime() - currentDate.getTime();
        var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        // SET INITIAL COUNTDOWN DISPLAY
        document.getElementById('countdown').innerHTML = days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's';

        // GET THE AGE
        var age = year - 2003;
        document.getElementById('age').innerHTML = " " + age + " ";

        // CALL THE COUNTDOWN FUNCTION EVERY SECOND
        var countdownTimer = setInterval(updateCountdown, 1000);

        function updateCountdown() {
          // GET THE CURRENT TIME AND THE DIFFERENCE BETWEEN THE CURRENT TIME AND THE BIRTHDATE
          currentDate = new Date();
          timeDifference = birthDate.getTime() - currentDate.getTime();

          // CALCULATE THE INDIVIDUAL METRICS
          var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
          var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

          // UPDATE THE DISPLAY
          document.getElementById('countdown').innerHTML = days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's';
        }
      </script>

      <!-- ADDITIONAL BOOTSTRAP CDN -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <!-- TOOLTIP -->
      <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
      </script>

    </body>
</html>