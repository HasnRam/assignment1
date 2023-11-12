<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch form data
    $firstName = $_POST['firstname'] ?? '';
    $lastName = $_POST['lastname'] ?? '';
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['pass'] ?? '';
    $sex = $_POST['sex'] ?? '';
    $ageGroup = $_POST['ageGroup'] ?? '';
    $language = $_POST['language'] ?? '';

    // Validate data
    if (empty($firstName) || empty($lastName) || empty($username) || empty($email) || empty($password)) {
        die('Please fill in all required fields.');
    }

    if ($_POST['pass'] !== $_POST['confirmPassword']) {
        die('Passwords do not match.');
    }

    // Check if username already exists
    $usersData = array_map('str_getcsv', file('signup_data.csv'));
    foreach ($usersData as $user) {
        if ($user[2] === $username) {
            die('Username already exists. Please choose another one.');
        }
    }

    // Prepare data for CSV
    $data = [
        $firstName,
        $lastName,
        $username,
        $email,
        $password,
        $sex,
        $ageGroup,
        $language
    ];

    // CSV file path
    $csvFile = 'signup_data.csv';

    // Write data to CSV
    $file = fopen($csvFile, 'a');
    fputcsv($file, $data);
    fclose($file);

    echo("Login successful , Now please Login");
    header("location:../index.html");
    exit; 
} else {
    echo 'Error: Invalid request';
}
?>
