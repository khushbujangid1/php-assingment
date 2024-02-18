<?php
function truncateTitle($title) {
$maxlength = 50 ;
if (strlen($title)>$maxLength) {
$truncatedTitle= 
substr($title,0, $maxLength); 
return $truncatedTitle;
} else {
return $title;
}
}
?>