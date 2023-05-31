<!DOCTYPE html>
<html>
<head>
  <title>Election Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="Pagestyle.css">
</head>
<body>
  <br><br>
  <header class="head text-center">
    <h1>Government Elections Official WebPage</h1>
  </header>
  
  <section class="wrapper-home">
    <!-- Voters Section -->
    <h2>Voters</h2>
    <p><a href="VotersForm.html">Enter Voter Details</a></p>
  </section>
  
  <section class="wrapper-home">
    <!-- Candidates Section -->
    <h2>Candidates</h2>
    <p><a href="CandidatesForm.html">Enter Candidate Details</a></p>
  </section>
  
  <section class="wrapper-home">
    <!-- Election Results Section -->
    <h2>Election Results</h2>
    <p><a href="ResultsForm.html">Click here to Check the Election Results</a> <br>(Election Commission Only) </p>
  </section>
  
  <footer style="text-align: center; color:white; width: 100%;"">
    &copy; Government Official Elections WebPage. All rights reserved.
  </footer>
</body>
</html>

<?php

// Create a connection
$connection = new mysqli("localhost", "root", "", "govtelections");

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set the character set
$connection->set_charset("utf8mb4");
?>


