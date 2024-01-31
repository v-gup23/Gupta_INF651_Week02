<!DOCTYPE html>
<html>
<head>
    <title>Get and Display User Information</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
<?php
if(isset($_GET['firstname']) && !empty($_GET['firstname']) && isset($_GET['lastname']) && !empty($_GET['lastname']) && isset($_GET['age']) && !empty($_GET['age'])){
    $firstname = htmlspecialchars($_GET['firstname']);
    $lastname = htmlspecialchars($_GET['lastname']);
    $age = htmlspecialchars($_GET['age']);

    echo "<p>Hello, my name is $firstname $lastname.</p>";

    if($age >= 18){
        echo "<p>I am $age years old and I am old enough to vote in the United States.</p>";
    } else {
        echo "<p>I am $age years old and I am not old enough to vote in the United States.</p>";
    }

    $days = $age * 365;
    echo "<p>I have lived approximately $days days.</p>";

    echo "<p>Current date: " . date("Y-m-d") . "</p>";
} else {
    echo "<p>Please provide all the required non-empty parameters (firstname, lastname, age) in the URL.</p>";
}
?>
</div>
</body>
</html>
