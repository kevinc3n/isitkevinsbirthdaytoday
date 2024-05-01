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

    <body>

      <div class="rave-overlay">
        <div class="color-layer"></div>
      </div>

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

        <!-- AGE ICON -->
        <div class="taskbar-icon">
          <div class="custom-box" style="--box-width: 24px; --box-height: 24px; visibility: hidden; padding-bottom: 40px; padding-left: 120px">
            <div class="desktop-icon" data-target="iconWindow6" style="width: 35px !important; height: 35px !important;">
              <img src="files/sun.png" alt="Icon" style="pointer-events: none; width: 35px !important; height: 35px !important;">
            </div>
          </div>
        </div>

        <!-- MESSAGE ICON -->
        <div class="taskbar-icon">
          <div class="custom-box" style="--box-width: 24px; --box-height: 24px; visibility: hidden; padding-bottom: 40px; padding-left: 155px">
            <div class="desktop-icon" data-target="iconWindow9" style="width: 35px !important; height: 35px !important;">
              <img src="files/mail.png" alt="Icon" style="pointer-events: none; width: 35px !important; height: 35px !important;">
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
            <span>birthday_age.exe</span>
          </div>
        </div>
      </div>

      <!-- AGE BOX -->
      <div class="randomLocation">
        <div id="iconWindow6" class="hide">
          <div class="custom-box draggable" style="--box-width: 280px; --box-height: 100px; --box-color: #65DEF1;">
            <div id="age" class="text"></div>
            <div id="age-text" class="text">&nbsp;YEARS OLD</div>
            <div class="top-left-box" style="--box-width: 230px; --box-height: 50px; --box-color: #F1F5F2;">
              <p style="font-family: RETRO; font-size: smaller; color: rgb(0, 0, 0)">
                BIRTHDAY AGE:
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
          <div class="custom-box draggable" style="--box-width: 200px; --box-height: 100px; --box-color: rgb(255, 238, 81); z-index: 499;">
            <h3>YES!</h3>
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
          <div class="custom-box draggable" style="--box-width: 300px; --box-height: 100px; --box-color: rgb(255, 183, 88); z-index: 500;">
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
              <textarea id="notepadTextarea" class="notepad-textbox" placeholder="Write Something..." style="resize: none; width: 100%; height: 100%; border-radius: 10px; background-color: rgb(255, 234, 202); font-family: RETRO; cursor: url(files/drag.png), auto; font-size: 12px; padding: 15px;"></textarea>
            </div>
          </div>
        </div>
      </div>

      <!-- MESSAGE ICON -->
      <div class="randomLocation">
        <div class="custom-box draggable" style="--box-width: 50px; --box-height: 50px; visibility: hidden;">
          <div class="desktop-icon" data-target="iconWindow9">
            <img src="files/mail.png" alt="Icon" style="pointer-events: none;">
            <span>message.exe</span>
          </div>
        </div>
      </div>

      <!-- MESSAGE BOX -->
      <div class="randomLocation">
        <div id="iconWindow9" class="hide">
          <div class="custom-box draggable" style="--box-width: 300px; --box-height: 450px; --box-color: rgb(255, 232, 173);">
            <div class="close-button"></div>
            <div class="top-left-box" style="--box-width: 250px; --box-height: 50px; --box-color: rgb(131, 249, 161);">
              <p style="font-family: RETRO; font-size: small; color: rgb(0, 0, 0)">
                <i class="fas fa-smile"></i> SEND A MESSAGE!
              </p>
            </div>

            <!-- MESSAGE FORM -->
            <!-- MESSAGE FORM -->
            <form id="messageForm" style="padding: 10px; text-align: left;">
              <h6 style="padding-top: 20px"> NAME:</h6>
              <input required placeholder="Your Name Here" id="nameTextarea" type="text" name="name" style="border-radius: 10px; padding: 10px; width: 100%;" pattern=".{1,15}" title="Name must be between 1 and 15 characters.">
              <hr>
              <h6> MESSAGE:</h6>
              <textarea required placeholder="Send a Birthday Message!" id="messageTextarea" name="message" style="border-radius: 10px; font-size: smaller; padding: 10px; width: 100%; height: 200px; resize: none; font-family: RETRO;"></textarea>
              <div style="padding-top: 13px; text-align: right" class="submitResetButton" value="process">
                  <button style="width: 50px; height: 50px; padding: 0; border: none; background: none; cursor: url(files/point.png), auto;" type="submit" id="submitButton">
                      <img src="files/submit_gif.gif" alt="Submit Message" style="display: block; width: 100%; height: 100%;">
                  </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- THANK YOU BOX -->
      <div id="iconWindow10" style="display: none">
        <div class="custom-box" style="--box-width: 350px; --box-height: 300px; --box-color: rgb(255, 239, 188);">
          <div class="top-left-box" style="--box-width: 200px; --box-height: 50px; --box-color: rgb(252, 174, 174);">
            <p style="font-family: RETRO; font-size: small; color: rgb(0, 0, 0); text-align: left; padding-left: 10px">
              <i class="fas fa-smile"></i> THANK YOU!
            </p>
          </div>
          <p id="thankYouMessage"> THANK YOU <span id="namePlaceholder"></span> FOR THE BIRTHDAY MESSAGE! </p>
        </div>
      </div>

      <img id="playPauseButton" style="cursor: url(files/point.png), auto;" src="files/play.png" width="50" height="50" data-bs-toggle="tooltip" title='Click to Play a Song!'>

      <script>
        $(document).ready(function() {
          $("#messageForm").submit(function(event) {
            event.preventDefault(); // Prevent the form from submitting normally
            
            // Get the values from the textareas
            var name = $("#nameTextarea").val();
            var message = $("#messageTextarea").val();
            
            // Send the AJAX request
            $.ajax({
              type: "POST",
              url: "message.php",
              data: {
                name: name,
                message: message
              },
              success: function(response) {
                // Update the name in the <p> tag and make it uppercase
                $("#namePlaceholder").text(response.name).css("display", "block").text(response.name.toUpperCase());
                
                // Show the entire box and fade it out after 3 seconds
                $("#iconWindow10").fadeIn(function() {
                  setTimeout(function() {
                    $("#iconWindow10").fadeOut(function() {
                      // Clear the name and message inputs after fading out
                      $("#nameTextarea").val("");
                      $("#messageTextarea").val("");
                    });
                  }, 2000);
                });
              }
            });
          });
        });
      </script>

      <div id="confettiContainer"></div>

      <script>
        function createConfetti() {
          const confettiContainer = document.getElementById('confettiContainer');
          const colors = ['confetti-red', 'confetti-blue', 'confetti-green'];

          const confetti = document.createElement('div');
          confetti.classList.add('confetti');
          const randomColor = colors[Math.floor(Math.random() * colors.length)];
          confetti.classList.add(randomColor);
          confetti.style.left = `${Math.random() * 100}vw`;
          confettiContainer.appendChild(confetti);

          // Remove confetti after it falls out of the screen
          setTimeout(() => {
            confetti.remove();
          }, 3000);
        }

        // Generate confetti periodically
        setInterval(createConfetti, 75);

      </script>

      <script>
        $(document).ready(function() {
          var audio = new Audio('files/Celebration.mp3');
          var isPlaying = false;

          audio.addEventListener('canplaythrough', function() {
            audio.autoplay = true;
            audio.loop = true;
          });

          // Toggle play/pause on button click
          $('#playPauseButton').on('click', function() {
            if (isPlaying) {
              audio.pause();
              isPlaying = false;
              $('#playPauseButton').attr('src', 'files/play.png');
            } else {
              audio.play();
              isPlaying = true;
              $('#playPauseButton').attr('src', 'files/pause.png');
            }
          });
        });
      </script>

      <!-- KEYBOARD SOUND EFFECT -->
      <audio id="typingSound" src="files/keyboard.wav"></audio>

      <script>
        var typingSound = document.getElementById('typingSound');
  
        var notepadTextarea = document.getElementById('notepadTextarea');
        var messageTextarea = document.getElementById('messageTextarea');
        var nameTextarea = document.getElementById('nameTextarea');
        
        function playTypingSound() {
          typingSound.currentTime = 0;
          typingSound.play();
        }
        
        notepadTextarea.addEventListener('input', playTypingSound);
        messageTextarea.addEventListener('input', playTypingSound);
        nameTextarea.addEventListener('input', playTypingSound);
      </script>

      <!-- ICON-WINDOW SYSTEM -->
      <script>
        // Function to get the current highest z-index
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
                console.log(highestZIndex);
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

        // GET THE AGE
        var age = year - 2003;
        document.getElementById('age').innerHTML = " " + age + " ";

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