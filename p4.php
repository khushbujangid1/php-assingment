<?php
$num=$_POST['num'];
$score=$num;
if($score<60)
{
    echo "Grade is F";
}
elseif($score<=69)
{
    echo "Grade is D";
}
elseif($score<=79)
{
    echo "Grade is C";
}
elseif($score<=89)
{
    echo "Grade is B";
}
elseif($score<=100)
{
    echo "Grade is A";
}
else
{
    echo"Enter a valid score";
}
