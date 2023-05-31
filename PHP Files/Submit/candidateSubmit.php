<?php

include('report.php');

if (isset($_POST['submit'])) {
    // Retrieve form data
    $candidate_id = $_POST['candidate_id'];
    $candidate_name = $_POST['candidate_name'];
    $party_affiliation = $_POST['party_affiliation'];

    // Insert the data into the 'Voters' table
    $sql = "INSERT INTO Candidates (CandidateId, Name, PartyAffiliation) VALUES ('$candidate_id', '$candidate_name', '$party_affiliation')";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        header('location:CandidatesExcel.php');
    } else {
        echo "Error inserting data into Voters table: " . mysqli_error($connection);
    }
}
?>
