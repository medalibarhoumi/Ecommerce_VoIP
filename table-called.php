<html>
    <head>
    <link href="bootstrap-table\dist\css\bootstrap.css" rel="stylesheet">
    </head> 
    <body>
<table class="table table-dark table-hover">
<style>
.header{
  background-color: green;
  text-align: center;
}
</style>

  <tbody>
<?php
// Read the JSON file 
$json = file_get_contents('called20.json');

// Decode the JSON file
$json_data = json_decode($json, true);
echo"<tr>";
echo"<td colspan='3' class='header'>Appel Sortants</td>";
echo"</tr>";
foreach ($json_data as $k => $v) {
    echo"<tr>";
    echo"<td>";echo$v["Caller Name"];echo"</td>";
    
    echo"<td>";echo$v["count Callee Number"]; echo"</td>";
     
}
?>
 </tbody>
  
  </table>
  </body>
  </html>