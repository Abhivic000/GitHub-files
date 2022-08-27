<link rel="stylesheet" href="44_CS&E_Abhishek_Singh.css">
<style>
        .container{
            background:rgb(17, 56, 24) ;
            color:white;
             border: 3px dotted  rgb(90, 161, 148);
             padding: 69px;
             margin: 40px;
             font-style: italic;
            border-top-left-radius: 14px;
            border-top-right-radius: 24px;
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 14px;
            font-size: large;
        
         }
         /* #submit:hover{
            cursor:pointer;
            background-color:black;
            color:grey;} */
            </style>
<form class="container" action="#" align="center"  method="POST">
        <label> Name: </label>
        <input type="text" name="name" class="class1" required placeholder="Enter your name.."><br><br>
        <label> EPC: </label>
        <input type="number" name="Eng" class="class1"  required placeholder="Enter the marks.."><br><br>
        <label> EM: </label>
        <input type="number" name="Em" class="class1"  required placeholder="Enter the marks.."><br><br>
        <label> Chemistry: </label>
        <input type="number" name="Chem" class="class1"  required placeholder="Enter the marks.."><br><br>
        <label> PPS:</label>
        <input type="number" name="Pps" class="class1"  required placeholder="Enter the marks.."><br><br>
        <label> Maths: </label>
        <input type="number" name="Math" class="class1"  required placeholder="Enter the marks.."><br><br>
        <!-- <input id="submit" type="submit" name="submit"><br><br> --> 
          <a href="#" class="blue" ><span><input type="submit" name="submit"></span><i><i></a><br><br>
    </form> 

    <!-- comment till here -->
<?php

if($_POST){   
$servername = "localhost";
$username = "root";
$password = "";
$database = "web dev";

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
 echo "Connection Failed<br>";
}
else{
    echo "Connection Successfull<br>";
}
 
  $Result=($_POST["Eng"]+$_POST["Em"]+$_POST["Chem"]+$_POST["Pps"]+$_POST["Math"])/5;
  if($Result>=40){
      $Grade="PASS";
  }
   else{
      $Grade="FAIL";
  }


$DATE=date( 'Y-m-d');
//comment it
 $sql = "INSERT INTO result (name, Eng, Em, Chem, Pps, Math, Percent,Grade,date) VALUES 
 ('$_POST[name]',$_POST[Eng],$_POST[Em],$_POST[Chem],$_POST[Pps],$_POST[Math],$Result,'$Grade','$DATE')";

//open it
//  $sql = "INSERT INTO result (name, Eng, Em, Chem, Pps, Math, Percent,Grade,date) VALUES ('sbhi',70,69,80,60,70,70,'Pass','$DATE')";
if ($conn->query($sql) == TRUE) {
echo "New record created successfully";
} 
else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>