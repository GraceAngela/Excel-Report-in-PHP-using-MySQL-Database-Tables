<?php
$connection = mysqli_connect("localhost", "root", "", "govtelections");
$output = "";
if(isset($_POST['export_excel'])){
    $sql = "SELECT * FROM Voters ORDER BY VoterId DESC";
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result)>0){
        $output .= '
            <table class = "table" bordered = "1">
            <tr>
                <th>VoterId</th>
                <th>Name</th>
                <th>Address</th>
            </tr>
        ';
        while($row = mysqli_fetch_array($result)){
            $output .='
                <tr>
                    <td>'.$row["VoterId"].'</td>
                    <td>'.$row["Name"].'</td>
                    <td>'.$row["Address"].'</td>
                </tr>
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename = VotersExcel.xls");
        echo $output;
    }
}
?>