<?php
$step=10001;
if($step>=5000 && $step<=10000)
{
    echo "Your fitness Level is intermediate"."<br>"."Your Foot step is $step";
}
elseif($step<5000)
{
    echo "Your fitness Level is Begineer"."<br>"."Your Foot step is $step";
}
elseif($step>10000)
{
    echo "Your fitness Level is Advaced "."<br>"."Your Foot step is $step";
}
else
{
    echo "Your fitness is so good";
}