<?php
$server = "okmart.mysql.database.azure.com";
$user = "azure";
$password = "Sagar@2001";
$database = "okmart";
$ssl_mode = MYSQLI_CLIENT_SSL;

// Establishing a connection to the database
$cid = mysqli_init();
mysqli_ssl_set($cid, NULL, NULL, NULL, NULL, NULL);
mysqli_real_connect($cid, $server, $user, $password, $database, 3306, NULL, $ssl_mode);

// Check connection
if (!$cid) {
    die("Connection failed: " . mysqli_connect_error());
}

// Function to execute SQL queries and return the number of affected rows (for insert, update, delete)
function iud($query)
{
    global $cid;
    $result = mysqli_query($cid, $query);
    $n = mysqli_affected_rows($cid);
    return $n;
}

// Function to execute SQL queries and return the result set
function select($query)
{
    global $cid;
    $result = mysqli_query($cid, $query);
    return $result;
}

// Example usage:
// $insert_result = iud("INSERT INTO your_table (column1, column2) VALUES ('value1', 'value2')");
// $select_result = select("SELECT * FROM your_table");
?>