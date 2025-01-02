<?php
$file = "feedbacks.txt";

if (file_exists($file)) {
    $feedbacks = file_get_contents($file);
    echo nl2br($feedbacks); // Display feedbacks with line breaks
} else {
    echo "No feedbacks received yet!";
}
?>
