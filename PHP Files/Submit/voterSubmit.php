<?php

include('report.php');

if (isset($_POST['submit'])) {
    // Retrieve form data
    $voter_id = $_POST['voter_id'];
    $name = $_POST['voter_name'];
    $address = $_POST['voter_address'];

    // Insert the data into the 'Voters' table
    $sql = "INSERT INTO voters (VoterId, Name, Address) VALUES ('$voter_id', '$name', '$address')";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        header('location:display.php');
    } else {
        echo "Error inserting data into Voters table: " . mysqli_error($connection);
    }
}

?>
