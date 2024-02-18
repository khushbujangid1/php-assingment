<?php
$stored_username="example_user";
$stored_password="example_password";
$user_input_username=$_POST['username']; 
$user_input_password=$_POST['password'];
if ($user_input_username===$stored_username && $user_input_password=== $stored_password) {
echo "Login successful";
} else {
echo "Invalid credentials";
}
?>