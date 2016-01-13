<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("blair.scot", "ispoon", "ispoon", "ispoon");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$item = mysqli_real_escape_string($link, $_POST['spoon_item']);
$quantity = mysqli_real_escape_string($link, $_POST['spoon_qty']);
$timestamp = mysqli_real_escape_string($link, $_POST['date1']);

// attempt insert query execution
$sql = "INSERT INTO musselburgh (item, quantity, timestamp) VALUES ('$item', '$quantity', '$timestamp')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
