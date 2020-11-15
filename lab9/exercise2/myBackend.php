<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    



    function checkAnswers()
    {
        $q1Answer = $_POST["q1"];
        $q2Answer = $_POST["q2"];
        $q3Answer = $_POST["q3"];
        $q4Answer = $_POST["q4"];
        $q5Answer = $_POST["q5"];

        echo "Question 1: What is the name of this websites owner?" . "<br>";
        echo "    You answered: " . $q1Answer . "<br>";
        echo "    Correct answer: " . "Tristan" . "<br><br>";

        echo "Question 2: Who won the champions league final in 2020?" . "<br>";
        echo "    You answered: " . $q2Answer . "<br>";
        echo "    Correct answer: " . "Bayern Munich" . "<br><br>";

        echo "Question 3: What is Homer Simpson's Dad's name on the show The Simpsons?" . "<br>";
        echo "    You answered: " . $q3Answer . "<br>";
        echo "    Correct answer: " . "Abe" . "<br><br>";

        echo "Question 4: What city is the capital of Kansas?" . "<br>";
        echo "    You answered: " . $q4Answer . "<br>";
        echo "    Correct answer: " . "Topkea" . "<br><br>";

        echo "Question 5: What famous burger chain is coming to Kansas City because of Patrick Mahomes?" . "<br>";
        echo "    You answered: " . $q5Answer . "<br>";
        echo "    Correct answer: " . "Whattaburger" . "<br><br>";

    }

    function computeGrade()
    {
        $q1Answer = $_POST["q1"];
        $q2Answer = $_POST["q2"];
        $q3Answer = $_POST["q3"];
        $q4Answer = $_POST["q4"];
        $q5Answer = $_POST["q5"];

        $percentCorrect = 0;
        $questionsAnsweredCorrectly = 0;

        if($q1Answer == "Tristan")
        {
            $questionsAnsweredCorrectly++;
            $percentCorrect += 20; 
        } 

        if($q2Answer == "Bayern Munich")
        {
            $questionsAnsweredCorrectly++;
            $percentCorrect += 20; 
        }

        if($q3Answer == "Abe")
        {
            $questionsAnsweredCorrectly++;
            $percentCorrect += 20; 
        } 

        if($q4Answer == "Topeka")
        {
            $questionsAnsweredCorrectly++;
            $percentCorrect += 20; 
        }

        if($q5Answer == "Whattaburger")
        {
            $questionsAnsweredCorrectly++;
            $percentCorrect += 20; 
        }

        echo "Quesions Answered Correctly: " . $questionsAnsweredCorrectly . "<br>";
        echo "Percent Correct: " . $percentCorrect . "%" . "<br>";
    }

    checkAnswers();
    computeGrade(); 


?>

