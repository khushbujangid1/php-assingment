<?php
$correct_answers=array ( 'Q1' => 'A' , 'Q2' => 'B' , 'Q3' => 'C' , 'Q4' => 'D' , 'Q5'=> 'A'); 
$user_answers=$_POST['answers'];
$score=0;
foreach ($user_answers as $question =>$answer) {
if
(isset($correct_answers[$question]) && $answer=== $correct_answers[$question]) { 
$score++;
}
}
echo "Your score is: ".$score "/".count($correct_answers);
?>