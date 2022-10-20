<html>
    <head>
    <link href="bootstrap-table\dist\css\bootstrap.css" rel="stylesheet">
    </head> 
    <style>
      td.header.in{
        color: black;
        font-weight: bolder;
        font-style: italic;
        text-align: center;
        background-color: blueviolet;
      }
      td.header.out{
        color: black;
        font-weight: bolder;
        font-style: italic;
        text-align: center;
        background-color: burlywood;
      }
      table.table-dark.table-hover.small-text{
font-size: small;
      }
      .title{
        text-align: center;
      }
    </style>
    <body>
      <h1 class="title">Analyse E-Commerce VoIP 19/10/2022 </h1>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
            <table class="table table-dark table-hover small-text">

<tbody>
<?php
// Read the JSON file 
$json = file_get_contents('wed-data.json');

// Decode the JSON file
$json_data = json_decode($json, true);
echo"<tr>";
echo"<td colspan='3' class='header in'>Incoming Calls No Answered</td>";
echo"<td colspan='3' class='header out'>Outcoming Re-Called No Answered number </td>";
echo"</tr>";
foreach ($json_data as $k => $v) {
echo"<tr>";
  echo"<td>";echo$v["Incoming no answer"];echo"</td>";
  
  echo"<td>";echo$v['Column2']; echo"</td>";
 
  echo"<td>";echo$v['Column3']; echo"</td>";
  
  
if ($v['Number no answered returned Call'] == null){
  
  echo"<td style='color: red'>";echo "no called";echo"<td>";
  
} else {
  
  echo"<td>";echo $v['Number no answered returned Call'];echo"<td>";
  
}

if ($v['Column5'] == null ){
  
  echo"<td style='color: red; font-weight: bold'>";echo "no called";echo"<td>";
  
} else {
  
  echo"<td style='color: green; font-weight: bold'>";echo $v['Column5'];echo"<td>";
  
}


}
?>
</tbody>

</table>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
            <table class="table table-dark table-hover">

<tbody>
<?php
// Read the JSON file 
$json = file_get_contents('received.json');

// Decode the JSON file
$json_data = json_decode($json, true);
echo"<tr>";
echo"<td colspan='3' class='header'>Statistic incoming call</td>";
echo"</tr>";
foreach ($json_data as $k => $v) {
  echo"<tr>";
  echo"<td>";echo$v["Callee Name"];echo"</td>";
  
  echo"<td>";echo$v["count Caller Number"]; echo"</td>";
   
}
?>
</tbody>

						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
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
echo"<td colspan='3' class='header'>Statistic outcoming call</td>";
echo"</tr>";
foreach ($json_data as $k => $v) {
    echo"<tr>";
    echo"<td>";echo$v["Caller Name"];echo"</td>";
    
    echo"<td>";echo$v["count Callee Number"]; echo"</td>";
     
}
?>
 </tbody>
  
  </table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
            <table class="table table-dark table-hover">

<tbody>
<?php
// Read the JSON file 
$json = file_get_contents('count.json');

// Decode the JSON file
$json_data = json_decode($json, true);
echo"<tr>";
echo"<td colspan='3' class='header'>Stat answered and no aswered calls</td>";
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

  </body>
  </html>