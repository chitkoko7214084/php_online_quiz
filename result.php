<?php


    if(!isset($_POST['btn'])){
        header('Location: error.php?e=1'); 
        exit;
        //if no button was clicked then go to error page
    }

    $totalMarks = 0; // Do not edit, initialisation of variable
    $totalQues = 12; //Enter total number of questions here
    
    //first value can be anything as array initialise with 0
    $ans = array('undef',
                 'D',
                'B',
                'C',
                'B',
                'D',
                'A',
                'C',
                'B',
                'B',
                'D',
                'C',
                'B',);

    for ($i=1; $i<= $totalQues; $i++){
    if(isset($_POST['answer-'.$i])){
        if($_POST['answer-'.$i] == $ans[$i] ){
            $totalMarks++;
        }    
    }
    }
    
    
?>
<!DOCTYPE html>
<html>
    <head>
    <title>This is the result for Quiz.</title>
    

    
<!--    styles-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Serif" rel="stylesheet">
    <link rel="stylesheet" href="style.css" >
        
    </head>
    
    <body>
        <header><h1>PHP Quiz</h1></header>
        <hr>
            <div id="result">
        <p>Result:
        <strong style="font-size:1.5em;" ><?= $totalMarks; ?></strong>/<?= $totalQues; ?></p>
        <p>
        <a href="index.php">Start a New Quiz</a>
    </p>
                </div>
    
    </body>
    
    

</html>