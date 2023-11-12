<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($password)) {
        die('Please fill in both username and password fields.');
    }

    $usersData = array_map('str_getcsv', file('signup_data.csv'));

    $loginSuccessful = false;
    foreach ($usersData as $user) {
        if ($user[2] === $username && $user[4] === $password) { // Check if username and password match
            $loginSuccessful = true;
            break;
        }
    }

    if ($loginSuccessful) {
        // Assuming the username is obtained during login and stored in the session variable
        session_start();
        $_SESSION['username'] = $username; // $username is the username obtained during login
        header("location:../htmlFiles/page3.php");// Or redirect to a dashboard page
    } else {
        echo 'Invalid username or password.';
    }
} else {
    echo 'Error: Invalid request';
}
?>
