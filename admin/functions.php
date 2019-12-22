<?php

/*
 * =============================
 * Database helper functions
 * =============================
 */

// Regirction
function redirect($location)
{
    return header("Location" . $location);
    exit();
}

// Query Function
function query($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    confirmQuery($result);
    return $result;
}

// Confirm Query
function confirmQuery($result)
{
    global $connect;

    if (!$result) {
        die("Query failed! " . mysqli_error($connect));
    }
}

// Fetch data from database
function fetchRecords($result)
{
    return mysqli_fetch_array($result);
}

/*
 * =============================
 * Authenticate helper functions
 * =============================
 */

// Check admin
function isAdmin()
{
    if (isLoggedIn()) {
        $admin_query = query("SELECT user_role FROM users WHERE id = ". $_SESSION['user_id'] ." ");


        $row = fetchRecords($admin_query);

        if ($row['user_role'] == 'admin') {
            return true;
        } else {
            return false;
        }
    }
    return false;
}

// Check logged in user id
function loggedInUserId()
{
    if (isLoggedIn()) {
        $loggedUser_query = query("SELECT * FROM users WHERE username ='". $_SESSION['username'] ."' ");
        confirmQuery($loggedUser_query);
        $user = fetchRecords($loggedUser_query);
        return mysqli_num_rows($loggedUser_query) >= 1 ? $user['id'] : false;
    }
    return false;
}

/*
 * =============================
 * Users helper functions
 * =============================
 */

// User Login
function isLoggedIn()
{
    if (isset($_SESSION['user_role'])) {
        return true;
    }
    return false;
}

// Check user logged in
function checkIfUserLoggedInAndRedirectAdmin($redirectLocation = null)
{
    if (isLoggedIn()) {
        redirect($redirectLocation);
    }
}

