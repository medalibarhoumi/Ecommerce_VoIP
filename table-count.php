<html>
    <head>
    <link href="bootstrap-table\dist\css\bootstrap.css" rel="stylesheet">
    </head> 
    <style>
.header{
  background-color: green;
  text-align: center;
}
</style>
    <body>
<table class="table table-dark table-hover">

  <tbody>
<?php
// Read the JSON file 
$json = file_get_contents('count.json');

// Decode the JSON file
$json_data = json_decode($json, true);
echo"<tr>";
echo"<td colspan='3' class='header'>answered and no aswered calls</td>";
echo"</tr>";
foreach ($json_data as $k => $v) {
    echo"<tr>";
    if ($v["Status"] == "Answered"){
        echo"<td style='color: green'>";echo$v["Status"];echo"</td>"; 
    } else {
    echo"<td style='color: red'>";echo$v["Status"];echo"</td>";
    }
    
    echo"<td>";echo$v["Count"]; echo"</td>";
     
}
?>
 </tbody>
  
  </table>
  </body>
  </html>