<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $response = array(
        'success' => false,
        'message' => '',
        'errors' => array()
    );

    if (empty($username)) {
        $response['message'] = 'Failed to login.';
        $response['errors']['username'] = 'Username is required.';
    }
    if (empty($password)) {
        $response['message'] = 'Failed to login.';
        $response['errors']['password'] = 'Password is required.';
    }

    if (empty($response['errors'])) {
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['username'] = $username;
        $response['success'] = true;
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>