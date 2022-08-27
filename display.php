<!-- <html>
  <head>
    <style>
#box{
  backgroung-color="grey";
}
</style>
</head>
</html> -->




<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "web dev";

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
 echo "Connection Failed<br>";
  die;
}
else{
    echo "Connection Successfull<br>";
}

$fetch="SELECT * FROM Result";

$store=$conn->query($fetch);
?>

<style>
        .container{
            background:rgb(192, 176, 176) ;
            color:black;
             border: 3px dotted  rgb(90, 161, 148);
             padding: 79px;
             margin: 40px;
             font-style: italic;
            border-top-left-radius: 14px;
            border-top-right-radius: 24px;
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 14px;
            font-size: large;
        
         }

</style>
<table class="container" border=4 style=text-align:center >


    <tr >
    <th>NAME</th>
    <th>English</th>
    <th>EM</th>
    <th>CHEM</th>
    <th>PPS</th>
    <th>MATH</th>
    <th>PERCENTAGE</th>
    <th>RESULT</th>
    </tr>

    <?php
    while($row=$store->fetch_assoc()){?>
     <tr>
     <td><?php echo $row["Name"];?></td>
       <td><?php echo $row["Eng"];?></td>
       <td><?php echo $row["Em"];?></td>
       <td><?php echo $row["Chem"];?></td>
       <td><?php echo $row["Pps"];?></td>
       <td><?php echo $row["Math"];?></td>
       <td><?php echo $row["Percent"];?></td>
       <td><?php echo $row["Grade"];?></td>
      </tr>

          <?php
          }
          ?>
  </table>