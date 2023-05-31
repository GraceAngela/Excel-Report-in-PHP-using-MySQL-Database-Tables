<?php
$connect = mysqli_connect("localhost", "root", "", "govtelections");
$sql = "SELECT * FROM voters";  
$result = mysqli_query($connect, $sql);
?>
<html>  
 <head>  
  <title>Voters Table</title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Pagestyle.css">
    <style>
        label {
            font-weight: 600;
        }
    </style>
 </head>  
 <body>  
 <div class="wrapper rounded" style="width:1140px;">
        <div class="h2 text-center">Voters Table</div>
        <div class="line" style="width: 120px;margin-left:44%;"></div>

        <table class="table table-striped table-bordered" style="margin-top:1rem;">
            <div id="live_data"></div>
    <table class="table table-bordered">
     <tr>  
                         <th>VoterId</th>  
                         <th>Name</th>  
                         <th>Address</th>  
    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["VoterId"].'</td>  
         <td>'.$row["Name"].'</td>  
         <td>'.$row["Address"].'</td>  
       </tr>  
        ';  
     }
     ?>
    </table>
    <br />
    <form method="post" action="votersdownload.php">
        <input type="submit" name="export_excel" class="btn btn-success" value="Export to Excel" style="float:center;">
        <a href="Report.php" class="btn btn-warning" style="float:right;">Main Page</a>
    </form>
   </div>  
        </table>
        
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </div>  
 </body>  
</html>