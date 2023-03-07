<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
    
</head>
<body>


<?php


echo "<table class=styled-table>";
echo"<thead>";
echo "<tr>";
echo "<th>Number (1-12) </th>";
echo" <th>Operand</th>";
echo" <th>Result</th>";

   echo "</tr>";


 
 echo "</thead>";
echo "<tbody>";
$operand = 5;
for ($i=1; $i <20; $i++) { 
$c = $i *5;
    echo "<tr>";
   echo " <td> $i  </td> ";
  echo " <td> 5 </td> ";
   echo "<td> {$c} </td> ";
  echo "</tr>";
}
       

echo "</tbody>";
  
echo"</table>";


?>

</body>
</html>