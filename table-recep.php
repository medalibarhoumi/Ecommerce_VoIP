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
$json = file_get_contents('received.json');

// Decode the JSON file
$json_data = json_decode($json, true);
echo"<tr>";
echo"<td colspan='3' class='header'>Appel Entrants</td>";
echo"</tr>";
foreach ($json_data as $k => $v) {
    echo"<tr>";
    echo"<td>";echo$v["Callee Name"];echo"</td>";
    
    echo"<td>";echo$v["count Caller Number"]; echo"</td>";
     
}
?>
 </tbody>
  
  </table>
  </body>
  </html>