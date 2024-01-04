<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $user_age = $_POST['user_age'];
    echo "Task 4: My name is $user_name, I am $user_age years old.<br>";
}

?>

<!-- Task 4: HTML Form -->
<form method="post" action="">
    <label for="user_name">Name:</label>
    <input type="text" name="user_name" required><br>

    <label for="user_age">Age:</label>
    <input type="number" name="user_age" required><br>

    <button type="submit">Submit</button>
</form>