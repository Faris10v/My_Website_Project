<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from the form
    $experience = isset($_POST['experience']) ? implode(", ", $_POST['experience']) : "No feedback";
    $topic = $_POST['topic'] ?? "No topic selected";
    $specificFeedback = $_POST['specificFeedback_and_proposal'] ?? "No feedback provided";
    $rating = $_POST['Website_rating_out_of_10'] ?? "No rating";

    // Save the data to a file
    $file = "feedbacks.txt";
    $data = "Experience: $experience\nTopic: $topic\nFeedback: $specificFeedback\nRating: $rating\n\n";
    file_put_contents($file, $data, FILE_APPEND);

    // Confirmation message
    echo "Thank you! Your feedback has been received.";
}
?>
</body>
</html>