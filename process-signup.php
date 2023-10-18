<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $birthday = $_POST["birthday"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $username = $_POST["username"];
    $sex = $_POST["sex"];
    $password = $_POST["password"];

    $host = "localhost";
    $dbname = "login_db";
    $username = "root";
    $password = ""

    // SQL query to insert data into the database
    $sql = "INSERT INTO users (firstname, lastname, birthday, email, number, username, sex, password)
            VALUES ('$firstname', '$lastname', '$birthday', '$email', '$number', '$username', '$sex', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        echo "Registration successful!";
    } else {
        // Error occurred while inserting data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
