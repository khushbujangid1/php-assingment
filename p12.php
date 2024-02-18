<?php
function isNewUser($userId) {
$userHasSubscription=
checkSubscription($userId);
return! $userHasSubscription;
}
function checkSubscription($userId)
{
return false;
}
if (isNewUser($userId)) {
echo "Welcome! You are eligible for a trial period.";
header("Location: subscription_page.php?trial=true");
exit();
} else {
echo "Welcome back! Choose your subscription plan.";
header("Location:subscription_page.php");
exit();
}
?>
