<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Calculator</title>
    <link rel="stylesheet" href="44_CS&E_Abhishek_Singh.css">
    
    <style>
        .container{
            background:rgb(17, 56, 24) ;
            color:white;
             border: 3px dotted  rgb(90, 161, 148);
             padding: 49px;
             margin: 20px;
             font-style: italic;
            border-top-left-radius: 14px;
            border-top-right-radius: 24px;
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 14px;
            font-size: large;
        
         }
         #submit:hover{
            cursor:pointer;
            background-color:black;
            color:light green;
        }
       #box{
        background-color: rgb(192, 176, 176);
        border: 2px dotted  rgb(90, 161, 148);
        border-top-left-radius: 14px;
        border-top-right-radius: 14px;
        border-bottom-left-radius: 14px;
        border-bottom-right-radius: 14px;
        padding: 3px;
        margin: 2px;
        font-style: italic;
    
       }
       body{
            background-color: rgb(72, 79, 66);
       }
       .body1{
        color:white;
       }
    </style>

</head>
<body>

<h1 class="body1">Result:</h1>
    <form class="container" action="#" align="center"  method="POST">
        <label> Name: </label>
        <input type="text" name="name" class="class1" required placeholder="enter your name.."><br><br>
        <label> EPC: </label>
        <input type="number" name="eng" class="class1"  required placeholder="enter the marks"><br><br>
        <label> EM: </label>
        <input type="number" name="em" class="class1"  required placeholder="enter the marks"><br><br>
        <label> Chemistry: </label>
        <input type="number" name="chem" class="class1"  required placeholder="enter the marks"><br><br>
        <label> PPS:</label>
        <input type="number" name="pps" class="class1"  required placeholder="enter the marks"><br><br>
        <label> Maths: </label>
        <input type="number" name="math" class="class1"  required placeholder="enter the marks"><br><br>
        <!-- <input id="submit" type="submit" name="submit"><br><br> -->
         <a href="#" class="blue" ><span><input type="submit" name="submit"></span><i><i></a><br><br>
    </form>
    <?php

    if($_POST)
    {
    $a=$_POST["name"];
    $b=$_POST["eng"];
    $c=$_POST["em"];
    $d=$_POST["chem"];
    $e=$_POST["pps"];
    $f=$_POST["math"];
    $g=($b+$c+$d+$e+$f)/5;
    if($g>=40)
    {
        $x = "Pass";
        echo 'congratulation &#128516';
    }
    else{

        $x = "Fail";
        echo 'Get ready for pitaye &#128542';
    }
    echo "<table border=4 id='box'>
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
    <tr>
    <td>".$a."</td>
    <td>".$b."</td>
    <td>".$c."</td>
    <td>".$d."</td>
    <td>".$e."</td>
    <td>".$f."</td>
    <td>".$g."</td>
    <td>".$x."</td>
    </tr>
    </table>";
    }
    ?>
</body>
</html>