<?php

include('report.php');

if (isset($_POST['submit'])) {
    // Retrieve form data
    $officer_id = $_POST['officer_id'];
    $total_votes = $_POST['total_votes'];
    $voting_district = $_POST['voting_district'];

    // Insert the data into the 'ElectionResults' table
    $sql = "INSERT INTO ElectionResults (OfficerId, TotalVotes, VotingDistrict) VALUES ('$officer_id', '$total_votes', '$voting_district')";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        header('location:display.php');
    } else {
        echo "Error inserting data into Voters table: " . mysqli_error($connection);
    }
}
?>
