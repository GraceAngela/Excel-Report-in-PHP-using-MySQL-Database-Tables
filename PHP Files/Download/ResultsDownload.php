<?php
$connection = mysqli_connect("localhost", "root", "", "govtelections");
$output = "";
if(isset($_POST['export_excel'])){
    $sql = "SELECT * FROM electionresults ORDER BY OfficerId DESC";
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result)>0){
        $output .= '
            <table class = "table" bordered = "1">
            <tr>
                <th>OfficerId</th>
                <th>TotalVotes</th>
                <th>VotingDistrict</th>
            </tr>
        ';
        while($row = mysqli_fetch_array($result)){
            $output .='
                <tr>
                    <td>'.$row["OfficerId"].'</td>
                    <td>'.$row["TotalVotes"].'</td>
                    <td>'.$row["VotingDistrict"].'</td>
                </tr>
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename = ResultsExcel.xls");
        echo $output;
    }
}
?>