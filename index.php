<?php


    $sitename = 'CSCI PHP Quiz';
    $siteimage = 'R.png';
  
    
    $note = 'If you dont chose any answers, it will mark <strong>ZERO</strong> for your answers.';
    $remaining_time = 600; // 10 minutes in seconds

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $Project3; ?></title> 

   <img src="R.png" <?=$siteimage;?>alt="Header Image">
<!--    styles-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Serif" rel="stylesheet">
    <link rel="stylesheet" href="style.css" >
</head>
<body>
    <header>
    <h1><?= $sitename; ?></h1>
    </header>
    <script>
            // JavaScript code for the timer
            var remainingTime = <?php echo $remaining_time; ?>;

            function updateTimer() {
                var timerDisplay = document.getElementById('timer');

                function formatTime(seconds) {
                    var minutes = Math.floor(seconds / 60);
                    var remainingSeconds = seconds % 60;
                    return minutes + 'm ' + remainingSeconds + 's';
                }

                function redirectOnTimeout() {
                    // Redirect to the result page when time is up
                    window.location.replace('result.php');
                }

                if (remainingTime <= 0) {
                    redirectOnTimeout();
                } else {
                    // Display the remaining time
                    timerDisplay.innerHTML = 'Time Remaining: ' + formatTime(remainingTime);
                    remainingTime--;

                    // Update the timer every second
                    setTimeout(updateTimer, 1000);
                }
            }

            // Start the timer when the page loads
            window.onload = function () {
                updateTimer();
            };
        </script>
        </head>
        <body>
    </header>
    <hr>
    
    <div id="container">
        <div id="timer"></div>
        <p><strong>Note: </strong><?= $note; ?></p>
        <form action="result.php" method="POST">
        <ol type="1" >
        <div id="question-container">
            <li><h2 class="question" id="1" >What is PHP?</h2></li>
            <input type="radio" name="answer-1" value="A" >PHP os an open-source programming language<br>
            <input type="radio" name="answer-1" value="B" >PHP is used to develop dynamic and interactive websites<br>
            <input type="radio" name="answer-1" value="C" >PHP is a server-side scripting language<br>
            <input type="radio" name="answer-1" value="D" >All of the above<br>
        </div>
    
        <div id="question-container">
            <li><h2 class="question" id="2" >Who is the father of PHP?</h2></li>
            <input type="radio" name="answer-2" value="A" >Drek Kolkevi<br>
            <input type="radio" name="answer-2" value="B" >Rasmus Lerdorf<br>
            <input type="radio" name="answer-2" value="C" >Wilam Makepiece<br>
            <input type="radio" name="answer-2" value="D" >List Barely<br>
        </div>
    
        <div id="question-container">
            <li><h2 class="question" id="3" >What does PHP stand for?</h2></li>
            <input type="radio" name="answer-3" value="A" >PHP stands for Preprocessor Home Page<br>
            <input type="radio" name="answer-3" value="B" >PHP stands for Pretext Hypertext Processor<br>
            <input type="radio" name="answer-3" value="C" >PHP stands for Hypertext Preprocessor<br>
            <input type="radio" name="answer-3" value="D" >PHP stands for Personal Hyper Processor<br>
        </div>
    
        <div id="question-container">
            <li><h2 class="question" id="4" >Which one of the following PHP function is used to determine a file’s last access time?</h2></li>
            <input type="radio" name="answer-4" value="A" >filetime()<br>
            <input type="radio" name="answer-4" value="B" > fileatime()<br>
            <input type="radio" name="answer-4" value="C" > fileltime()<br>
            <input type="radio" name="answer-4" value="D" >filectime()<br>
        </div>
    
        <div id="question-container">
            <li><h2 class="question" id="5" >Which of the following is the correct way to add a comment in PHP code?</h2></li>
            <input type="radio" name="answer-5" value="A" >#<br>
            <input type="radio" name="answer-5" value="B" >//<br>
            <input type="radio" name="answer-5" value="C" > /* */<br>
            <input type="radio" name="answer-5" value="D" >All of the mentioned<br>
        </div>

        <div id="question-container">
            <li><h2 class="question" id="6" > Which of the following is the default file extension of PHP files?</h2></li>
            <input type="radio" name="answer-6" value="A" > .php<br>
            <input type="radio" name="answer-6" value="B" > .ph<br>
            <input type="radio" name="answer-6" value="C" >.xml<br>
            <input type="radio" name="answer-6" value="D" >.html<br>
        </div>
    
        <div id="question-container">
            <li><h2 class="question" id="7" >How to define a function in PHP?</h2></li>
            <input type="radio" name="answer-7" value="A" >functionName(parameters) {function body}<br>
            <input type="radio" name="answer-7" value="B" > function {function body}<br>
            <input type="radio" name="answer-7" value="C" >function functionName(parameters) {function body}<br>
            <input type="radio" name="answer-7" value="D" >data type functionName(parameters) {function body}<br>
        </div>
    
        <div id="question-container">
            <li><h2 class="question" id="8" >Which is the right way of declaring a variable in PHP?</h2></li>
            <input type="radio" name="answer-8" value="A" >$3hello<br>
            <input type="radio" name="answer-8" value="B" >$_hello<br>
            <input type="radio" name="answer-8" value="C" >$this<br>
            <input type="radio" name="answer-8" value="D" >$5_Hello<br>
        </div>
    
        <div id="question-container">
            <li><h2 class="question" id="9" >Which of the following PHP functions can be used for generating unique ids?</h2></li>
            <input type="radio" name="answer-9" value="A" >md5()><br>
            <input type="radio" name="answer-9" value="B" > uniqueid()<br>
            <input type="radio" name="answer-9" value="C" >mdid()<br>
            <input type="radio" name="answer-9" value="D" > id()<br>
        </div>
    
        <div id="question-container">
            <li><h2 class="question" id="10" >A function in PHP which starts with __ (double underscore) is known as __________</h2></li>
            <input type="radio" name="answer-10" value="A" > Default Function<br>
            <input type="radio" name="answer-10" value="B" > User Defined Function<br>
            <input type="radio" name="answer-10" value="C" >  Inbuilt Function<br>
            <input type="radio" name="answer-10" value="D" >Magic Function<br>
        </div>

        <div id="question-container">
            <li><h2 class="question" id="11" >. How many functions does PHP offer for searching and modifying strings using Perl-compatible regular expressions.</h2></li>
            <input type="radio" name="answer-11" value="A" >10<br>
            <input type="radio" name="answer-11" value="B" >7<br>
            <input type="radio" name="answer-11" value="C" >8<br>
            <input type="radio" name="answer-11" value="D" >9<br>
        </div>
    
        <div id="question-container">
            <li><h2 class="question" id="12" >Which of the following web servers are required to run the PHP script?</h2></li>
            <input type="radio" name="answer-12" value="A" > Apache and PHP<br>
            <input type="radio" name="answer-12" value="B" >lls<br>
            <input type="radio" name="answer-12" value="C" >XAMPP<br>
            <input type="radio" name="answer-12" value="D" >Alll of the above<br>
        </div>
        
        <input name="btn" value="Submit" type="submit">
            </ol>
        </form>
        
    </div>
    
</body>
</html>