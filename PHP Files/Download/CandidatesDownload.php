<?php
$connection = mysqli_connect("localhost", "root", "", "govtelections");
$output = "";
if(isset($_POST['export_excel'])){
    $sql = "SELECT * FROM Candidates ORDER BY CandidateId DESC";
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result)>0){
        $output .= '
            <table class = "table" bordered = "1">
            <tr>
                <th>CandidateId</th>
                <th>Name</th>
                <th>PartyAffiliation</th>
            </tr>
        ';
        while($row = mysqli_fetch_array($result)){
            $output .='
                <tr>
                    <td>'.$row["CandidateId"].'</td>
                    <td>'.$row["Name"].'</td>
                    <td>'.$row["PartyAffiliation"].'</td>
                </tr>
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename = CandidatesExcel.xls");
        echo $output;
    }
}
?>